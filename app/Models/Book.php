<?php

namespace App\Models;

use App\Models\Category;



class Book extends Main
{

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

}
