<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;

class UserPageController
{
    public function index()
    {
        return view('user.index');
    }

    public function profil()
    {
        return view('user.profil');
    }
}
