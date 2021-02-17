<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\User;
use App\Models\Internship;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     * https://laravel.com/docs/8.x/eloquent#retrieving-or-creating-models
     * https://laravel.com/docs/8.x/views#passing-data-to-views
     * 
     */
    public function index()
    {
        // Return view with Applications
        return view('Applications.index', [
            'applications' => Application::paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     * 
     * https://laravel.com/docs/8.x/eloquent#retrieving-or-creating-models
     * https://laravel.com/docs/8.x/views#passing-data-to-views
     */
    public function create($id = null)
    {
        // Return view with Internship and User 
        return view('Applications.create', [
            'internship' => Internship::find($id),
            'user' => User::find(\Auth::user()->id)
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * 
     * https://laravel.com/docs/8.x/eloquent#retrieving-or-creating-models
     * https://laravel.com/docs/8.x/session#flash-data
     * 
     */
    public function store(Request $request, $id = null)
    {
        // Create new application and assign values
        $application = new Application;
        $application->user_id = \Auth::user()->id;
        $application->internship_id = $id;
        // Try to save the model
        if($application->save()) {
            // Model saved successfully
            // Sent back to internship page with message
            session()->flash('message', 'The application has been submitted');
            return redirect()->route('internships'); 
        }
        // Model failed to save
        // Return to previous page with error
        session()->flash('message', 'Application failed to submit');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     * 
     * https://laravel.com/docs/8.x/eloquent#retrieving-or-creating-models
     * 
     */
    public function show(Application $application)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     * 
     * https://laravel.com/docs/8.x/eloquent#retrieving-or-creating-models
     * 
     */
    public function edit(Application $application)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     * 
     * https://laravel.com/docs/8.x/eloquent#retrieving-or-creating-models
     * 
     */
    public function update(Request $request, Application $application)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     * 
     * https://laravel.com/docs/8.x/eloquent#retrieving-or-creating-models
     * 
     */
    public function destroy(Application $application)
    {
        //
    }
}
