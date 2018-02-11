@extends('layouts.escopo')

@section('content')
<div class="container-fluid">
    <h1 class="ls-title-intro ls-ico-home">{{ $empresa->nome}}</h1>
    <div class="row">
        <div class="col-md-6">
            <div class="ls-box">
                <h2 class="ls-title-3">Dados cadastrais</h2>
                <table class="ls-table ls-table-striped">
                    <tbody>
                        <tr>
                            <td><strong>Razão Social: </strong> {{ $empresa->nome}}</td>
                        </tr>
                        <tr>
                            <td><strong>CNPJ: </strong> {{ $empresa->cnpj}}</td>
                        </tr>
                        <tr>
                            <td><strong>Responsável: </strong> {{$empresa->user->name}}</td>
                        </tr>
                        <tr>
                            <td><strong>E-mail: </strong> {{ $empresa->email}}</td>
                        </tr>
                        <tr>
                            <td><strong>Áreas: </strong> {{ $qtdareas }}</td>
                        </tr>
                        <tr>
                            <td><strong>Profissionais: </strong> null</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-6">
            <div class="ls-collapse-group">
                <div data-ls-module="collapse" data-target="#accordeon0" class="ls-collapse ">
                    <a href="#" class="ls-collapse-header">
                        <h3 class="ls-collapse-title">Áreas</h3>
                    </a>
                    <div class="ls-collapse-body" id="accordeon0">
                        <table class="ls-table ls-sm-space ls-bg-header">
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Avaliador</th>
                                    <th>Profissionais</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse( $areas as $area )
                                <tr>
                                    <td><a href="" title="">{{$area->name}}</a></td>
                                    <td class="hidden-xs">$area->user->name</td>
                                    <td>1</td>
                                </tr>
                                @empty
                            <p>Nenhum Resultado!</p>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
                <div data-ls-module="collapse" data-target="#accordeon1" class="ls-collapse ">
                    <a href="#" class="ls-collapse-header">
                        <h3 class="ls-collapse-title">Profissionais</h3>
                    </a>
                    <div class="ls-collapse-body" id="accordeon1">

                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="ls-box">
                <button data-ls-module="modal" data-target="#cadastrarProfissional" class="ls-btn-primary ls-ico-user">Novo Profissional</button>
                <div class="ls-modal" id="cadastrarProfissional">
                    <div class="ls-modal-box">
                        <div class="ls-modal-header">
                            <button data-dismiss="modal">&times;</button>
                            <h4 class="ls-modal-title">Cadastrar novo profissional</h4>                            
                            @if ($message = Session::get('success'))
                            <hr>
                            <div class="ls-alert-success ls-dismissable">
                                <span data-ls-module="dismiss" class="ls-dismiss">&times;</span>
                                <strong>Sucesso!</strong> {{ $message }}
                            </div>
                            @endif                            
                        </div>
                        <div class="ls-modal-body" id="myModalBody">
                            {!! Form::open(['route' => 'colaboradores.store']) !!}
                            <fieldset class="col-md-12">
                                <label class="ls-label">
                                    <b class="ls-label-text">Nome</b>
                                    <p class="ls-label-info">Informe o nome completo</p>
                                    {!! Form::text('name', null, array('placeholder' => 'Nome e sobrenome')) !!}
                                    {!! Form::hidden('status', 'Desativado') !!}
                                </label>
                                <label class="ls-label">
                                    <b class="ls-label-text">E-mail</b>
                                    <p class="ls-label-info">O e-mail do usuário</p>
                                    {!! Form::text('email', null, array('placeholder' => 'Nome e sobrenome')) !!}
                                </label>
                                <label class="ls-label">
                                    <b class="ls-label-text">Senha</b>
                                    <p class="ls-label-info">Informe a senha</p>
                                    {!! Form::password('password', null, array('placeholder' => 'Insira a senha')) !!}
                                </label>
                            </fieldset>
                            <fieldset class="col-md-12">
                                <div class="ls-actions-btn">
                                    <button class="ls-btn">Salvar</button>
                                    <button class="ls-btn-danger">Excluir</button>
                                </div>
                            </fieldset>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div><!-- /.modal -->                
                <button data-ls-module="modal" data-target="#cadastrarArea" class="ls-btn-primary ls-ico-tree">Nova área</button>
                <div class="ls-modal" id="cadastrarArea">
                    <div class="ls-modal-box">
                        <div class="ls-modal-header">
                            <button data-dismiss="modal">&times;</button>
                            <h4 class="ls-modal-title">Cadastrar nova área</h4>
                            @if ($message = Session::get('success'))
                            <div class="ls-alert-success"><strong>Sucesso!</strong> {{ $message }}</div>
                            @endif
                        </div>
                        <div class="ls-modal-body" id="myModalBody">
                            {!! Form::open(['route' => 'areas.store']) !!}
                            <fieldset class="col-md-12">
                                <label class="ls-label">
                                    <b class="ls-label-text">Nome</b>
                                    <p class="ls-label-info">O nome do departamento ou setor que será aplicado</p>
                                    {!! Form::text('name', null, array('placeholder' => 'Ex: Secretaria, Almoxarifado, Compras, Contabilidade, Recursos Humanos')) !!}
                                </label>
                                <label class="ls-label">
                                    <b class="ls-label-text">E-mail</b>
                                    <p class="ls-label-info">Informe o e-mail do setor</p>
                                    {!! Form::email('email', null, array('placeholder' => 'Ex: compras@empresa.com.br')) !!}
                                </label>
                            </fieldset>
                            <fieldset class="col-md-12">
                                <div class="ls-actions-btn">
                                    <button class="ls-btn">Salvar</button>
                                </div>
                            </fieldset>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div><!-- /.modal -->     
                <button data-ls-module="modal" data-target="#cadastrarProfissional" class="ls-btn-primary ls-ico-stats">Nova avaliação</button>
                <div class="ls-modal" id="cadastrarProfissional">
                    <div class="ls-modal-box">
                        <div class="ls-modal-header">
                            <button data-dismiss="modal">&times;</button>
                            <h4 class="ls-modal-title">Cadastrar novo profissional</h4>                            
                            @if ($message = Session::get('success'))
                            <hr>
                            <div class="ls-alert-success ls-dismissable">
                                <span data-ls-module="dismiss" class="ls-dismiss">&times;</span>
                                <strong>Sucesso!</strong> {{ $message }}
                            </div>
                            @endif                            
                        </div>
                        <div class="ls-modal-body" id="myModalBody">
                            {!! Form::open(['route' => 'colaboradores.store']) !!}
                            <fieldset class="col-md-12">
                                <label class="ls-label">
                                    <b class="ls-label-text">Nome</b>
                                    <p class="ls-label-info">Informe o nome completo</p>
                                    {!! Form::text('name', null, array('placeholder' => 'Nome e sobrenome')) !!}
                                    {!! Form::hidden('status', 'Desativado') !!}
                                </label>
                                <label class="ls-label">
                                    <b class="ls-label-text">E-mail</b>
                                    <p class="ls-label-info">O e-mail do usuário</p>
                                    {!! Form::text('email', null, array('placeholder' => 'Nome e sobrenome')) !!}
                                </label>
                                <label class="ls-label">
                                    <b class="ls-label-text">Senha</b>
                                    <p class="ls-label-info">Informe a senha</p>
                                    {!! Form::password('password', null, array('placeholder' => 'Insira a senha')) !!}
                                </label>
                            </fieldset>
                            <fieldset class="col-md-12">
                                <div class="ls-actions-btn">
                                    <button class="ls-btn">Salvar</button>
                                    <button class="ls-btn-danger">Excluir</button>
                                </div>
                            </fieldset>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div><!-- /.modal -->                
            </div>
        </div>
    </div>
</div>
@endsection
