@extends('layouts.master')

@section('content')
    <section class="min-h-screen pt-3 text-gray-300 bg-gray-800">
        <div class="w-2/3 pb-3 mx-auto mb-3">
            <div class="flex flex-row justify-between">
                <h3 class="mb-3 text-2xl">{{ $book->title }}</h3>
                <span>rate: @livewire('comment.rate',['book_id'=>$book->id])</span>
            </div>
            <hr>
            <p class="mt-3">{{ $book->description }}</p>
        </div>
        <hr>
        <section class="w-2/3 mx-auto mt-3">
            <h3 class="mb-4 text-2xl">comments:</h3>
            @livewire('comment.all',['book_id'=>$book->id])
            <h3 class="pt-4 mt-5 mb-4 text-2xl border-t border-gray-700">write comment:</h3>
            @livewire('comment.create',['book_id'=>$book->id])
        </section>
    </section>
@endsection
