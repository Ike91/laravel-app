<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Studentbook extends Model
{
    use HasFactory;
    protected $table = 'basicbook';
    protected $fillable = ['name', 'email', 'grade', 'subject', 'adate', 'atime', 'venue', 'address'];
}
