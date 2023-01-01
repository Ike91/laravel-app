<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamFeedback extends Model
{
    use HasFactory;
    protected $table = "teamfeedback";
    protected $fillable = ["name", "temail", "phone" ,"status", "email", "notes", "created_at", "updated_at"];
}
