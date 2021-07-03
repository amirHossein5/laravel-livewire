<div>
    <ul class="w-2/3 mx-auto">
        @foreach ($books as $book)
            <li class="border border-gray-500 hover:bg-gray-700 transition-all cursor-pointer rounded mb-4 p-3">
                <a href="{{ route('books.show', $book->slug) }}">
                    <h3 class="text-3xl">{{ $book->title }}</h3>
                    <p class="border-b border-gray-300 my-2 pb-2">{{ Str::substr($book->title, 0, 200) }}</p>
                    @if (count($book->comments) === 0)
                        <span>rate: no comments given!</span>
                    @else
                        <span>rate: {{ round(collect($book->comments)->avg('rate'), 1) }}</span>
                    @endif
                </a>
            </li>
        @endforeach
    </ul>
    <div class="flex justify-center flex-row pb-10">
        {{ $books->links() }} </div>
</div>
