<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productrequest extends Model
{
    use HasFactory;
    protected $table = 'productrequest';
    protected $fillable = ["name", "number", "email", "description", "pname", "price"];
}
