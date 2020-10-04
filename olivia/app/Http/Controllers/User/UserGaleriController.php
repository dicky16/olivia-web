<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserGaleriController
{
    public function getFoto()
    {
        $data = DB::table('foto')->orderBy('id', 'desc')->get();
        $returnHTML = view('user.jobs.fotoView')->with('data', $data)->render();
        return response()->json(array('success' => true, 'html'=>$returnHTML));
    }
}
