<?php

namespace App\Http\Controllers;

use App\Models\UserStoryMark;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $storyMarks = UserStoryMark::query()->where('user_id', Auth::user()->id)->with(['story' => function ($query) {
            $query->select('id', 'title');
        }])->get();
        return view('profile', ['storyMarks' => $storyMarks]);
    }
}
