<?php

namespace App\Http\Controllers;

use App\Models\StoryView;
use App\Models\UserStoryMark;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $storyMarks = UserStoryMark::query()->where('user_id', Auth::user()->id)->with(['story' => function ($query) {
            $query->select('id', 'title');
        }])->get();
        $lastSees = StoryView::query()
            ->where('user_id', Auth::user()->id)
            ->with(['story' => function ($query) {
                $query->select('id', 'title');
            }])
            ->orderBy('created_at', 'DESC')
            ->limit(15)
            ->get();
        return view('profile', [
            'storyMarks' => $storyMarks,
            'lastSees' => $lastSees,
        ]);
    }
}
