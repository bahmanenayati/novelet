<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserStoryMark extends Model
{
    protected $table = 'user_story_mark';

    protected $fillable = [
        'user_id',
        'story_id'
    ];

    public function story()
    {
        return $this->hasOne(Story::class, 'id', 'story_id');
    }
}
