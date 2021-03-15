@extends('layouts.app')

@section('content')
<p class="text-lg text-center font-bold m-5">Users</p>
<table class="table-fixed rounded-t-lg m-5 w-full mx-auto bg-gray-800 text-gray-200" >
    <tr class="text-left border-b border-gray-300 text-center">
        <th class="px-4 py-3">Id</th>
        <th class="px-4 py-3">First Name</th>
        <th class="px-4 py-3">Last Name</th>
        <th class="px-4 py-3">Email</th>
        <th class="px-4 py-3">School Years</th>
        <th class="px-4 py-3">Major</th>
        <th class="px-4 py-3">User Type</th>
        <th class="px-4 py-3">Created At</th>
        <th class="px-4 py-3">Actions</th>
    </tr>
    @foreach($users as $user)
        <tr class="bg-gray-700 border-b border-white-600 border-b-2 text-center">
            <td class="px-4 py-3">{{ $user->id }}</td>
            <td class="px-4 py-3">{{ $user->first_name }}</td>
            <td class="px-4 py-3">{{ $user->last_name }}</td>
            <td class="px-4 py-3">{{ $user->email }}</td>
            <td class="px-4 py-3">{{ $user->school_years }}</td>
            <td class="px-4 py-3">{{ $user->major }}</td>
            <td class="px-4 py-3">{{ $user->user_type }}</td>
            <td class="px-4 py-3">{{ $user->created_at }}</td>
            <td class="px-4 py-3">
                <a href="/users/show/{{ $user->id }}">View</a>
                <a href="/users/edit/{{ $user->id }}">Edit</a>
                <a href="/users/delete/{{ $user->id }}">Delete</a>
            </td>
        </tr>    
    @endforeach
</table>
{{ $users->links() }}
@endsection
