<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Studentanswer extends Model
{
    use HasFactory;
    protected $table = 'studentanswer';
    protected $fillable = ['name', 'email', 'question', 'answer'];
}
