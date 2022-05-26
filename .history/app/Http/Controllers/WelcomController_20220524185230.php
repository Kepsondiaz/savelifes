<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WelcomController extends Controller
{
    public function store()
    {
        DB::select('select * from users where active = ?', [1])
        return view('welcome');
    }
}
