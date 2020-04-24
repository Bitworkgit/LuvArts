<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use App\User;

class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
     }

    public function index(Request $request){     
        if(!Gate::allows('admin'))
            return redirect()->route('home');

        $user = $request->user();

        return view ('admin.index', compact('user'));
    }

    public function users(Request $request){
        if(!Gate::allows('admin'))
            return redirect()->route('home');
        
        $user = User::paginate(15);

        return view('admin.users', compact('user'));
    }

    public function blockedUsers(Request $request){
        if(!Gate::allows('admin'))
            return redirect()->route('home');
        
        $user = User::where('bloqueado',1)->paginate(15);

        return view('admin.blocked-users', compact('user'));
    }
}
