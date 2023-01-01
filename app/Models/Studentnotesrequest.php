<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Studentnotesrequest extends Model
{
    use HasFactory;
    protected $table = 'studentnotesrequest';
    protected $fillable = ['name', 'email', 'education', 'module', 'notestittle', 'descriptions'];
}
