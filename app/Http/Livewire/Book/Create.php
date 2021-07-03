<?php

namespace App\Http\Livewire\Book;

use App\Models\Book;
use Livewire\Component;

class Create extends Component
{
    public $title, $slug, $description;

    protected $rules = [
        'title' => 'required|min:4|string',
        'slug' => 'required|alpha_dash|min:4|string',
        'description' => 'required|string'
    ];

    public function updated($property)
    {
        $this->validateOnly($property);
    }

    public function submit()
    {
        $request = $this->validate();
        $request = $request + ['user_id' => '1'];
        Book::create($request);
        return redirect()->route('books.index');
    }

    public function render()
    {
        return view('livewire.book.create');
    }
}
