@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Cidade'])
    <div class="container-fluid py-4">
        <div class="row">
            
            <div class="col-md-12">
                <div class="card">
                <form role="form" method="POST" action="{{ route('cidade-store') }}">
                    @csrf
                    @method('post')
                    <div class="card-header pb-0">
                        <div class="d-flex align-items-center">
                            <p class="mb-0">Importar Dados do Município</p>
                            <button type="submit" class="btn btn-primary btn-sm ms-auto">IMPORTAR</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="text-uppercase text-sm">Informações do Município</p>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Nome do Município</label>
                                    <div class="form-group">
                                        <select class="form-control" id="municipio" name="municipio">
                                            @foreach($municipios as $mun)
                                                @if($flag == 1)
                                                    @foreach($municipio_atual as $mun_at)

                                                    @endforeach
                                                    @if($mun['codigo_municipio'] === $mun_at['codigo_municipio'])
                                                    <option selected="selected" value="{{ $mun['codigo_municipio'] }}-{{ $mun['nome_municipio'] }}-{{ $mun['geoibgeId'] }}-{{ $mun['geonamesId'] }}-">{{ $mun['nome_municipio'] }}</option>
                                                    @else
                                                    <option value="{{ $mun['codigo_municipio'] }}-{{ $mun['nome_municipio'] }}-{{ $mun['geoibgeId'] }}-{{ $mun['geonamesId'] }}-">{{ $mun['nome_municipio'] }}</option>
                                                    @endif
                                                @else
                                                    <option value="{{ $mun['codigo_municipio'] }}-{{ $mun['nome_municipio'] }}-{{ $mun['geoibgeId'] }}-{{ $mun['geonamesId'] }}-">{{ $mun['nome_municipio'] }}</option>                                                    
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
</form>    
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Código do Município</label>
                                    <input class="form-control" type="text"
                                    @if($flag == 1)
                                        value="{{ $mun_at['codigo_municipio'] }}"
                                    @endif
                                     name="codigo_municipio" readonly>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">geoibgeId</label>
                                    <input class="form-control" type="text"
                                    @if($flag == 1)
                                        value="{{ $mun_at['geoibgeId'] }}"
                                    @endif
                                     name="geoibgeId" readonly>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">geonamesId</label>
                                    <input class="form-control" type="text"
                                    @if($flag == 1)
                                        value="{{ $mun_at['geonamesId'] }}"
                                    @endif
                                     name="geonamesId" readonly>
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
                        <p class="text-uppercase text-sm">Informações Adicionais 2</p>
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