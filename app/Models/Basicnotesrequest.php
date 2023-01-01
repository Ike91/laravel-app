<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Basicnotesrequest extends Model
{
    use HasFactory;
    protected $table = 'basicnotesrequest';
    protected $fillable = ['name', 'email', 'grade', 'subject', 'notestittle', 'descriptions'];
}
