<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HighschoolA extends Model
{
    use HasFactory;
    protected $table = 'hightschool_a';
    protected $fillable = ['first_name', 'last_name', 'form_of_contact', 'contact', 'grade', 'subject', 'appt', 'appd', 'venue', 'Venue_address', 'shortd', 'created_at', 'updated_at'];
}
