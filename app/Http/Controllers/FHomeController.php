<?php

namespace App\Http\Controllers;

use App\Session;
use App\User;
use Illuminate\Http\Request;

class FHomeController extends Controller
{
    public function index($user)
    {
        $user = User::FindorFail($user);
        return view('facilitator', [
            'user' => $user,
        ]);
    }

    public function history(Request $r)
    {
        $sessions = Session::where('user_id', $r->user()->id)->orderBy('created_at')->get();
        /*$cards = Card::where('user_id', $r->user()->id)->get();*/
        return view('facHistory', [
            'sessions'=>$sessions,
            'user'=>auth()->user(),
        ]);
    }
}

