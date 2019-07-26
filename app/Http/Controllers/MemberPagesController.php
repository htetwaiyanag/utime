<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberPagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

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

    public function step1(){
        return view('member/step1');
    }

    public function planner(){
        return view('member/planSuccess');
    }

    
}
