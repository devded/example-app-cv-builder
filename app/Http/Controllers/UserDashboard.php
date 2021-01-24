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

        return view('dashboard.overview',['user'=> $user]);
        ///dd($user);
    }

    public function summaryInfo(){
        return view('dashboard.summary');
    }


    public function educationInfo(){
        return view('dashboard.education');
    }

    public function experienceInfo(){
        return view('dashboard.experience');
    }

    public function keyskillInfo(){
        return view('dashboard.keyskill');
    }

    public function tranningInfo(){
        return view('dashboard.tranning');
    }

    public function achivementInfo(){
        return view('dashboard.achivement');
    }

}
