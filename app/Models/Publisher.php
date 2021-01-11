<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    /**
     * Get the books of the publisher
     */
    public function books() {
        return $this->belongsToMany(Book::class,'books_publishers_link','publisher','book','id','id','books');
    }
}
