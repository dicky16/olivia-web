<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AkunController
{
    public function index()
    {
        // $data = DB::table('users')->where('id', auth()->user()->id)->get();
        return view('user.auth.home');
    }
}
