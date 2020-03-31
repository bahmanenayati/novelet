<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    protected $fillable = [
        'title',
        'article',
        'url',
        'lang',
        'attribs'
    ];

    public function mark()
    {
        return $this->hasOne(UserStoryMark::class);
    }
}
