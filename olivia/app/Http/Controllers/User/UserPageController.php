<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserPageController
{
    public function index()
    {
        return view('user.index');
    }

    public function profil()
    {
        $data = DB::table('visimisi')->get();
        return view('user.profil',compact('data'));
    }

    public function berita()
    {
        $data = DB::table('berita')->orderBy('id', 'desc')
        ->join('users', 'users.id', '=', 'berita.id_penulis')
        ->select('berita.*', 'users.name')
        ->get();
        return view('user.info.berita', compact('data'));
    }

    public function pengumuman()
    {
        return view('user.info.pengumuman');
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
