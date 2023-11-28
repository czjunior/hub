@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Documento de Liquidação'])
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <form role="form" method="POST" action="{{ route('documento_liquidacao-store') }}">
                    @csrf
                    @method('post')
                    <div class="card-header pb-0">
                        <div class="d-flex align-items-center">
                            <p class="mb-0">Cadastro</p>
                            <button class="btn btn-primary btn-sm ms-auto">Cadastrar</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="text-uppercase text-sm">Informações do Documento de Liquidação</p>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Item</label>
                                    <input class="form-control" type="text" value="Cód, Item, Vlr" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Número Doc. Liquidação</label>
                                    <input class="form-control" type="text" name="num_doc_liquidacao" id="num_doc_liquidacao">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Item Doc. Liquidação</label>
                                    <input class="form-control" type="text" name="item_doc_liq" id="item_doc_liq">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Valor Item Doc. Liquidação</label>
                                    <input class="form-control" type="text" name="vlr_item_doc_liq" id="vlr_item_doc_liq">
                                </div>
                            </div>
                        </div>
                        <hr class="horizontal dark">
                    </div>
                    </form>
                </div>
            </div>
        </div>
        @include('layouts.footers.auth.footer')
    </div>
@endsection