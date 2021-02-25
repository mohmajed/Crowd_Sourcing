<?php

namespace App\Http\Controllers;

use App\Card;
use App\Session;
use Illuminate\Http\Request;

class CardsController extends Controller
{
    public function create(Request $r){


        $data= request()->validate([
            'text' => 'required',
            'sessionid'=>'required',
        ]);

        $c=auth()->user()->card()->create([
            'text'=>$data['text'],
            'score'=>0,
            'timesRated'=>0,
            'session_id'=>$data['sessionid'],

        ]);
        $s=$r->sessionid;
        $s=Session::where('id',$s)->get();

        return view('waitafter',[
                's'=>$s[0],
                'c'=>$c,
        ]);


    }
    public function rate(Request $r){
        //get card id from url then get the card and the corresponding session to send to view for display
        $c = $r->url();
        $c=substr($c,32);
        $c = Card::where('id',$c)->first();

        $s=$c->session_id;
        $s = Session::where('id',$s)->first();

        return view('cardrate',compact('c','s'));
    }
    public function wait(Request $r){
        $cid=$r->cardid;
        $new =$r->rating;
        $c=Card::where('id',$cid)->first();
        $c->score=$c->score+$new;
        $c->timesRated++;
        $c->save();
        $s=$c->session_id;
        $s=Session::where('id',$s)->first();

        if($c->timesRated<5 )
            return view('waitafter',[
                's'=>$s,
                'c'=>$c,
            ]);
        else {
           return redirect('/home/'.auth()->user()->id);
        }
    }


}
