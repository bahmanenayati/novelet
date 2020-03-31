<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StoryView extends Model
{
    protected $fillable = [
        'ip',
        'user_id',
        'story_id'
    ];

    public function story()
    {
        return $this->hasOne(Story::class, 'id', 'story_id');
    }
}
