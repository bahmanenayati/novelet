<?php

namespace App\Http\Controllers;

use App\Events\StoryView;
use App\Models\Story;
use Illuminate\Support\Facades\Auth;

class StoryController extends Controller
{
    public function index()
    {
        $story = Story::query()->select('id')->inRandomOrder()->first();

        return redirect("/story/{$story->id}");
    }

    public function show($id)
    {
        $story = Story::query()->findOrFail($id);
        $story->mark = null;
        if (Auth::check()) {
            $story->with(['mark' => function ($query) {
                $query->where('user_id', Auth::user()->id);
            }])->first();
        }
        event(new StoryView($story));
        $story->views = \App\Models\StoryView::query()->where('story_id', $story->id)->get()->count();
        return view('story', ['story' => $story]);
    }
}
