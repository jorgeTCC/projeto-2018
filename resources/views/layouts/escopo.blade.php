<!DOCTYPE html>
<html class="ls-theme-gold ls-theme-indigo" lang="{{ app()->getLocale() }}">
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <meta charset="utf-8">
        <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <link rel="icon" sizes="192x192" href="/locawebstyle/assets/images/ico-painel1.png">
        <link rel="apple-touch-icon" href="/locawebstyle/assets/images/ico-painel1.png">
        <meta name="apple-mobile-web-app-title" content="Painel 1">
        <script src="{{ asset('assets/javascripts/libs/mediaqueries-ie.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/javascripts/libs/html5shiv.js') }}" type="text/javascript"></script>
        <link href="{{ asset('assets/stylesheets/locastyle.css') }}" rel="stylesheet" type="text/css" />
    </head>
    <body class="documentacao documentacao_exemplos documentacao_exemplos_painel1 documentacao_exemplos_painel1_clients documentacao_exemplos_painel1_clients_index">
        <div class="ls-topbar ">
            <div class="ls-notification-topbar">
                <div class="ls-alerts-list">
                    <a href="#" class="ls-ico-bell-o" data-counter="8" data-ls-module="topbarCurtain" data-target="#ls-notification-curtain"><span>Notificações</span></a>
                    <a href="#" class="ls-ico-bullhorn" data-ls-module="topbarCurtain" data-target="#ls-help-curtain"><span>Ajuda</span></a>
                    <a href="#" class="ls-ico-question" data-ls-module="topbarCurtain" data-target="#ls-feedback-curtain"><span>Sugestões</span></a>
                </div>
                <div data-ls-module="dropdown" class="ls-dropdown ls-user-account">
                    <a href="#" class="ls-ico-user">
                        <img src="/locawebstyle/assets/images/locastyle/avatar-example.jpg" alt="" />
                        <span class="ls-name">{{ Auth::user()->name }}</span>
                    </a>
                    <nav class="ls-dropdown-nav ls-user-menu">
                        <ul>
                            <li><a href="#">Meus dados</a></li>
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
    document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <span class="ls-show-sidebar ls-ico-menu"></span>
            <h1 class="ls-brand-name">
                <a href="{{ url('/') }}" class="ls-ico-earth">
                    {{ config('app.name', 'Laravel') }}
                </a>
            </h1>
        </div>
        <aside class="ls-sidebar">
            <div class="ls-sidebar-inner">
                <a href="/locawebstyle/documentacao/exemplos/painel1/pre-painel"  class="ls-go-prev"><span class="ls-text">Voltar à lista de serviços</span></a>
                <nav class="ls-menu">
                    <ul>
                        <li><a href="{{ url('dashboard') }}" class="ls-ico-dashboard" title="Dashboard">Dashboard</a></li>
                        <li><a href="/locawebstyle/documentacao/exemplos/painel1/clients" class="ls-ico-users" title="Clientes">Clientes</a></li>
                        <li><a href="/locawebstyle/documentacao/exemplos/painel1/stats" class="ls-ico-stats" title="Relatórios da revenda">Relatórios da revenda</a></li>
                        <li>
                            <a href="#" class="ls-ico-cog" title="Configurações">Configurações</a>
                            <ul>
                                <li><a href="/locawebstyle/documentacao/exemplos/painel1/config-domain">Domínios da Revenda</a></li>
                                <li><a href="/locawebstyle/documentacao/exemplos/painel1/config-email">E-mail de Remetente</a></li>
                                <li><a href="/locawebstyle/documentacao/exemplos/painel1/config-aspect">Aparência</a></li>
                                <li><a href="/locawebstyle/documentacao/exemplos/painel1/config-answer">Atendimento</a></li>
                                <li><a href="/locawebstyle/documentacao/exemplos/painel1/config-api">Chave de acesso para API</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <main class="ls-main ">
            @yield('content')
        </main>
        <aside class="ls-notification">
            <nav class="ls-notification-list" id="ls-notification-curtain">
                <h3 class="ls-title-2">Notificações</h3>
                <ul>
                    <li class="ls-dismissable">
                        <a href="#">Aut ex quia et et aut necessitatibus hic dolores consequatur quis</a>
                        <a href="#" data-ls-module="dismiss" class="ls-ico-close ls-close-notification"></a>
                    </li>
                    <li class="ls-dismissable">
                        <a href="#">Quis et sapiente quis in nihil alias repellat id et voluptatem quis unde omnis</a>
                        <a href="#" data-ls-module="dismiss" class="ls-ico-close ls-close-notification"></a>
                    </li>
                    <li class="ls-dismissable">
                        <a href="#">Eius labore numquam facere et voluptates quis quo dolorem</a>
                        <a href="#" data-ls-module="dismiss" class="ls-ico-close ls-close-notification"></a>
                    </li>
                    <li class="ls-dismissable">
                        <a href="#">In maiores deleniti officia sed et et totam perspiciatis iste ea ex nihil</a>
                        <a href="#" data-ls-module="dismiss" class="ls-ico-close ls-close-notification"></a>
                    </li>
                    <li class="ls-dismissable">
                        <a href="#">Odit repellendus ut quibusdam similique impedit</a>
                        <a href="#" data-ls-module="dismiss" class="ls-ico-close ls-close-notification"></a>
                    </li>
                </ul>
                <p class="ls-no-notification-message">Não há notificações.</p>
            </nav>
            <nav class="ls-notification-list" id="ls-help-curtain">
                <h3 class="ls-title-2">Feedback</h3>
                <ul>
                    <li><a href="#">> sit sequi explicabo totam unde eos</a></li>
                    <li><a href="#">> facere modi sed fugit fugiat explicabo</a></li>
                </ul>
            </nav>
            <nav class="ls-notification-list" id="ls-feedback-curtain">
                <h3 class="ls-title-2">Ajuda</h3>
                <ul>
                    <li class="ls-txt-center hidden-xs">
                        <a href="#" class="ls-btn-dark ls-btn-tour">Fazer um Tour</a>
                    </li>
                    <li><a href="#">> Guia</a></li>
                    <li><a href="#">> Wiki</a></li>
                </ul>
            </nav>
        </aside>
        <script src="{{ asset('assets/javascripts/libs/jquery-2.1.0.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/javascripts/example.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/javascripts/locastyle.js') }}" type="text/javascript"></script>
        <script src="//code.highcharts.com/highcharts.js" type="text/javascript"></script>
        <script src="{{ asset('assets/javascripts/docs/panel-charts.js') }}" type="text/javascript"></script>
        <script type="text/javascript">
$(window).on('load', function () {
    locastyle.browserUnsupportedBar.init();
});
        </script>
    </body>
</html>
