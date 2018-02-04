@extends('layouts.escopo')

@section('content')
<div class="container-fluid">
    <h1 class="ls-title-intro ls-ico-dashboard">Empresas</h1>
    <a href="/locawebstyle/documentacao/exemplos/painel1/new-client" class="ls-btn-primary">Cadastrar</a>

    <div class="ls-box-filter">
        <form action="" class="ls-form ls-form-inline ls-float-left">
            <label class="ls-label col-md-6 col-sm-8">
                <b class="ls-label-text">Status</b>
                <div class="ls-custom-select ls-field-sm">
                    <select name="" class="ls-select">
                        <option>Todos</option>
                        <option>Ativos</option>
                        <option>Desativados</option>
                    </select>
                </div>
            </label>
        </form>

        <form  action="" class="ls-form ls-form-inline ls-float-right">
            <label class="ls-label" role="search">
                <b class="ls-label-text ls-hidden-accessible">Nome da empresa</b>
                <input type="text" id="q" name="q" aria-label="Faça sua busca por empresa" placeholder="Nome da empresa" required="" class="ls-field-sm">
            </label>
            <div class="ls-actions-btn">
                <input type="submit" value="Buscar" class="ls-btn ls-btn-sm" title="Buscar">
            </div>
        </form>
    </div>

    <table class="ls-table">
        <thead>
            <tr>
                <th>Razão Social</th>
                <th class="ls-txt-center hidden-xs">CNPJ</th>
                <th class="ls-txt-center hidden-xs">Responsável</th>
                <th class="ls-txt-center hidden-xs">Áreas</th>
                <th class="ls-txt-center">Funcionários</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @forelse($empresas as $empresa)
            @can('view_empresa', $empresa)
            <tr>
                <td><a href="{{ route('empresas.show',$empresa->id) }}">{{$empresa->nome}}</a></td>
                <td class="ls-txt-center hidden-xs">00.000.000/0000-00</td>
                <td class="ls-txt-center hidden-xs">{{$empresa->user->name}}</td>
                <td class="ls-txt-center">4</td>
                <td class="ls-txt-center">1</td>
                <td class="ls-txt-right ls-regroup">
                    <a href="{{ route('empresas.show',$empresa->id) }}" class="ls-btn ls-btn-sm">Visualizar</a>
                    <div data-ls-module="dropdown" class="ls-dropdown ls-pos-right">
                        <a href="#" class="ls-btn ls-btn-sm"></a>
                        <ul class="ls-dropdown-nav">
                            <li><a href="{{ route('empresas.edit',$empresa->id) }}">Editar</a></li>
                        </ul>
                    </div>
                </td>
            </tr>
            @endcan
            @empty
        <p>Nenhuma empresa cadastrada</p>
        @endforelse

        </tbody>
    </table>

    <div class="ls-pagination-filter">
        <ul class="ls-pagination">
            <li><a href="#">« Anterior</a></li>
            <li class="ls-active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#" class="hidden-xs">4</a></li>
            <li><a href="#" class="hidden-xs">5</a></li>
            <li><a href="#">Próximo »</a></li>
        </ul>

        <div class="ls-filter-view">
            <label for="">
                Exibir
                <div class="ls-custom-select ls-field-sm">
                    <select name="" id="">
                        <option value="10">10</option>
                        <option value="30">30</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>
                </div>
                ítens por página
            </label>
        </div>
    </div>
</div>
@endsection
