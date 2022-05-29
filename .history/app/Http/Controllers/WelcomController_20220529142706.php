<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WelcomController extends Controller
{
    public function store(Request $request)
    {
        $alertes = DB::table('alertes')->orderBy('created_at', 'desc')->get();
        if($request->has('reponse') && $request->has('sexe') && $request->has('nom') && $request->has('preno'))
        session()->flash('message', 'Vous êtes bien enregistré en tant que donneur, vous recevrez nos prochains alertes');
        return view('welcome', compact('alertes'));
    }
}
