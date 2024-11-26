<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Book List</h1>
    <table border="2">
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Author</th>
            <th>Price</th>
            <th>Action</th>
        </tr>
        @foreach ($books as $book)
        <tr>
            <td>{{ $book->id }}</td>
            <td>{{ $book->title }}</td>
            <td>{{ $book->author }}</td>
            <td>{{ $book->price }}</td>
            <td><a href="">view</a></td>

        </tr>

        @endforeach
    </table>
</body>
</html>
