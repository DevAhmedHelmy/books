<?php

namespace App\Models;



class Category extends Main
{
    public function books(): HasMany
    {
        return $this->hasMany(Book::class);
    }
}
