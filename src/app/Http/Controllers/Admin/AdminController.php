<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use App\User;
use App\Model\Produto;
use App\Model\SaldoEquipe;
use App\Doacoes;
use App\Venda;

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
        $i = 1;

        return view('admin.users', compact('user', 'i'));
    }

    public function blockedUsers(Request $request){
        if(!Gate::allows('admin'))
            return redirect()->route('home');
        
        $user = User::where('bloqueado',1)->where('excluido',0)->paginate(15);

        return view('admin.blocked-users', compact('user'));
    }

    public function blockUsers($id){
        if(!Gate::allows('admin'))
            return redirect()->route('home');

        $user = User::find($id);
        $user->bloqueado = 1;
        $user->save();

        return redirect()->route('admin.users')->with('success', 'Usuário bloqueado com sucesso!');
    }

    public function deleteUsers($id){
        if(!Gate::allows('admin'))
            return redirect()->route('home');

        $user = User::find($id);
        $user->excluido = 1;
        $user->bloqueado = 0;
        $user->save();

        return redirect()->route('admin.users')->with('success', 'Usuário excluido com sucesso!');
    }

    public function unlockUsers($id){
        if(!Gate::allows('admin'))
            return redirect()->route('home');

        $user = User::find($id);
        $user->bloqueado = 0;
        $user->save();

        return redirect()->route('admin.blockedUsers')->with('success', 'Usuário desbloqueado com sucesso!');
    }

    public function listArts($id){
        if(!Gate::allows('admin'))
            return redirect()->route('home');

        $user = Produto::where('user_id', $id)->get();

        return view('admin.list-arts', compact('user'));
    }

    public function admin(Request $request, $id){
        if(!Gate::allows('admin'))
            return redirect()->route('home');

        $value = $request->input('admin');
        $admin = User::find($id);
        $user  = User::where('bloqueado', 0)->where('excluido', 0)->paginate(15);
        $i     = 0;

        if($value == 1){
            $admin->administrador = 1;
            $admin->save();
            return back()->with('success', 'Agora este usuário é um administrador!');
        }
            
        $admin->administrador = 0;
        $admin->save();
        return back()->with('success', 'Agora este usuário não é mais um administrador!');
    }

    public function del(){
        if(!Gate::allows('admin'))
            return redirect()->route('home');
        
        $user  = User::where('excluido', 1)->paginate(15);

        return view('admin.del', compact('user'));
    }

    public function listaAdm(){
        if(!Gate::allows('admin'))
            return redirect()->route('home');
        
        $user  = User::where('administrador', 1)->paginate(15);
        $i     = 0;

        return view('admin.listaAdm', compact('user', 'i'));
    }

    public function capitalLuvArts(){
        
        $dados = SaldoEquipe::orderBy('ano','ASC')->get();
        $dadosDivisao = User::where('administrador',1)->get();

        $capital = $dados->last()->capital;
        $crescimento = 100/$dados->first()->capital*$dados->last()->capital-100;

        $grafico[] = ['Data','Capital'];
        $divisao[] = ['Pessoa','Capital'];

        foreach ($dados as $key => $value) {
            $grafico[++$key] = [(string)$value->ano, $value->capital];
        }

        foreach ($dadosDivisao as $key => $value) {
            $divisao[++$key] = [$value->nome, $dados->last()->capital/count($dadosDivisao)];
        }

        return view('admin.luvArts-capital',compact('capital','crescimento'))
                                ->with('dados',json_encode($grafico))
                                ->with('dadosDivisao',json_encode($divisao));
    }

    public function estatisticas(){
        $users = User::all();
        $block = User::where('bloqueado', 1)->get();
        $exclu = User::where('excluido', 1)->get();
        $dados = SaldoEquipe::orderBy('ano','ASC')->get();
        $dados = $dados->last()->capital;
        $ativo = User::where('excluido', 0)->where('bloqueado', 0)->get();
        $liqui = $users->sum('capital'); 
        $liqui = $liqui - $block->sum('capital') - $exclu->sum('capital');
        $venda = Produto::all();
        $top5  = Produto::orderBy('vendas', 'DESC')->limit(5)->get();
        $doacoes = Doacoes::all()->last();
        $doacoes = $doacoes['capital'];
        $vendas = Venda::where('status','<',3)->paginate(7);
        //dd($top5);
        
        return view('admin.estatisticas', compact('users', 'block', 'exclu', 'dados', 'liqui', 'ativo', 'venda', 'top5','doacoes','vendas'));
    }
}
