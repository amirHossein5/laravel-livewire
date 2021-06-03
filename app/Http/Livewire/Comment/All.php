<?php

namespace App\Http\Livewire\Comment;

use App\Models\Book;
use App\Models\Comment;
use Livewire\Component;

class All extends Component
{
    public $comments, $book_id;

    public function mount($book_id)
    {
        $this->comments = Comment::where('book_id', $book_id)->with('user')->get();
    }

    protected $listeners = ['commentsAll'];

    public function commentsAll()
    {
        $this->comments = Comment::where('book_id', $this->book_id)->with('user')->get();
    }

    public function render()
    {
        return view('livewire.comment.all');
    }
}
