<?php

namespace App\Http\Controllers;

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

        return view('story', ['story' => $story]);
    }
}
