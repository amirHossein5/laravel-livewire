<?php

namespace App\Http\Livewire\Book;

use App\Models\Book;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public function render()
    {
        $books = Book::with(['user', 'comments'])->paginate('10');
        return view('livewire.book.index', ['books' => $books]);
    }
}
