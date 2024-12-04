<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    protected $fillable = ['classid', 'studentid', 'isPresent', 'comments'];

    public function class()
    {
        return $this->belongsTo(Classes::class, 'classid');
    }

    public function student()
    {
        return $this->belongsTo(User::class, 'studentid');
    }
}
