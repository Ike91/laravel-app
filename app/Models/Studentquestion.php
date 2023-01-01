<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Studentquestion extends Model
{
    use HasFactory;
    protected $table = 'studentquestions';
    protected $fillable = ['email', 'topic', 'question', 'exraInstructions'];
}
