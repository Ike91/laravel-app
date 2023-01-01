<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requesttut extends Model
{
    use HasFactory;
    protected $table = 'requesttut';
    protected $fillable = ['name', 'email', 'grade', 'subject', 'description'];
}
