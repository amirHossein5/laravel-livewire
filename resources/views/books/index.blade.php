@extends('layouts.app')

@section('content')
    <section class="flex flex-col justify-center pt-3 min-h-screen text-gray-300 bg-gray-800">
        @livewire('book.index')
    </section>
@endsection
