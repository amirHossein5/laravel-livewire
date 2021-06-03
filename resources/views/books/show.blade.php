@extends('layouts.app')

@section('content')
    <section class="pt-3 min-h-screen text-gray-300 bg-gray-800">
        <div class="w-2/3 mx-auto pb-3 mb-3">
            <div class="flex flex-row justify-between">
                <h3 class="text-2xl mb-3">{{ $book->title }}</h3>
                <span>rate: @livewire('comment.rate',['book_id'=>$book->id])</span>
            </div>
            <hr>
            <p class="mt-3">{{ $book->description }}</p>
        </div>
        <hr>
        <section class="w-2/3 mx-auto mt-3">
            <h3 class="text-2xl mb-4">comments:</h3>
            @livewire('comment.all',['book_id'=>$book->id])
            <h3 class="border-t border-gray-700 text-2xl mb-4 mt-5 pt-4">write comment:</h3>
            @livewire('comment.create',['book_id'=>$book->id])
        </section>
    </section>
@endsection
