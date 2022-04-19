<?php

namespace App\Http\Controllers;

use App\Models\Passport;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showProfile($id)
    {
        $user = User::findOrFail($id);

        return view('user.profile', compact('user'));
    }

    public function showPassport($id)
    {
        $passport = Passport::findOrFail($id);

        return view('user.passport', compact('passport'));
    }
}
