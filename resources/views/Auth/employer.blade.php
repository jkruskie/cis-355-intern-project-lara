@extends('layouts.app')
@section('content')
<form action="/register/employer" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="bg-white shadow-lg rounded px-8 pt-6 pb-8 mb-4 flex flex-col mt-4">
        @if (Session::has('error'))
            <span class="flex items-center font-medium tracking-wide text-red-500 text-md mt-1 ml-1 mb-1">
            {{ Session::get('error') }}
            </span>
        @endif
        <div class="mb-4">
            <label class="block text-grey-darker text-sm font-bold mb-2" for="first_name">
            First Name
            </label>
            <input class="shadow border rounded w-full py-2 px-3 text-grey-darker" name="first_name" id="first_name" type="text" placeholder="First Name">
        </div>
        <div class="mb-4">
            <label class="block text-grey-darker text-sm font-bold mb-2" for="last_name">
            Last Name
            </label>
            <input class="shadow border rounded w-full py-2 px-3 text-grey-darker" name="last_name" id="last_name" type="text" placeholder="Last Name">
        </div>
        <div class="mb-4">
            <label class="block text-grey-darker text-sm font-bold mb-2" for="email">
            Email
            </label>
            <input class="shadow border rounded w-full py-2 px-3 text-grey-darker" name="email" id="email" type="text" placeholder="Email">
        </div>
        <div class="mb-6">
            <label class="block text-grey-darker text-sm font-bold mb-2" for="password">
            Password
            </label>
            <input class="shadow border border-red rounded w-full py-2 px-3 text-grey-darker mb-3" name="password" id="password" type="password" placeholder="******************">
        </div>
        <div class="flex items-center justify-between">
            <button type="submit" class="rounded-lg border-2 border-red-500 bg-blue hover:bg-blue-dark text-black font-bold py-2 px-4 rounded" type="button">
            Register
            </button>
        </div>
        </div>
    </form>
@endsection