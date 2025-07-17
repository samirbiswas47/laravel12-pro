<?php

namespace App\Livewire;
use Livewire\WithPagination;
use Livewire\Component;
use App\Models\Book;

class BookList extends Component
{
    use WithPagination;
    public $term;

    public function updatedTerm()
    {
        $this->resetPage();
    }
    public function delete(Book $book){
        $book->delete();
    }

    public function render()
    {
        if($this->term){
           $books= Book::with('author')->where('name', 'LIKE', "%{$this->term}%")->paginate(10);
        }else{
            $books= Book::with('author')->paginate(10);
        }


        return view('livewire.book-list', [
            'books' => $books, // pass to view only
        ]);
    }
}
