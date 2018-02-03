@extends('layouts.app')

@section('content')
<div class="container">
    @forelse($empresas as $empresa)
        @can('view_empresa', $empresa)        
        <li>{{$empresa->nome}} <em class="danger">{{$empresa->id}}</em> <br> Responsável: {{$empresa->user->name}}</li>
        <a href="{{url("empresa/$empresa->id/update")}}">Editar</a>
        @endcan
    @empty
    <p>Nenhuma empresa cadastrada</p>
    @endforelse
</div>
@endsection
