<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // requests one to many relationship
    public function requests()
    {
        return $this->hasMany(Request::class);
    }
}
