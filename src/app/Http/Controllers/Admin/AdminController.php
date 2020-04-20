<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;

class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
     }

    public function index(Request $request){     
        if(!Gate::allows('admin'))
            return redirect()->route('user.login');

        $user = $request->user();

        return view ('admin.index', compact('user'));
    }
}
