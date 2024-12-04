@extends('layouts.app')

@section('title', 'All Users')

@section('content')
<h1 class="text-2xl font-bold mb-4">All Users</h1>
<table class="table-auto w-full bg-white shadow-md rounded-lg">
    <thead>
        <tr>
            <th class="px-4 py-2">Name</th>
            <th class="px-4 py-2">Email</th>
            <th class="px-4 py-2">Role</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
            <tr>
                <td class="border px-4 py-2">{{ $user->fullname }}</td>
                <td class="border px-4 py-2">{{ $user->email }}</td>
                <td class="border px-4 py-2">{{ $user->role }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
