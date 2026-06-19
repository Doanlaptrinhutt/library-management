<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookWebController extends Controller
{
    public function index()
    {
	$books = Book::all();
	return view('books.index', compact('books'));
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        Book::create([
           'title' => $request->title,
           'author' => $request->author,
           'isbn' => $request->isbn,
           'quantity' => $request->quantity,
           'description' => $request->description,
        ]);

        return redirect('/books');
    }
}
