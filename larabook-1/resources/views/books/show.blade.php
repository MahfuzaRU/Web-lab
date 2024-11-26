<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>
        <a href="{{ url('books') }}">Back</a>
        {{-- <a href="{{ route('books.index') }}">Back</a> --}}
    </p>
    <h1>Book Details</h1>
    <table width="50%" border="2">
        <tr>
            <th>Id</th>
            <td>{{ $book->id }}</td>
        </tr>
        <tr>
            <th>Title</th>
            <td>{{ $book->title }}</td>
        </tr>
        <tr>
            <th>Author</th>
            <td>{{ $book->author }}</td>
        </tr>
        <tr>
            <th>ISBN</th>
            <td>{{ $book->isbn }}</td>
        </tr>
        <tr>
            <th>Price</th>
            <td>{{ $book->price }}</td>
        </tr>
        <tr>
            <th>Stock</th>
            <td>{{ $book->stock }}</td>
        </tr>
        <tr>
            <th>Created at</th>
            <td>{{ $book->created_at}}</td>
        </tr>
        <tr>
            <th>Updated at</th>
            <td>{{ $book->updated_at}}</td>
        </tr>

    </table>
</body>
</html>
