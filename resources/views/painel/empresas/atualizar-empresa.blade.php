@extends('layouts.escopo')

@section('content')
<div class="container">
    <li>{{$empresa->nome}} <em class="danger">{{$empresa->id}}</em> <br> Responsável: {{$empresa->user->name}}</li>
</div>
@endsection
