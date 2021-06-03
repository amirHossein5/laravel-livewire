<?php

namespace App\Http\Livewire\Comment;

use App\Models\Comment;
use Livewire\Component;

class Rate extends Component
{
    public $rate, $book_id;

    public function mount($book_id)
    {
        $this->book_id = $book_id;
        $this->rate = round(collect(Comment::where('book_id', $book_id)->get('rate'))->average('rate'), 1);
    }

    protected $listeners = ['rate'];

    public function rate()
    {
        $this->rate = round(collect(Comment::where('book_id', $this->book_id)->get('rate'))->average('rate'), 1);
    }


    public function render()
    {
        return view('livewire.comment.rate');
    }
}
