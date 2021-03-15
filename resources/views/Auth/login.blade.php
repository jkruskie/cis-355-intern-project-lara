@extends('layouts.app')

@section('content')
<form method="post" action="{{ route('login') }}">
    @csrf
    <div class="bg-white shadow-lg rounded px-8 pt-6 pb-8 mb-4 flex flex-col mt-4">
      @if (Session::has('error'))
        <span class="flex items-center font-medium tracking-wide text-red-500 text-md mt-1 ml-1 mb-1">
          {{ Session::get('error') }}
        </span>
      @endif
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
          Sign In
        </button>
        <a class="inline-block align-baseline font-bold text-sm text-blue hover:text-blue-darker" href="{{ route('register') }}">
          Forgot Password?
        </a>
      </div>
    </div>
</form>
@endsection