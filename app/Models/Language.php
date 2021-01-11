<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    /**
     * Get the books with the language
     */
    public function books() {
        return $this->belongsToMany(Book::class, 'books_languages_link', 'lang_code', 'book','id','id','books');
    }
}
