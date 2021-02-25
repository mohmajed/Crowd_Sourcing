<?php

namespace App\Http\Controllers;

use App\Session;
use App\Card;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($user)
{
    $user= User::FindorFail($user);
    return view('home',[
        'user'=>$user,
    ]);
}

    public function join (Request $request) {

        $s = Session::where('key',$request->post('link'))->first();
        if (!$s) {
            echo('Session not found!');
            return redirect('join');
        }
        $path='/session/'.$s->id;
        return redirect($path);
    }

    public function history(Request $r)
    {

        $cards = Card::where('user_id', $r->user()->id)->orderBy('created_at')->get();
        $i=0;
        foreach ($cards as $key => $value){
            //get id of sessions user participated in from his cards
            $sess[$i]=$value->session_id;
            $i++;
        }
        //make sure no duplicate session ids
        $sess=array_unique($sess);
        //fix the keys in sess after the function unique messes it up
        $i=0;
        foreach ($sess as $key => $value){
            //get id of sessions user participated in from his cards
            $s[$i]=$value;
            $i++;
        }


        foreach ($s as $key => $value){
            $session=Session::where('id',$value)->get();
            $sessions[$key]=$session;
        }
        $s=$sessions;

        return view('userHistory', [
            's'=>$s,
            'user'=>auth()->user(),
            'c'=>$cards,
        ]);
    }


}
