<?php

namespace App\Http\Controllers;


use App\Models\UserStoryMark;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class StoryMarkController extends Controller
{
    public function store(Request $request)
    {
        $storyId = $request->get('storyId');
        $found = UserStoryMark::query()
            ->firstOrCreate([
                'user_id' => Auth::user()->id,
                'story_id' => $storyId
            ]);
        return response()->json($found);
    }
}
