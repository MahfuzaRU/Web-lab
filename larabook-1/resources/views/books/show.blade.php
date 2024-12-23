@extends('layout')
@section('title')
    Show Book
@endsection


@section('page-content')


    <p>
        <a href="{{ url('books') }}">Back</a>
        {{-- <a href="{{ route('books.index') }}">Back</a> --}}
    </p>
    <h1>Book Details</h1>
    <table class="table table-striped-columns">
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
        <tr>
            <th></th>
            <td>
                <a class="btn btn-danger" href="{{ route('books.edit', $book->id) }}">Edit</a>

            </td>
        </tr>

    </table>

@endsection
