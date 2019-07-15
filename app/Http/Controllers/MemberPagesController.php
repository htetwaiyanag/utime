<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberPagesController extends Controller
{
    public function login()
    {
    	return view ('member/index');
    }

    public function register()
    {
    	return view('member/register');
    }

    public function data()
    {
    	return view('member/data');
    }

    
}
