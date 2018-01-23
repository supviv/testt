<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
  //      $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('chat');
    }
    public function create(){
    if(!request()->input('message')){
    	return back();
    }
    $message = new Message;

    $message->message = request()->input('message');
    $message->admin = '0';
    $message->session_id = session()->getId();
    $message->save();


    return back();
}
}