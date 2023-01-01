<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Studentsv extends Model
{
    use HasFactory;
    protected $table = 'students_v';
    protected $fillable = ['name', 'email', 'phone', 'education', 'location', 'notes', 'file'];
}
