<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    protected $fillable = ['fullname', 'email', 'class', 'role'];

    public function classes()
    {
        return $this->hasMany(Classes::class, 'teacherid');
    }

    public function attendance()
    {
        return $this->hasMany(Attendance::class, 'studentid');
    }
}
