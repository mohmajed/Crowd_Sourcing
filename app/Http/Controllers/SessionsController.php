<?php

namespace App\Http\Controllers;

use App\Card;
use App\Session;
use Illuminate\Http\Request;

class SessionsController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    public function create(){

        return view('sessions.create');
    }

    public function store(){
        $data= request()->validate([

            'title' => 'required',
            'problem' => 'required',
            'nbParticipants' => 'required',
        ]);

        //generating random unique key here using the unique id
        $key='yuaD'.rand(0,1000).'Rfdd2'.auth()->user()->id.'g24gdw';
       auth()->user()->sessions()->create([
           'title'=>$data['title'],
           'problem'=>$data['problem'],
           'key'=>$key,
           'nbParticipants'=>$data['nbParticipants'],
       ]);


        return redirect('/facilitator/' . auth()->user()->id);

    }

    public function view(Request $r) {
        $s = $r->url();
        $s=substr($s,30);
        $s = Session::where('id',$s)->first();

        return view('sessionview', [
            's' => $s,
        ]);
    }
    public function viewResult(Request $r) {
        //get the session we need to view results for
        $s = $r->url();
        $s=substr($s,37);
        $s = Session::where('id',$s)->first();
        //get the cards used in that session and order in DESC order
        $c= Card::where('session_id',$s->id)->orderby('score','DESC')->get();

        return view('resultview', [
            'c' => $c,
            'user'=>auth()->user(),
        ]);
    }


}
