<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;
    protected $table = "students";
    protected $fillable = ["name", "email","phone", "education", "location", "notes", "file", "terms", "created_at", "updated_at"];
}
