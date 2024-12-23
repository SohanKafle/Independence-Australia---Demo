<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Child_Category extends Model
{
    protected $guarded = [];
    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class);
    }
}
