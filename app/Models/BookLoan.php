<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BookLoan extends Model
{
    protected $fillable = ['return_date', 'book_id', 'user_id'];

    public function book()
    {
        return $this->belongsTo(Book::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
