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
        DB::table('donneurs')->insert([
            ''
            'sexe'=>$request->sexe,
        ])
        dd($request);
        return view('welcome');
    }
}

