<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use App\User;
use App\Model\Produto;

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
        
        $user = User::where('bloqueado', 0)->where('excluido', 0)->paginate(15);

        return view('admin.users', compact('user'));
    }

    public function blockedUsers(Request $request){
        if(!Gate::allows('admin'))
            return redirect()->route('home');
        
        $user = User::where('bloqueado',1)->where('excluido',0)->paginate(15);

        return view('admin.blocked-users', compact('user'));
    }

    public function blockUsers($id){
        $user = User::find($id);
        $user->bloqueado = 1;
        $user->save();

        return redirect()->route('admin.users')->with('success', 'Usuário bloqueado com sucesso!');
    }

    public function deleteUsers($id){
        $user = User::find($id);
        $user->excluido = 1;
        $user->save();

        return redirect()->route('admin.users')->with('success', 'Usuário excluido com sucesso!');
    }

    public function unlockUsers($id){
        $user = User::find($id);
        $user->bloqueado = 0;
        $user->save();

        return redirect()->route('admin.blockedUsers')->with('success', 'Usuário desbloqueado com sucesso!');
    }

    public function listArts($id){
        $user = Produto::where('user_id', $id)->get();

        return view('admin.list-arts', compact('user'));

    }
}
