<div>
    <ul class="w-2/3 mx-auto">
        @foreach ($books as $book)
            <li class="p-3 mb-4 transition-all border border-gray-500 rounded cursor-pointer hover:bg-gray-700">
                <a href="{{ route('books.show', $book->slug) }}">
                    <h3 class="text-3xl">{{ $book->title }}</h3>
                    <p class="pb-2 my-2 border-b border-gray-300">{{ Str::substr($book->title, 0, 200) }}</p>
                    @if (count($book->comments) === 0)
                        <span>rate: no comments given!</span>
                    @else
                        <span>rate: {{ round(collect($book->comments)->avg('rate'), 1) }}</span>
                    @endif
                </a>
            </li>
        @endforeach
    </ul>
    <div class="flex flex-row justify-center pb-10">
        {{ $books->links() }}
    </div>
</div>
