<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function contact(Request $request)
    {
        if($request->has('nom'))
            session()->flash('message_succes', 'Merci d\'avoir contacter savelifes. Votre message sera pris en compte');
        return view('contact');
    }
}
