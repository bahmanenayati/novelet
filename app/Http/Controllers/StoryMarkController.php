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
            ->where('user_id', Auth::user()->id)
            ->where('story_id', $storyId)
            ->first();
        if ($found) {
            return $found->delete();
        }
        $result = UserStoryMark::query()->create([
            'user_id' => Auth::user()->id,
            'story_id' => $storyId
        ]);
        return response()->json($result);
    }
}
