<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserDashboard extends Controller
{
    //

    public function userInfo(Request $request){
        $user = Auth::user();
        $name = $user->name;
        $email = $user->email;

        $user=[
            'name'=>$name,
            'email'=>$email
        ];

        return view('index',['user'=> $user]);
        ///dd($user);
    }


    public function educationInfo(){
        return view('')
    }


}
