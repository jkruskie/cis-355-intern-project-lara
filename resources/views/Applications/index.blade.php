@extends('layouts.app')

@section('content')
<p class="text-lg text-center font-bold m-5">Applications</p>
<table class="table-fixed rounded-t-lg m-5 w-full mx-auto bg-gray-800 text-gray-200" >
    <tr class="text-left border-b border-gray-300 text-center">
        <th class="px-4 py-3">Company</th>
        <th class="px-4 py-3">Student</th>
        <th class="px-4 py-3">Date</th>
        <th class="px-4 py-3">Actions</th>
    </tr>
    @foreach($applications as $app)
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
{{ $applications->links() }}
@endsection
