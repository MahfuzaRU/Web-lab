@extends('layout')
@section('title')
    Home
@endsection


@section('page-content')
<div class="row mt-2">
    <div class="col-lg-8">
        Search Functionality
    </div>
    <div class="col-lg-2">
        <p class="text-end">
            <a href="{{ route('books.create') }}" class="btn btn-primary">new book</a>

        </p>
    </div>
</div>


    <h1>Book List</h1>
    <table class="table table-striped-columns">
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
            <td><a href="{{url('books/'.$book->id.'/show') }}">view</a></td>
            {{-- <td><a href="{{route('books.show',$book->id) }}">view</a></td> --}}

        </tr>

        @endforeach
    </table>

    {{ $books->links() }}
@endsection
