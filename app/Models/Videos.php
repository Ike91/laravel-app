<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Videos extends Model
{
    use HasFactory;
    protected $table = "videos";
    protected $fillable = ["category", "videoTittle", "youtubeURL", "created_at", "updated_at"];
}
