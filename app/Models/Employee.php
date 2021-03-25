<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employee extends Model {
    
    public $fillable = ['name', 'email', 'phone_number', 'dob'];

}