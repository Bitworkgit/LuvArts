<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfileController extends Controller
{
    protected function index($user_id){
        $user = User::find($user_id);
        if(empty($user)){
            return redirect()->route("home");
        }
        else {
            return view("user/profile",compact('user'));
        }
    }
}
