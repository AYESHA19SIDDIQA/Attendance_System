<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\Classes;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    // View attendance for students
    public function viewAttendance()
{
    $user = auth()->user();

    // Fetch attendance records for the logged-in student
    $attendanceRecords = Attendance::with('class')
        ->where('studentid', $user->id)
        ->get();

    // Calculate attendance percentage
    $groupedAttendance = $attendanceRecords->groupBy('classid');
    $attendanceData = [];

    foreach ($groupedAttendance as $classId => $records) {
        $totalSessions = $records->count();
        $presentSessions = $records->where('isPresent', true)->count();

        $percentage = $totalSessions > 0 ? ($presentSessions / $totalSessions) * 100 : 0;

        $attendanceData[] = [
            'class' => $classId,
            'percentage' => round($percentage, 2),
            'records' => $records,
        ];
    }

    return view('attendance.index', compact('attendanceData'));
}


    // Mark attendance for teachers
    public function markAttendance(Request $request, $classId)
    {
        $validated = $request->validate([
            'attendance' => 'required|array',
            'attendance.*' => 'boolean',
            'comments' => 'nullable|string|max:200',
        ]);

        foreach ($validated['attendance'] as $studentId => $isPresent) {
            Attendance::updateOrCreate(
                ['classid' => $classId, 'studentid' => $studentId],
                ['isPresent' => $isPresent, 'comments' => $validated['comments'] ?? '']
            );
        }

        return redirect()->back()->with('success', 'Attendance marked successfully!');
    }
}
