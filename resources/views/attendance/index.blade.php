@extends('layouts.app')

@section('title', 'Your Attendance')

@section('content')
<h1 class="text-2xl font-bold mb-4">Your Attendance</h1>
<table class="table-auto w-full bg-white shadow-md rounded-lg">
    <thead>
        <tr>
            <th class="px-4 py-2">Class</th>
            <th class="px-4 py-2">Percentage</th>
            <th class="px-4 py-2">Status</th>
            <th class="px-4 py-2">Comments</th>
        </tr>
    </thead>
    <tbody>
        @foreach($attendanceData as $data)
            <tr class="
                @if($data['percentage'] < 75) bg-red-100 font-bold 
                @elseif($data['percentage'] < 85) bg-yellow-100 
                @else bg-green-100 
                @endif
            ">
                <td class="border px-4 py-2">Class ID: {{ $data['class'] }}</td>
                <td class="border px-4 py-2">{{ $data['percentage'] }}%</td>
                <td class="border px-4 py-2">
                    @foreach($data['records'] as $record)
                        <span>{{ $record->isPresent ? 'Present' : 'Absent' }} ({{ $record->class->id }})</span><br>
                    @endforeach
                </td>
                <td class="border px-4 py-2">
                    @foreach($data['records'] as $record)
                        <span>{{ $record->comments }}</span><br>
                    @endforeach
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
