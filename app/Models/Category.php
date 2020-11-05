<?php

namespace App\Models;
class Category extends Main
{
    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
