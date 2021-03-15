@extends('layouts.app')
@section('content')
<p class="text-lg text-center font-bold m-5">Apply for Internship</p>
<div>
    <div class="mt-5 md:mt-0 md:col-span-2">
        <div class="rounded-t-lg m-5 w-full mx-auto bg-gray-800 text-gray-200">
            <div class="rounded-t-lg m-5 w-full mx-auto bg-gray-700 text-gray-200">
                <div class="text-center">
                    <div class="">
                        <label for="internship" class="block text-sm font-medium text-white pt-4">
                        Internship
                        </label>
                        <div class="mb-4 flex rounded-md shadow-sm">
                            <input type="text" name="internship" id="internship" value="{{ $application->internship->company_name }}" class="margin-0-auto text-black p-1">
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <div class="">
                        <label for="name" class="block text-sm font-medium text-white">
                        Name
                        </label>
                        <div class="mb-4 flex rounded-md shadow-sm">
                            <input type="text" name="name" id="name" value="{{ $application->user->name }}" class="margin-0-auto text-black p-1">
                        </div>
                    </div>
                </div>
                <div class="text-center pb-4">
                    <div class="">
                        <label for="created_at" class="block text-sm font-medium text-white">
                        Created At
                        </label>
                        <div class="mb-4 flex rounded-md shadow-sm">
                            <input type="text" name="created_at" id="created_at" value="{{ $application->created_at }}" class="margin-0-auto text-black p-1">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection