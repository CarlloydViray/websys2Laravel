<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employees extends Model
{
    protected $fillable = [
        'name', 'position', 'email', 'password'
    ];
    use HasFactory;
}
