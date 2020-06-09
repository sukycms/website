<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    protected $dates = [
        'published_at',
    ];

    public function getSlug(): string
    {
        return Str::slug($this->title);
    }
}
