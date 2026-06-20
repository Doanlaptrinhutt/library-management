<?php

namespace App\Models;
use App\Models\Borrow;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
	'title',
	'author',
	'isbn',
	'quantity',
	'description',
    ];
    public function borrows()
    {
	return $this->hasMany(Borrow::class);
    }
}
