<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailSender;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth'); //se inseisco questa riga definisco che le rotte di un controller sono dedicate solo agli utenti loggati;
    }

    

    public function SendMail(Request $request) {

      $title = $request->title;
      $desc = $request->description;
      $user = $request->user();
      $username = $user -> name;
      $usermail = $user -> email;



      Mail::to($request->user())->queue(new MailSender($username, $usermail, $title, $desc ));

      return redirect() -> route('home');
    }
}
