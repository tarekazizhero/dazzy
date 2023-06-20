<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class useController extends Controller
{
    function home(){
        return view('home');
    }

    function man(){
        return view('man');
    }
    function gadget(){
        return view('gadget');
    }

    function women(){
        return view('women');
    }

    function bag(){
        return view('bag');
    }
    function kids(){
        return view('kids');
    }

    function skincare(){
        return view('skincare');
    }

}
