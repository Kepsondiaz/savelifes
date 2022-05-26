<?php

namespace App\Http\Controllers;

use App\Mail\AlertesReception;
use App\Mail\WelcomeUserMail;
use App\Models\Alertes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Mediumart\Orange\SMS\Http\SMSClient;
use Mediumart\Orange\SMS\SMS;

class AdminAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return view('auth.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $client = SMSClient::getInstance('VWhV8yku0R4yVWmrNF2LZ1ZYGpn9aue6', 'uVKZ57TLa2e43a9S');
        $sms = new SMS($client);
        $sms->message('Bonjour Mr, Mme nous avons besoin ',$request->groupe_sanguin)
        ->from('+221775530932')
        ->to('+221784852812')
        ->send();

        if(($request->has('groupe_sanguin'))&& ($request->has('hopital')) && ($request->has('niveau_urgence')) && ($request->has('motif')))
        {
                $date = date('d-m-y h:i:s');
                $msg = new Alertes([
                    'groupe_sanguin'=>$request->groupe_sanguin,
                    'hopitaux'=>$request->hopital,
                    'niveau_urgence'=>$request->niveau_urgence,
                    'motifs'=>$request->motif
                ]);
                $msg->save();

                 $alertes = DB::table('donneurs')->get();
                 // dd($alertes);
                 foreach($alertes as $alerte)
                 {
                     // dd($alerte->email);
                    //  $mailReception = new AlertesReception($msg);
                    //  Mail::to($alerte->email)->send($mailReception);    
                 }
                return redirect('/admin');
        }
        else{
            return view('admin');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
