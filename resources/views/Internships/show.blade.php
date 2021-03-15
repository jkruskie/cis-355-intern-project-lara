@extends('layouts.app')
@section('content')
<div>
    <div class="mt-5 md:mt-0 md:col-span-2">
        <div class="rounded-t-lg m-5 w-full mx-auto bg-gray-800 text-gray-200">
            <div class="rounded-t-lg m-5 w-full mx-auto bg-gray-700 text-gray-200">
                <div class="text-center">
                    <div class="">
                        <label for="company_name" class="block text-sm font-medium text-white pt-4">
                        Company Name
                        </label>
                        <div class="mb-4 flex rounded-md shadow-sm">
                            <input type="text" name="company_name" id="company_name" value="{{ $internship->company_name }}" class="margin-0-auto text-black p-1">
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <div class="">
                        <label for="company_location" class="block text-sm font-medium text-white">
                        Company Location
                        </label>
                        <div class="mb-4 flex rounded-md shadow-sm">
                            <input type="text" name="company_location" id="company_location" value="{{ $internship->company_location }}" class="margin-0-auto text-black p-1">
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <div class="">
                        <label for="job_type" class="block text-sm font-medium text-white">
                        Job Type
                        </label>
                        <div class="mb-4 flex rounded-md shadow-sm">
                            <input type="text" name="job_type" id="job_type" value="{{ $internship->job_type }}" class="margin-0-auto text-black p-1">
                        </div>
                    </div>
                </div>
                @if($internship->pdf_url)
                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6 pb-4 text-center">
                    <label for="job_type" class="block text-sm font-medium text-white display-table margin-0-auto pb-1">
                        Job Description
                        </label>
                    <a target="_blank" href="/pdf/{{$internship->pdf_url}}">
                        <button type="button" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 margin-0-auto text-black p-1 display-table">
                        Download
                        </button>
                    </a>
                </div>
            @endif
            </div>
        </div>
    </div>
</div>

<p class="text-lg text-center font-bold m-5">Applications</p>
<table class="table-fixed rounded-t-lg m-5 w-full mx-auto bg-gray-800 text-gray-200" >
    <tr class="text-left border-b border-gray-300 text-center">
        <th class="px-4 py-3">Student</th>
        <th class="px-4 py-3">Date</th>
        <th class="px-4 py-3">Actions</th>
    </tr>
    @foreach($internship->applications as $app)
        <tr class="bg-gray-700 border-b border-white-600 border-b-2 text-center">
            <td class="px-4 py-3">{{ $app->user->name}}</td>
            <td class="px-4 py-3">{{ $app->created_at }}</td>
            <td class="px-4 py-3">
                <a href="/applications/show/{{ $app->id }}">View</a>
                <a href="/applications/edit/{{ $app->id }}">Edit</a>
                <a href="/applications/delete/{{ $app->id }}">Delete</a>
            </td>
        </tr>    
    @endforeach
</table>
@endsection