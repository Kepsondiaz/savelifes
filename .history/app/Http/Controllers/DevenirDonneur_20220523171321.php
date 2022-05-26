<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DevenirDonneur extends Controller
{
    public function index(Request $request)
    {
        dd($request);
        return view('devenir');
    }

    public function s(Request $request)
    {
        dd($request);
        return view('devenir');
    }
}
