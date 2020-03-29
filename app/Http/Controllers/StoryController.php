<?php

namespace App\Http\Controllers;

use App\Models\Story;

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

        return view('story', ['story' => $story]);
    }
}
