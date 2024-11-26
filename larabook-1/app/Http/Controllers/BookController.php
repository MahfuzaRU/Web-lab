<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        $books = Book::all();
        return view('books.index')->with('books', $books);

    }
    public function show($id){
        $book = Book ::find($id);
        return view('books.show')->with('book',$book);
    }
}
