<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request as FacadesRequest;
use Illuminate\Support\Facades\Route;

class ServicesController extends Controller
{
    public function index(){
        $variable1 = Route::current();
        $cards = [
            [
                'title' => 'Card Title',
                'content' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sapiente, alias.',
            ],[
                'title' => 'Card Title',
                'content' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sapiente, alias.Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sapiente, alias.Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sapiente, alias.',
            ],[
                'title' => 'Card Title',
                'content' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sapiente, alias.Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sapiente, alias.Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sapiente, alias.',
            ]
        ];
        return view('pages.services',[
            'route'=>$variable1,
            'cards' => $cards
        ]);
    }
}
