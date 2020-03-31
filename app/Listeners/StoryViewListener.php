<?php

namespace App\Listeners;

use App\Events\StoryView;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Auth;

class StoryViewListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param StoryView $event
     * @return void
     */
    public function handle(StoryView $event)
    {
        $reqeust = request();
        \App\Models\StoryView::query()->updateOrCreate([
            'story_id' => $event->story->id,
            'ip' => $reqeust->getClientIp(),
            'user_id' => Auth::user()->id ?? null
        ], [
            'user_id' => Auth::user()->id ?? null,
        ]);
    }
}
