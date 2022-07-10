<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    function dash(){

        return view('admin.dashboard');
    }
    function addcatogry(){

        return view('admin.addcategory');
    }
}
