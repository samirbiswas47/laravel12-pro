<?php

namespace App\Livewire;

use App\Models\Author;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Book;
class BookCreate extends Component
{
    use WithFileUploads;
    #[Rule ('string|required|min:3|max:50')] 
    public $name;
    #[Rule ('string|required|min:3|max:50')] 
    public $genre;
    #[Rule ('integer|required|min:1|max:50')] 
    public $author_id;
    #[Rule ('image|nullable')] 
    public $photo;

    public $authorList;

    public function save()
    {
        $filepath ='';
        $this->validate();
        if($this->photo){
            $filepath = $this->photo->store('photos', 'public');
        }
        
        $book = Book::create([
            'name' => $this->name,
            'genre' => $this->genre,
            'author_id' => $this->author_id,
            'photo' => $filepath,
        ]);

        if($book->id){
            info('Book created successfully: ' . $book->id);
            session()->flash('success', 'Book created successfully!');
            return redirect()->route('bookcreate');
        }else{
            info('Book creation failed:');
            session()->flash('error', 'Something went wrong while creating the book.');
        }
    }
    public function mount(){
        $this->authorList= Author::all();
    }

    public function resetForm(){
        $this->name='';
        $this->genre='';
        $this->author_id='';
    }

    public function render()
    {
        
        return view('livewire.book-create');
        
    }
}
