<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    use HasFactory;

    protected $fillable = ['teacherid', 'starttime', 'endtime', 'credit_hours'];

    public function teacher()
    {
        return $this->belongsTo(User::class, 'teacherid');
    }

    public function attendance()
    {
        return $this->hasMany(Attendance::class, 'classid');
    }
}
