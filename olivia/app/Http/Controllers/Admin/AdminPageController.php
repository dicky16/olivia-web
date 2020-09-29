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
    	return view('admin.home.beritaAdmin');
    }

    public function artikel()
    {
    	return view('admin.artikel');
    }
    
    public function sejarah()
    {
    	return view('admin.profil.sejarahAdmin');
    }

     public function foto()
    {
        return view('admin.galeri.fotoAdmin');
    }
     public function video()
    {
        return view('admin.galeri.videoAdmin');
    }
     public function pertanyaan()
    {
        return view('admin.footer.pertanyaanAdmin');
    }
}
