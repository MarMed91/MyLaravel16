<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MailSender extends Mailable
{
    use Queueable, SerializesModels;

   public $username;//creazione della variabile;
   public $usermail;
   public $title;
   public $desc;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($username, $usermail, $title, $desc) //l'acquisizione della variabile
    {
          $this-> username = $username; //collegamento, salvataggio dall'uno all'altro;
          $this-> usermail = $usermail;
          $this-> title = $title;
          $this-> desc = $desc;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.test-mail');
    }
}
