<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ads extends Model
{
    use HasFactory;
    protected $table = "ads";
    protected $fillable = ["category", "sallername", "sallerphone", "salleremail", "productName", "productDescription", "price", "filename", "created_at", "updated_at"];
}
