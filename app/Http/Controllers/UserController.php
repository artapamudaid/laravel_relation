<?php

namespace App\Http\Controllers;

use App\Models\Forum;
use App\Models\Lesson;
use App\Models\Passport;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showProfile($id)
    {
        // $user = User::with([
        //     'forums' => function ($query) {
        //         $query->where('title', 'like', '%halo%');
        //     }
        // ])->where('id', $id)->first();

        $forums = User::withCount('forums')->get();

        $user = User::with('forums.tags', 'lessons.tags')->where('id', $id)->first();

        return view('user.profile', compact('user', 'forums'));
    }

    public function showPassport($id)
    {
        $passport = Passport::findOrFail($id);

        return view('user.passport', compact('passport'));
    }

    public function showForum($id)
    {
        $forum = Forum::findOrFail($id);

        return view('user.forum', compact('forum'));
    }

    public function showLesson($id)
    {
        $lesson = Lesson::findOrFail($id);

        return view('user.lesson', compact('lesson'));
    }
}
