<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    //protected $fillable=['name','age'];
    protected $guarded = [];
    /** @use HasFactory<\Database\Factories\AuthorFactory> */
    use HasFactory;
}
