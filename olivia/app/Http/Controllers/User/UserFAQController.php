<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserFAQController
{
    public function getFAQ()
    {
        $faq = DB::table('faq')->orderBy('id', 'desc')->get();
        $returnHTML = view('user.jobs.faqView')->with('faq', $faq)->render();
        return response()->json(array('success' => true, 'html'=>$returnHTML));
    }
}
