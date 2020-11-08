<?php

namespace App\Models;

use App\Models\Category;



class Book extends Main
{

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
