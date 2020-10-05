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

    public function berita()
    {
        return view('user.berita');
    }

    public function galeri()
    {
        return view('user.galeri');
    }

    public function faq()
    {
        return view('user.faq');
    }
}
