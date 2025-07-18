<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Author;
class Book extends Model
{
    protected $fillable=['name','genre', 'author_id','photo'];
    //protected $guarded = [];
    /** @use HasFactory<\Database\Factories\BookFactory> */
    use HasFactory;

    public function author(){
        return $this->belongsTo(Author::class);
    }
}
