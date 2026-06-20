<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Borrow;
use Illuminate\Http\Request;

class BookWebController extends Controller
{
    public function dashboard()
    {
       if (!session('is_logged_in')) {
 	   return redirect('/login');
       }	
       $totalBooks = Book::count();

       $totalBorrows = Borrow::count();

       $studentsBorrowing = Borrow::where('status', 'borrowing')->count();

       $studentsReturned = Borrow::where('status', 'returned')->count();

       return view('dashboard', compact(
        'totalBooks',
        'totalBorrows',
        'studentsBorrowing',
        'studentsReturned'
       ));
    }    

    public function index(Request $request)
    {
    if (!session('is_logged_in')) {
 	   return redirect('/login');
       }
    $query = Book::query();

    if ($request->search) {
        $query->where('title', 'like', '%' . $request->search . '%')
              ->orWhere('author', 'like', '%' . $request->search . '%')
              ->orWhere('isbn', 'like', '%' . $request->search . '%');
    }

    $books = $query->get();

    return view('books.index', compact('books'));
    }

    public function create()
    {
if (!session('is_logged_in')) {
 	   return redirect('/login');
       }
        return view('books.create');
    }

    public function store(Request $request)
    {
if (!session('is_logged_in')) {
 	   return redirect('/login');
       }
    $request->validate([
        'title' => 'required|max:255',
        'author' => 'required|max:255',
        'isbn' => 'required|max:50',
        'quantity' => 'required|integer|min:0',
        'description' => 'nullable',
    ]);

    Book::create([
        'title' => $request->title,
        'author' => $request->author,
        'isbn' => $request->isbn,
        'quantity' => $request->quantity,
        'description' => $request->description,
    ]);

    return redirect('/books');
    }



    public function destroy($id)
    {
if (!session('is_logged_in')) {
 	   return redirect('/login');
       }
        Book::find($id)->delete();

        return redirect('/books');
    }

    public function edit($id)
    {
if (!session('is_logged_in')) {
 	   return redirect('/login');
       }
    	$book = Book::findOrFail($id);

    	return view('books.edit', compact('book'));
    }

    public function update(Request $request, $id)
    {
if (!session('is_logged_in')) {
 	   return redirect('/login');
       }
    $request->validate([
        'title' => 'required|max:255',
        'author' => 'required|max:255',
        'isbn' => 'required|max:50',
        'quantity' => 'required|integer|min:0',
        'description' => 'nullable',
    ]);

    $book = Book::findOrFail($id);

    $book->update([
        'title' => $request->title,
        'author' => $request->author,
        'isbn' => $request->isbn,
        'quantity' => $request->quantity,
        'description' => $request->description,
    ]);

    return redirect('/books');
    }
}
