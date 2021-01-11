<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    /**
     * Get the books of the authors
     */
    public function books() {
        return $this->belongsToMany(Book::class,'books_authors_link','author','book','id','id','books');
    }
}
