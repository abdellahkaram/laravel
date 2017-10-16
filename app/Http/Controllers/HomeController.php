<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\MailingUsers;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // return view('home');
       return view('home');
    }
    public function email(){
        //sendemail
        Mail::to(Auth::user()->email)->send(new MailingUsers());
        //Mail::to('abdellah.karam@hotmail.com')->send(new MailingUsers());
        return redirect('/');
        
    }
}
