@extends('layouts.app')

@section('title', 'Class Details')

@section('content')
<h1 class="text-2xl font-bold mb-4">Class Details: {{ $class->id }}</h1>
<h2 class="text-xl font-bold mb-3">Attendance</h2>
<form method="POST" action="{{ route('classes.attendance', $class->id) }}">
    @csrf
    <table class="table-auto w-full bg-white shadow-md rounded-lg">
        <thead>
            <tr>
                <th class="px-4 py-2">Student</th>
                <th class="px-4 py-2">Present</th>
            </tr>
        </thead>
        <tbody>
            @foreach($class->attendance as $record)
                <tr>
                    <td class="border px-4 py-2">{{ $record->student->fullname }}</td>
                    <td class="border px-4 py-2">
                        <input type="checkbox" name="attendance[{{ $record->student->id }}]" value="1" {{ $record->isPresent ? 'checked' : '' }}>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="mt-3">
        <label for="comments" class="block font-bold mb-2">Comments:</label>
        <textarea id="comments" name="comments" class="w-full p-2 border rounded-md" rows="3"></textarea>
    </div>
    <button type="submit" class="mt-4 bg-blue-500 text-white px-4 py-2 rounded">Submit Attendance</button>
</form>
@endsection
