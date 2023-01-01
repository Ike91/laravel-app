<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $table = "question";
    protected $fillable = ["topic", "question", "exraInstructions", "created_at", "updated_at"];
    
}
