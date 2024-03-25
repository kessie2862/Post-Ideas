<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Idea extends Model
{
    use HasFactory;

    // The fillable property is an array that contains the names of the attributes that are mass assignable.
    protected $fillable = [
        'content',
        'like',
    ];
}
