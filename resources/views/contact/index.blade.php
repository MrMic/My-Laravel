<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<body>
    {{-- comment --}}
    <h2>{{ $title }}</h2>
    {{ $description }}

    <ul>
        @foreach ($books as $book)
            <li>{{ $book }}</li>
        @endforeach

        {{-- @for ($i = 0; $i < count($books); $i++) --}}
        {{--     <li>{{ $books[$i] }}</li> --}}
        {{-- @endfor --}}
    </ul>
</body>

</html>
