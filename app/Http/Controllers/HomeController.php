<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function redir(){
        return redirect()->route('wel');
    }
    public function index(){
        return view('welcome');
    }
}
