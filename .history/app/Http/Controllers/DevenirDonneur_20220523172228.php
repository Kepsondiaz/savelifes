<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DevenirDonneur extends Controller
{
    public function index()
    {
        // dd($request);
        return view('devenir');
    }

    public function store(Request $request)
    {
        // dd($request);
        return view('devenir');
    }
}
