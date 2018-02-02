<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa;
use Gate;

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
     * @return \Illuminate\Http\Response
     */
    public function index(Empresa $empresa)
    {
        //$empresas = $empresa->all();
        $empresas = $empresa->where('user_id', auth()->user()->id)->get();

        return view('home', compact('empresas'));
    }
    public function update($idEmpresa){
        $empresa = Empresa::find($idEmpresa);
        
        //$this->authorize('atualizar-empresa', $empresa); bloquear que outros usuários editem empresas de terceiros
        if(Gate::denies('atualizar-empresa', $empresa) )
                abort (403, 'Não autorizado');
        return view('empresas.atualizar-empresa', compact('empresa'));
    }
}
