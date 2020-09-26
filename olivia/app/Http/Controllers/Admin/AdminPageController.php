<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class AdminPageController
{
    public function dashboard()
    {
    	return view('admin.dashboard');
    }

    public function berita()
    {
    	return view('admin.berita');
    }

    public function artikel()
    {
    	return view('admin.artikel');
    }
    public function sejarah()
    {
    	return view('admin.sejarah');
    }
}
