<?php

namespace App\Mail;

use App\Models\Alertes;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;

class AlertesReception extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Alertes $alertes)
    {
        $this->alertes = $alertes;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // $users = DB::table('alertes')
        //             ->get();
        return $this->view('email.alertes-donneurs', );
    }
}
