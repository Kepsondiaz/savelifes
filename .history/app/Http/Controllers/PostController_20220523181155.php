<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public  function store(Request $request)
    {
        DB::insert('insert into users (id, name) values (?, ?)', [1, 'Dayle'])
        dd($request);
        return view('welcome');
    }
}

