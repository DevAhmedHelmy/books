<?php

namespace App\Models;



class Book extends Main
{

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

}
