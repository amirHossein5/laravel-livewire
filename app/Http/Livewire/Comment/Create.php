<?php

namespace App\Http\Livewire\Comment;

use App\Events\newComment;
use App\Models\Comment;
use Livewire\Component;

class Create extends Component
{
    public $body, $rate, $book_id;

    protected $rules = [
        'rate' => 'required|integer|min:1|max:5',
        'body' => 'required'
    ];

    public function updated($prop)
    {
        $this->validateOnly($prop);
    }

    public function submit()
    {
        $request = $this->validate();
        $request = $request + ['user_id' => 1, 'book_id' => $this->book_id];

        Comment::create($request);
        $this->body = '';
        $this->rate = '';
        $this->emitTo('comment.all','commentsAll');
        $this->emitTo('comment.rate', 'rate');
    }

    public function render()
    {
        return view('livewire.comment.create');
    }
}
