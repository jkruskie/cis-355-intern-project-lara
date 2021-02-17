@extends('layouts.app')

@section('content')
<p class="text-lg text-center font-bold m-5">Internships</p>
@if (Session::has('message'))
    <span class="flex items-center font-medium tracking-wide text-red-500 text-md mt-1 ml-1 mb-1 display-table margin-0-auto">
    {{ Session::get('message') }}
    </span>
@endif
<table class="table-fixed rounded-t-lg m-5 w-full mx-auto bg-gray-800 text-gray-200" >
    <tr class="text-left border-b border-gray-300 text-center">
        <th class="px-4 py-3">Company</th>
        <th class="px-4 py-3">Location</th>
        <th class="px-4 py-3">Job Position</th>
        <th class="px-4 py-3">Actions</th>
    </tr>
    @foreach($internships as $internship)
        <tr class="bg-gray-700 border-b border-white-600 border-b-2 text-center">
            <td class="px-4 py-3">{{ $internship->company_name }}</td>
            <td class="px-4 py-3">{{ $internship->company_location }}</td>
            <td class="px-4 py-3">{{ $internship->job_type }}</td>
            @if(Auth::user()->user_type == 0)
                <td class="px-4 py-3"><a href="/applications/create/{{ $internship->id }}">Apply</a></td>
            @else
            <td class="px-4 py-3">
                <a href="/internships/edit/{{ $internship->id }}">Edit</a>
                <a href="/internships/delete/{{ $internship->id }}">Delete</a>
            </td>
            @endif
        </tr>    
    @endforeach
</table>
{{ $internships->links() }}
@endsection
