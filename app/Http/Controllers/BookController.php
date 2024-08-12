<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    //index method return all books
    public function index(){
        $books = Book::all();
        return response()->json($books, 200);
    }

    //show method return specific book
    public function show($id){
        $book =Book::find($id);
        return response()->json($book, 200);
    }

    //store
    public function store(){
        $book = new Book();
        $book ->title = request('title');
        $book -> author = request('author');
        $book-> year = request ('year');
        $book ->save();
        return response()-> json($book, 201);
    }

    //update
    public function update($id){
        $book = Book::find($id);
        $book ->title = request('title');
        $book -> author = request('author');
        $book-> year = request ('year');
        $book ->save();
        return response()-> json($book, 200);
    }

    //destory
    public function destory ($id){
        $book = Book::find($id);
        $book -> delete();

        return response()->json($book, 200);
    }
}
