<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;


class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($session_id = false)
    {
         $session_list = Message::select('session_id')->groupBy('session_id')->get();


         return view('admin', [
            'session_list' => $session_list, 
            'session_id' => $session_id
         ]);
    }

    public function sendMessage($session_id = false, Request $request){

       if ( !$request->input('message')){
            return back(); 

       }

        Message::create([
            'session_id' => $session_id,
            'admin' => '1',
            'message' => $request->input('message')
        ]);
        
        return back(); 
    }
}
