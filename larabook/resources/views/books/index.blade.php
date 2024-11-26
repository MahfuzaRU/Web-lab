@extends('layout')
@section('title')

Home
@endsection

    <h1>Book List</h1>
    <table class="table table-striped table-hover">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Author</th>
            <th>Price</th>
            <th>Action</th>
        </tr>
        @foreach ($books as $book)
        <tr>
            <td>{{ $book->id }}</td>
            <td>{{ $book->tittle }}</td>
            <td>{{ $book->author }}</td>
            <td>{{ $book->price }}</td>
            <td><a href="{{url('books/'.$book->id.'/show') }}">view</a></td>
        </tr>

        @endforeach
    </table>
    {{ $book->link() }}
@endsection

