<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Studentsmodel extends Model
{
    use HasFactory;
    protected $table = 'studentbook';
    protected $fillable = ['name', 'phone', 'email', 'year', 'module', 'date', 'time', 'venue', 'address'];
}
