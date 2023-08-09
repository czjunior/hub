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