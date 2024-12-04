@extends('layouts.app')

@section('title', 'Your Classes')

@section('content')
<h1 class="text-2xl font-bold mb-4">Your Classes</h1>
<ul class="list-disc pl-5">
    @foreach($classes as $class)
        <li class="mb-2">
            <a href="{{ route('classes.show', $class->id) }}" class="text-blue-600 underline">
                Class ID: {{ $class->id }}
            </a>
        </li>
    @endforeach
</ul>
@endsection
