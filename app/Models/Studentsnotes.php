<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Studentsnotes extends Model
{
    use HasFactory;
    protected $table = 'studentsnotes';
    protected $fillable = ['notestittle', 'studentemail', 'description', 'filename'];
}
