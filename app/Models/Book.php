<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable=['name','genre', 'author_id'];
    //protected $guarded = [];
    /** @use HasFactory<\Database\Factories\BookFactory> */
    use HasFactory;
}
