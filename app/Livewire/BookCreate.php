<?php

namespace App\Livewire;

use App\Models\Author;
use Livewire\Attributes\Rule;
use Livewire\Component;
use App\Models\Book;
class BookCreate extends Component
{
    #[Rule ('string|required|min:3|max:50')] 
    public $name;
    #[Rule ('string|required|min:3|max:50')] 
    public $genre;
    #[Rule ('integer|required|min:1|max:50')] 
    public $author_id;

    public $authorList;

    public function save(){
        $this->validate();
        Book::create([
            'name'=>$this->name,
            'genre'=>$this->genre,
            'author_id'=>$this->author_id
        ]);
        $this->redirect('book-list');
    }
    public function mount(){
        $this->authorList= Author::all();
    }

    public function render()
    {
        
        return view('livewire.book-create');
    }
}
