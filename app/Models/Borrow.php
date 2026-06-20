<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Borrow extends Model
{
    protected $fillable = [
        'student_name',
        'student_code',
        'book_id',
        'borrow_date',
        'return_date',
        'status',
    ];

    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}
