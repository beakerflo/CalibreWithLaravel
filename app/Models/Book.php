<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    /**
     * Get the author of the book
     */
    public function author() {
        return $this->belongsToMany(Author::class,'books_authors_link','book','author','id','id','authors');
    }

    /**
     * Get the serie of the book
     */
    public function serie() {
        return $this->belongsToMany(Serie::class,'books_series_link','book','series','id','id','series');
    }

    /**
     * Get the language of the book
     */
    public function language() {
        return $this->belongsToMany(Language::class, 'books_languages_link', 'book', 'lang_code','id','id','languages');
    }

    /**
     * Get the data of the book
     */
    public function data() {
        return $this->belongsTo(Data::class,'id','book');
    }
}
