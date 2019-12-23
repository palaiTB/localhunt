<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function index(Request $request)
    {
        $url = url()->current();
        $data = explode('/', $url);
        return view('welcome', compact('data'));
    }

}
