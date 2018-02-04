@extends('layouts.escopo')

@section('content')
<div class="container-fluid">
                <h1 class="ls-title-intro ls-ico-dashboard">Dashboard</h1>
                <div class="ls-box ls-board-box">
                    <header class="ls-info-header">
                        <h2 class="ls-title-3">Estatísticas</h2>
                    </header>
                    <div id="sending-stats" class="row">
                        <div class="col-sm-6 col-md-2">
                            <div class="ls-box">
                                <div class="ls-box-head">
                                    <h6 class="ls-title-4">Empresas</h6>
                                </div>
                                <div class="ls-box-body">
                                    <span class="ls-board-data">
                                        <strong>{{$totalEmpresa}}</strong>
                                    </span>
                                </div>
                                <div class="ls-box-footer">
                                    <a href="{{ route('empresas.index') }}" class="ls-btn ls-btn-xs">Gerenciar</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-2">
                            <div class="ls-box">
                                <div class="ls-box-head">
                                    <h6 class="ls-title-4">Áreas</h6>
                                </div>
                                <div class="ls-box-body">
                                    <span class="ls-board-data">
                                        <strong>0</strong>
                                    </span>
                                </div>
                                <div class="ls-box-footer">
                                    <a href="#" class="ls-btn ls-btn-xs">Gerenciar</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-2">
                            <div class="ls-box">
                                <div class="ls-box-head">
                                    <h6 class="ls-title-4">Profissionais</h6>
                                </div>
                                <div class="ls-box-body">
                                    <span class="ls-board-data">
                                        <strong>{{$totalUsers}}</strong>
                                    </span>
                                </div>
                                <div class="ls-box-footer">
                                    <a href="#" class="ls-btn ls-btn-xs">Gerenciar</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-2">
                            <div class="ls-box">
                                <div class="ls-box-head">
                                    <h6 class="ls-title-4 color-default">Disponível</h6>
                                </div>
                                <div class="ls-box-body">
                                    <span class="ls-board-data">
                                        <strong class="ls-color-theme">81%</strong>
                                        <small>989.257</small>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-2">
                            <div class="ls-box">
                                <div class="ls-box-head">
                                    <h6 class="ls-title-4 color-default">Disponível</h6>
                                </div>
                                <div class="ls-box-body">
                                    <span class="ls-board-data">
                                        <strong class="ls-color-theme">81%</strong>
                                        <small>989.257</small>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-2">
                            <div class="ls-box">
                                <div class="ls-box-head">
                                    <h6 class="ls-title-4 color-default">Disponível</h6>
                                </div>
                                <div class="ls-box-body">
                                    <span class="ls-board-data">
                                        <strong class="ls-color-theme">81%</strong>
                                        <small>989.257</small>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
