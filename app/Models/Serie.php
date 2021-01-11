<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    /**
     * Get the author of the book
     */
    public function books() {
        return $this->belongsToMany(Book::class,'books_series_link','series','book','id','id','books');
    }
}
