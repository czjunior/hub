@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Unid. Orçamentárias'])
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Lista das Unid. Orçamentárias do Município</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Nome</th>
                                        <!--th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Gestor(es)</th-->
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($unidadeOrcamentaria as $uo)
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <!--div>
                                                    <img src="/img/team-2.jpg" class="avatar avatar-sm me-3"
                                                        alt="user1">
                                                </div-->
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">{{ $uo['nome_unidade'] }}</h6>
                                                    <p class="text-xs text-secondary mb-0">Cód. & Tipo de Unid. Administrativa: {{ $uo['codigo_tipo_unidade'] }} 
                                                    @foreach($tp_unid_adm as $tu)
                                                        @if($tu['codigo'] == $uo['codigo_tipo_unidade'])
                                                        {{ $tu['nome'] }}
                                                        @endif
                                                    @endforeach
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.footers.auth.footer')
    </div>
@endsection
