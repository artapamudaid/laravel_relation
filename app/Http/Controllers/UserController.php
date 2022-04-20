<?php

namespace App\Http\Controllers;

use App\Models\City;
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

        //contoh withCount
        $forums = User::withCount('forums')->get();

        //contoh hasManyThrough
        // dd(City::find(2)->forums);

        $user = User::with('forums.tags', 'lessons.tags')->where('id', $id)->first();

        return view('user.profile', compact('user', 'forums'));
    }

    public function showPassport($id)
    {
        $passport = Passport::findOrFail($id);

        return view('user.passport', compact('passport'));
    }

    public function editPassport()
    {
        $passport = Passport::find(1);
        $passport->no_pass = '940qia00';
        $passport->save();
    }

    public function showForum($id)
    {
        $forum = Forum::findOrFail($id);

        return view('user.forum', compact('forum'));
    }

    public function createForum()
    {

        //Insert relation method

        //method Save
        // $forum = new Forum([
        //     'title' => 'forum baru',
        //     'body' => 'ini isinya'
        // ]);

        // $user = User::find(2);

        // $user->forums()->save($forum);

        //-------------------------------------------

        //method Create
        $user = User::find(2);

        $user->forums()->create([
            'title' => 'forum terbaru',
            'body' => 'ini isinya baru'
        ]);
    }

    public function updateForum()
    {
        $forum = Forum::find(3);
        $user = User::find(1);

        $forum->user()->associate($user);
        $forum->save();
    }

    public function deleteForum()
    {
        $forum = Forum::find(3);

        $forum->user()->dissociate();
        $forum->save();
    }

    public function showLesson($id)
    {
        $lesson = Lesson::findOrFail($id);

        return view('user.lesson', compact('lesson'));
    }

    public function createLesson()
    {
        $user = User::find(1);
        $user->lessons()->attach(3);
    }

    public function deleteLesson()
    {
        $user = User::find(1);
        $user->lessons()->detach(3);
    }

    public function updateLesson()
    {
        $user = User::find(1);
        $attributes = [
            'lesson_id' => 4
        ];
        $user->lessons()->updateExistingPivot(1, $attributes);
    }

    public function syncLesson()
    {
        $user = User::find(1);
        $list = [2, 3];
        $user->lessons()->sync($list);
    }
}
