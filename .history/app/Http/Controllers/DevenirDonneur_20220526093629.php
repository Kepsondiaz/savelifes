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

    public function contact(Request $request)
    {
        DB::table('contact')->insert([
            'nom'=>$request->nom,
            'prenom'=>$request->prenom,
            'messages'=>
        ]);
            session()->flash('message_succes', 'Merci de nous avoir contacter. Votre message sera pris en compte');
        return view('contact');
    }
}
