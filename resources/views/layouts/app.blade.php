<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>books</title>
    {{-- files --}}
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @livewireStyles()
    @livewireScripts()
    <script src="{{ mix('js/app.js') }}"></script>
    {{--  --}}
</head>

<body>
    <a href="{{route('books.create')}}" class="px-2 py-3 bg-green-600 text-gray-200 block ">create a book</a>
    <hr>
    @yield('content')


    @yield('script')
</body>

</html>
