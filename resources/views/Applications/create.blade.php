@extends('layouts.app')
@section('content')
<p class="text-lg text-center font-bold m-5">Apply for Internship</p>
<div>
    <div class="mt-5 md:mt-0 md:col-span-2">
        <form action="/applications/store/{{$internship->id}}" method="POST" enctype="multipart/form-data">
            @csrf 
            <div class="rounded-t-lg m-5 w-full mx-auto bg-gray-800 text-gray-200">
                <div class="rounded-t-lg m-5 w-full mx-auto bg-gray-700 text-gray-200">
                    <div class="text-center">
                        <div class="">
                            <label for="company_name" class="block text-sm font-medium text-white pt-4">
                            Company Name
                            </label>
                            <div class="mb-4 flex rounded-md shadow-sm">
                                <input type="text" name="company_name" id="company_name" value="{{ $internship->company_name }}" class="margin-0-auto text-black p-1" readonly="readonly">
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <div class="">
                            <label for="company_location" class="block text-sm font-medium text-white">
                            Company Location
                            </label>
                            <div class="mb-4 flex rounded-md shadow-sm">
                                <input type="text" name="company_location" id="company_location" value="{{ $internship->company_location }}" class="margin-0-auto text-black p-1" readonly="readonly">
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <div class="">
                            <label for="job_type" class="block text-sm font-medium text-white">
                            Job Type
                            </label>
                            <div class="mb-4 flex rounded-md shadow-sm">
                                <input type="text" name="job_type" id="job_type" value="{{ $internship->job_type }}" class="margin-0-auto text-black p-1" readonly="readonly">
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <div class="">
                            <label for="name" class="block text-sm font-medium text-white">
                            Name
                            </label>
                            <div class="mb-4 flex rounded-md shadow-sm">
                                <input type="text" name="name" id="name" value="{{ $user->name }}" class="margin-0-auto text-black p-1" readonly="readonly">
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <div class="">
                            <label for="years_of_college" class="block text-sm font-medium text-white">
                            Years Of College
                            </label>
                            <div class="mb-4 flex rounded-md shadow-sm">
                                <input type="text" name="years_of_college" id="years_of_college" value="{{ $user->school_years }}" class="margin-0-auto text-black p-1" readonly="readonly">
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <div class="">
                            <label for="major" class="block text-sm font-medium text-white">
                            Major
                            </label>
                            <div class="mb-4 flex rounded-md shadow-sm pb-2">
                                <input type="text" name="major" id="major" value="{{ $user->major }}" class="margin-0-auto text-black p-1" readonly="readonly">
                            </div>
                        </div>
                    </div>
                    @if($internship->pdf_url)
                        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6 pb-4">
                            <a target="_blank" href="/pdf/{{$internship->pdf_url}}">
                                <button type="button" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 margin-0-auto text-black p-1 display-table">
                                Job Description
                                </button>
                            </a>
                        </div>
                    @endif
                    @if (Session::has('message'))
                        <span class="flex items-center font-medium tracking-wide text-red-500 text-md mt-1 ml-1 mb-1 display-table margin-0-auto">
                        {{ Session::get('message') }}
                        </span>
                    @endif
                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 margin-0-auto text-black p-1 display-table">
                        Save
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection