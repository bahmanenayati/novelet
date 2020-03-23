<?php

namespace App\Http\Controllers;

use App\Models\Story;

class StoryController extends Controller
{
    public function index()
    {
        $story = Story::query()->inRandomOrder()->first();

        return view('story', ['story' => $story]);
    }

    public function show($id)
    {
        $story = Story::query()->findOrFail($id);

        return view('story', ['story' => $story]);
    }
}
