<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeUserMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class PostController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public  function store(Request $request)
    {
        //  dd($request);
        DB::table('donneurs')->insert([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'telephone' => $request->telephone,
            'email' => $request->email,
            'ddn' => $request->date_naissance,
            'adresse' => $request->adresse,
            'profession' => $request->profession,
            'groupe_sanguin' => $request->groupe_sanguin,
            'regions' => $request->region,
            'Avdons' => $request->reponse,
            'sexe' => $request->sexe,
        ]);

        $mailReception = new WelcomeUserMail($request->email);
        Mail::to()->send($mailReception);
        
        return view('welcome');
    }
}

