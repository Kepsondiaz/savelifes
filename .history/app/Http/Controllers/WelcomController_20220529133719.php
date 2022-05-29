<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WelcomController extends Controller
{
    public function store()
    {
        $alertes = DB::table('alertes')->orderBy('created_at', 'desc')->get();
        session()->flash('message_succes', 'Vous êtes bien enregistré en tant que donneur, vous recevrez nos prochains alertes pourrtant sur les besoins des dons de sang');
        return view('welcome', compact('alertes'));
    }
}
