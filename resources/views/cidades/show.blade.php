@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Cidade'])
    <div class="container-fluid py-4">
        <div class="row">
            
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <p class="text-uppercase text-sm">Informações do Município</p>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Nome do Município</label>
                                    <div class="form-group">
                                    @foreach($municipio_atual as $mun_at)

                                    @endforeach
                                    <input class="form-control" type="text" value="{{ $mun_at['nome_municipio'] }}"       name="codigo_municipio" readonly>
                                    </div>
                                </div>
                            </div>  
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Código do Município</label>
                                    <input class="form-control" type="text" value="{{ $mun_at['codigo_municipio'] }}" name="codigo_municipio" readonly>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">geoibgeId</label>
                                    <input class="form-control" type="text" value="{{ $mun_at['geoibgeId'] }}"
                                     name="geoibgeId" readonly>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">geonamesId</label>
                                    <input class="form-control" type="text" value="{{ $mun_at['geonamesId'] }}" name="geonamesId" readonly>
                                </div>
                            </div>
                        </div>
                        <hr class="horizontal dark">
                        <p class="text-uppercase text-sm">Informações Adicionais</p>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Prefeito</label>
                                    <input class="form-control" type="text"
                                        name="prefeito">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Vice Prefeito</label>
                                    <input class="form-control" type="text"
                                        name="vice_prefeito">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Exercício</label>
                                    <input class="form-control" type="text"
                                        name="exercicio">
                                </div>
                            </div>
                            <!--div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">City</label>
                                    <input class="form-control" type="text" value="New York">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Country</label>
                                    <input class="form-control" type="text" value="United States">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Postal code</label>
                                    <input class="form-control" type="text" value="437300">
                                </div>
                            </div-->
                        </div>
                        <hr class="horizontal dark">
                        <p class="text-uppercase text-sm">Estrutura Administrativa</p>
                            <div class="card">
                                <div class="card-body">
                                    <div class="row" style="font-size: 11px;">
                                        <div class="col-md-4"><b>Unidade Gestora</b><br />Unidade Orçamentária</div>
                                        <div class="col-md-1"><b>Criação</b><br />Inclusão</div>
                                        <div class="col-md-4"><b>CPF-Nome</b></div>
                                        <div class="col-md-1"><b>Início</b></div>
                                        <div class="col-md-1"><b>Gestor</b></div>
                                        <div class="col-md-1"><b>Ordenador</b></div>
                                    </div>
                                    <hr/>
                                    @foreach($unidadeGestora as $ug)
                                    <div class="row" style="font-size: 10px; background-color: #EEEEEE;">
                                        <div class="col-md-4">
                                        {{ $ug['codigo_unidade_gestora'] }} - {{ $ug['nome_unidade_gestora'] }}
                                        </div>
                                        <div class="col-md-1">
                                            @php
                                                $dt = date_create($ug["data_criacao"]);
                                                $dt = date_format($dt, "d/m/Y");
                                            @endphp
                                            {{ $dt }}
                                        </div>
                                        <div class="col-md-4"></div>
                                        <div class="col-md-1"></div>
                                        <div class="col-md-1"></div>
                                        <div class="col-md-1"></div>
                                    </div>

                                    @foreach($ordenador as $ord)
                                        @if($ord['codigo_unidade_gestora'] == $ug['codigo_unidade_gestora'])
                                    <div class="row" style="font-size: 10px;">
                                        <div class="col-md-4">
                                            @php
                                            foreach($unidadeOrcamentaria as $uo){
                                                if(($uo["codigo_unidade"] == $ord["codigo_unidade"]) && ($uo["codigo_orgao"] == $ord["codigo_orgao"])){
                                                    echo $uo["codigo_orgao"].$uo["codigo_unidade"]." - ".$uo["nome_unidade"]."<br />";    
                                                }
                                            }
                                            @endphp
                                        </div>
                                        <div class="col-md-1">
                                            @php
                                                $dt = date_create($ord['data_inclusao_unidade_orcamentaria']);
                                                $dt = date_format($dt, "d/m/Y");
                                            @endphp
                                            {{ $dt }}
                                        </div>
                                        <div class="col-md-4">
                                            {{ $ord['cpf_servidor'] }} - {{ $ord['nome_ordenador'] }}
                                        </div>
                                        <div class="col-md-1">
                                            @php
                                                $dt = date_create($ord["data_inicio_gestao_ordenador"]);
                                                $dt = date_format($dt, "d/m/Y");
                                            @endphp
                                            {{ $dt }}
                                        </div>
                                        <div class="col-md-1">
                                            SIM
                                        </div>
                                        <div class="col-md-1">
                                            SIM
                                        </div>                                      
                                    </div>
                                        @endif
                                    @endforeach
                                    @endforeach 
                                </div>
                            </div>
                        <!--div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">About me</label>
                                    <input class="form-control" type="text"
                                        value="A beautiful Dashboard for Bootstrap 5. It is Free and Open Source.">
                                </div>
                            </div>
                        </div-->
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.footers.auth.footer')
    </div>
@endsection