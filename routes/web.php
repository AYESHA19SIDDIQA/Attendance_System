<?php
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Authentication Routes
Auth::routes();

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');
});


// Teacher Routes
Route::middleware(['auth', 'role:teacher'])->group(function () {
    Route::get('/classes', [ClassController::class, 'index'])->name('classes.index');
    Route::get('/classes/{id}', [ClassController::class, 'show'])->name('classes.show');
    Route::post('/classes/{id}/attendance', [AttendanceController::class, 'markAttendance'])->name('classes.attendance');
});

// Student Routes
Route::middleware(['auth', 'role:student'])->group(function () {
    Route::get('/attendance', [AttendanceController::class, 'viewAttendance'])->name('attendance.index');
});

// Admin Routes
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::post('/users', [UserController::class, 'store'])->name('users.store');
});
