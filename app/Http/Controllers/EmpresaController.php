<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa;
use App\Area;
use App\User;
use Auth;
use Gate;

class EmpresaController extends Controller
{
    private $area;
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Empresa $empresa)
    {
        $empresas = $empresa->all();
        return view('dashboard.empresas.index', compact('empresas'));
        
        
        
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.empresas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::find(Auth::user()->id);
        $empresa = $user->empresas()->create($request->all());
        return redirect()->route('empresas.index')
                        ->with('success','Empresa cadastrada com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $empresa = Empresa::find($id);
        $areas = Area::where('empresa_id', $id)->get();        
        $qtdareas = Area::where('empresa_id', $id)->count();
        return view('dashboard.empresas.show', compact('empresa', 'areas', 'qtdareas'));        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($idEmpresa){
        $empresa = Empresa::find($idEmpresa);
        
        //$this->authorize('atualizar-empresa', $empresa); bloquear que outros usuários editem empresas de terceiros
        if(Gate::denies('atualizar-empresa', $empresa) )
                abort (403, 'Não autorizado');
        return view('painel.empresas.atualizar-empresa', compact('empresa'));
    }
    public function rolesPermissions(){
        return 'Roles and Permissions to User';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
