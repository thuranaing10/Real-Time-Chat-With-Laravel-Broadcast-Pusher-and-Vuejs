<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Events\ChatEvent;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function chat(){
        return view('chat');
    }

    public function send(Request $request){
        $user = User::find(Auth::id());
        //$this->saveToSession($request);
        event(new ChatEvent($request->message, $user));

    }

    public function saveToSession(Request $request){
        session()->put('chat', $request->chat);
        //$request->session()->put('chat', $request->message);
    }

    public function getOldMessage(){
        return session('chat');
    }

    public function deleteSession(){
        session()->forget('chat');
    }
}
