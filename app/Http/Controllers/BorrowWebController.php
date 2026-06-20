<?php

namespace App\Http\Controllers;

use App\Models\Borrow;
use App\Models\Book;
use Illuminate\Http\Request;

class BorrowWebController extends Controller
{
    public function index()
    {
        if (!session('is_logged_in')) {
 	   return redirect('/login');
       }
        $borrows = Borrow::with('book')->get();

        return view('borrows.index', compact('borrows'));
    }

    public function create()
    {
        if (!session('is_logged_in')) {
 	   return redirect('/login');
       }
        $books = Book::all();

        return view('borrows.create', compact('books'));
    }

    public function store(Request $request)
    {
        if (!session('is_logged_in')) {
 	   return redirect('/login');
       }
        Borrow::create([
            'student_name' => $request->student_name,
            'student_code' => $request->student_code,
            'book_id' => $request->book_id,
            'borrow_date' => $request->borrow_date,
            'return_date' => $request->return_date,
            'status' => 'borrowing',
        ]);

        return redirect('/borrows');
    }

    public function returnBook($id)
    {
        if (!session('is_logged_in')) {
 	   return redirect('/login');
       }
        $borrow = Borrow::findOrFail($id);

        $borrow->update([
            'status' => 'returned',
            'return_date' => now(),
        ]);

        return redirect('/borrows');
    }
}
