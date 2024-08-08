<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class member extends Model
{   
    // protected $fillable = ['name','email','age','feedback','rate'];
    protected $fillable = ['p_name','quantity'];
    use HasFactory;
}
