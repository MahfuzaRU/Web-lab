@extends('layout')
@section('title')
    Home
@endsection


@section('page-content')
<div class="row mt-2">
    <div class="col-lg-8">

        <form method="GET" action="{{ route('books.index') }}">
            <div class="row g-3">
                <div class="col">
                  <input type="text" class="form-control" placeholder="First name" aria-label="First name">
                </div>
                <div class="col">
                    <button type="submit" class="btn btn-primary">Search</button>
                </div>
              </div>


        </form>
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
            {{-- <td><a href="{{url('books/'.$book->id.'/show') }}">view</a></td> --}}

            <td>
                <a href="{{route('books.show',$book->id) }}">View</a>
            </td>
            <td>
                <a href="{{route('books.edit',$book->id) }}">Edit</a>
            </td>
            <td>
                <form method="POST" action="{{ route('books.destroy') }}" onsubmit="return confirm('Are you sure ')">
                    @csrf
                    @method('DELETE')
                    <input type="hidden" name="id" value="{{ $book->id }}">
                    <input type="submit" value="Delete" class="btn btn btn-link">

                </form>
            </td>


        </tr>

        @endforeach
    </table>

    {{ $books->links() }}
@endsection
