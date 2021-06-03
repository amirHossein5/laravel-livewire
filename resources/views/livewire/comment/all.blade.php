<div>
    <ul>
        @foreach ($comments as $comment)
            <li class="border border-gray-700 rounded p-3 mb-4">
                <div class="flex justify-between flex-row">
                    <p>{{ $comment->user->name }} said:</p>
                    <span>rate: {{ $comment->rate }}</span>
                </div>
                <section class="rounded bg-purple-900 p-3 mt-2">
                    {{ $comment->body }}
                </section>
            </li>
        @endforeach
    </ul>
</div>
