<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request)
    {
        return view('welcome');
    }

    public  function store(Request $request)
    {
        dd($re)
    }
}

