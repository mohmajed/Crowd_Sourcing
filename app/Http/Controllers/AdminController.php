<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin');
    }
    public function approve(Request $req) {
        $user = User::all();

        return view('viewUsers',[
            'users'=>$user,
        ]);
    }
}
