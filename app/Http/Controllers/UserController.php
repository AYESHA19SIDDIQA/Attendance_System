<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    // Dashboard
    public function dashboard()
    {
        $user = auth()->user();

        if ($user->role === 'teacher') {
            return redirect()->route('classes.index');
        } elseif ($user->role === 'student') {
            return redirect()->route('attendance.index');
        }

        return view('dashboard');
    }

    // Admin: List all users
    public function index()
    {
        $users = User::all();

        return view('users.index', compact('users'));
    }

    // Admin: Store a new user
    public function store(Request $request)
    {
        $validated = $request->validate([
            'fullname' => 'required|string|max:200',
            'email' => 'required|email|unique:users,email',
            'class' => 'nullable|string|max:10',
            'role' => 'required|in:teacher,student,admin',
        ]);

        User::create($validated);

        return redirect()->back()->with('success', 'User created successfully!');
    }
}
