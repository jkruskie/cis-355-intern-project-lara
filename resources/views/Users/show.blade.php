@extends('layouts.app')
@section('content')
<p class="text-lg text-center font-bold m-5">Show User</p>
<div>
    <div class="mt-5 md:mt-0 md:col-span-2">
        <div class="rounded-t-lg m-5 w-full mx-auto bg-gray-800 text-gray-200">
            <div class="rounded-t-lg m-5 w-full mx-auto bg-gray-700 text-gray-200">
                <div class="text-center">
                    <div class="">
                        <label for="name" class="block text-sm font-medium text-white pt-4">
                        Name
                        </label>
                        <div class="mb-4 flex rounded-md shadow-sm">
                            <input type="text" name="name" id="name" value="{{ $user->name }}" class="margin-0-auto text-black p-1" readonly="readonly">
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <div class="">
                        <label for="email" class="block text-sm font-medium text-white">
                        Email
                        </label>
                        <div class="mb-4 flex rounded-md shadow-sm">
                            <input type="text" name="email" id="email" value="{{ $user->email }}" class="margin-0-auto text-black p-1" readonly="readonly">
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <div class="">
                        <label for="major" class="block text-sm font-medium text-white">
                        Major
                        </label>
                        <div class="mb-4 flex rounded-md shadow-sm">
                            <input type="text" name="major" id="major" value="{{ $user->major }}" class="margin-0-auto text-black p-1" readonly="readonly">
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <div class="">
                        <label for="school_years" class="block text-sm font-medium text-white">
                        School Years
                        </label>
                        <div class="mb-4 flex rounded-md shadow-sm">
                            <input type="text" name="school_years" id="school_years" value="{{ $user->school_years }}" class="margin-0-auto text-black p-1" readonly="readonly">
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <div class="">
                        <label for="user_type" class="block text-sm font-medium text-white">
                        User Type
                        </label>
                        <div class="mb-4 flex rounded-md shadow-sm">
                            <input type="text" name="user_type" id="user_type" value="{{ $user->user_type }}" class="margin-0-auto text-black p-1" readonly="readonly">
                        </div>
                    </div>
                </div>
                <div class="text-center pb-4">
                    <div class="">
                        <label for="created_at" class="block text-sm font-medium text-white">
                        Created At
                        </label>
                        <div class="mb-4 flex rounded-md shadow-sm">
                            <input type="text" name="created_at" id="created_at" value="{{ $user->created_at }}" class="margin-0-auto text-black p-1" readonly="readonly">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <p class="text-lg text-center font-bold m-5">Related Applications</p>
    <table class="table-fixed rounded-t-lg m-5 w-full mx-auto bg-gray-800 text-gray-200" >
        <tr class="text-left border-b border-gray-300 text-center">
            <th class="px-4 py-3">Company</th>
            <th class="px-4 py-3">Student</th>
            <th class="px-4 py-3">Date</th>
            <th class="px-4 py-3">Actions</th>
        </tr>
        @foreach($user->Applications as $app)
            <tr class="bg-gray-700 border-b border-white-600 border-b-2 text-center">
                <td class="px-4 py-3">{{ $app->internship->company_name }}</td>
                <td class="px-4 py-3">{{ $app->user->name }}</td>
                <td class="px-4 py-3">{{ $app->created_at }}</td>
                <td class="px-4 py-3">
                    <a href="/applications/show/{{ $app->id }}">View</a>
                    <a href="/applications/edit/{{ $app->id }}">Edit</a>
                    <a href="/applications/delete/{{ $app->id }}">Delete</a>
                </td>
            </tr>    
        @endforeach
    </table>

</div>
@endsection