<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailSender;
use App\User;

class SendMailCmd extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mail:send {id}'; //acquisizione id;

    protected $description = 'Send mail debugging';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $id = $this -> argument('id'); //estrazione dell'id;

        $title = 'title';
        $desc = 'description';

        $user = User::findOrFail($id); //che poi viene usata per find of fail;
        $username = $user -> name;
        $usermail = $user -> email;

        Mail::to($usermail)->queue(new MailSender($username, $usermail, $title, $desc ));
        //return redirect() -> route('home');
    }
}
