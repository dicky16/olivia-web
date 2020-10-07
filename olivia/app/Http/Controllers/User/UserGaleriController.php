<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserGaleriController
{
    public function index()
    {
        $data = DB::table('foto')->orderBy('id', 'desc')->get();
        $tahun = null;
        for ($i=0; $i < count($data); $i++) { 
            $tahun[$i] = $data[$i]->tahun;
        }
        return view('user.galeri', compact('data', 'tahun'));
    }

    public function getFoto()
    {
        $data = DB::table('foto')->orderBy('id', 'desc')->paginate(4);
        $returnHTML = view('user.jobs.fotoView')->with('data', $data)->render();
        return response()->json(array('success' => true, 'html'=>$returnHTML));
    }

    public function video()
    {
        // $data = DB::table('foto')->orderBy('id', 'desc')->get();
        // $tahun = null;
        // for ($i=0; $i < count($data); $i++) { 
        //     $tahun[$i] = $data[$i]->tahun;
        // }
        return view('user.video');
    }
}
