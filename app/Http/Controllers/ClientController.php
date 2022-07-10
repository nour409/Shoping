<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    //
    function Home(){

        return view('client.Home');
    }
    function Shop(){

        return view('client.Shop');
    }
    function Cart(){

        return view('client.Cart');
    }
    function Check(){

        return view('client.check');
    }
    function login(){

        return view('client.login');
    }
    function sgin(){

        return view('client.sgin');
    }
}
