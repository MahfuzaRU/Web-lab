@extends('layout')
@section('title')
    New Book
@endsection


@section('page-content')
    <legend>Book List</legend>

    <form method="POST" action="{{ route('books.store') }}">

        @csrf

        <div class="mb-3">
            <label  class="form-label">Title</label>
            <input type="text" class="form-control" name="title" placeholder="Book title">
        </div>
        <div class="mb-3">
            <label  class="form-label">Author</label>
            <input type="text" class="form-control" name="author" placeholder="Book author">
        </div>
        <div class="mb-3">
            <label  class="form-label">ISBN</label>
            <input type="text" class="form-control" name="isbn" placeholder="Book isbn">
        </div>
        <div class="mb-3">
            <label  class="form-label">Stock</label>
            <input type="text" class="form-control" name="stock" placeholder="Stock">
        </div>
        <div class="mb-3">
            <label  class="form-label">Price</label>
            <input type="text" class="form-control" name="price" placeholder="Price">
        </div>

        <div class="mb-3">
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{ route('books.index') }}" class="btn btn-danger">Back</a>

        </div>


    </form>
@endsection
