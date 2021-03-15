<?php

namespace App\Http\Controllers;

use App\Models\Internship;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class InternshipController extends Controller
{

        /**
     * DOCUMENTATION
     * 
     * https://laravel.com/docs/8.x/eloquent#retrieving-or-creating-models
     * https://laravel.com/docs/8.x/views#passing-data-to-views
     * 
     *  */ 


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Check if user is an employer
        if(\Auth::user()->user_type == 1) {
            // Employer, send only their own internships
            $internships = Internship::whereUserId(\Auth::user()->id)->paginate(10);
        } else {
            // Student, send all internships
            $internships = Internship::paginate(10);
        }
        return view('Internships.index', [
            'internships' => $internships
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Internships.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $internship = new Internship;
        $internship->fill($request->except('job_description')); 
        $internship->user_id = \Auth::user()->id;
        
        // File was uploaded
        if($request->has('job_description')) {
            $request->validate([
                'file' => 'mimes:pdf|max:2048',
            ]);

            $fileName = Str::uuid() . '.' . $request->job_description->extension();

            $request->job_description->move(public_path('pdf'), $fileName);
            $internship->pdf_url = $fileName;
        } 

        // Try to save the model
        if($internship->save()) {
            // Model saved successfully
            // Sent back to internship page with message
            session()->flash('message', 'The internship has been saved');
            return redirect()->route('internships'); 
        }
        // Model failed to save
        // Return to previous page with error
        session()->flash('message', 'The internship failed to save');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Internship  $internship
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Return view with Internship 
        return view('Internships.show', [
            'internship' => Internship::findOrFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Internship  $internship
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Return view with internship
        return view('Internships.edit', [
            'internship' => Internship::findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Internship  $internship
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Get Internship by id and fill it
        $internship = Internship::findOrFail($id);
        $internship->fill($request->except('job_description')); 
        
        // File was uploaded
        if($request->has('job_description')) {
            $request->validate([
                'file' => 'mimes:pdf|max:2048',
            ]);

            $fileName = Str::uuid() . '.' . $request->job_description->extension();

            $request->job_description->move(public_path('pdf'), $fileName);
            $internship->pdf_url = $fileName;
        } 

        // Try to save the model
        if($internship->save()) {
            // Model saved successfully
            // Sent back to internship page with message
            session()->flash('message', 'The internship has been saved');
            return redirect()->route('internships'); 
        }
        // Model failed to save
        // Return to previous page with error
        session()->flash('message', 'The internship failed to save');
        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Internship  $internship
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $internship = Internship::findOrFail($id);
        $internship->delete();
        return redirect()->back();
    }
}
