<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DevenirDonneur extends Controller
{


    public function store(Request $request)
    {
        // dd($request);
        return view('devenir');
    }

    public function Apropos()
    {
        return view('Apropos');
    }

    public function contact()
    {
        session()->flash('message_succes', '');
        return view('contact');
    }
}
