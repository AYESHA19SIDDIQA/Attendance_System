<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    // List all classes for teachers
    public function index()
    {
        $user = auth()->user();
        $classes = Classes::where('teacherid', $user->id)->get();

        return view('classes.index', compact('classes'));
    }

    // Show class details
    public function show($id)
    {
        $class = Classes::with('attendance.student')->findOrFail($id);

        return view('classes.show', compact('class'));
    }
}
