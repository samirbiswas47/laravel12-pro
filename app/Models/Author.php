<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Book;
class Author extends Model
{
    //protected $fillable=['name','age'];
    protected $guarded = [];
    /** @use HasFactory<\Database\Factories\AuthorFactory> */
    use HasFactory;
    public function book(){
        return $this->hasMany(Book::class);
    }
}
