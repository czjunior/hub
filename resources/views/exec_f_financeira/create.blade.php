@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Execução Físico Financeira'])
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <form role="form" method="POST" action="{{ route('exec_f_financeira-store') }}">
                    @csrf
                    @method('post')
                    <div class="card-header pb-0">
                        <div class="d-flex align-items-center">
                            <p class="mb-0">Cadastro</p>
                            <button class="btn btn-primary btn-sm ms-auto">Cadastrar</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="text-uppercase text-sm">Informações da Execução</p>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Cód. Item Plano de Trabalho</label>
                                    <input class="form-control" type="text" name="cod_item_pt" id="cod_item_pt">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Item do Plano de Trabalho</label>
                                    <input class="form-control" type="text" name="item_pt" id="item_pt">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Valor Item Plano de Trabalho</label>
                                    <input class="form-control" type="text" name="vlr_item_pt" id="vlr_item_pt">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Saldo para Aquisição</label>
                                    <input class="form-control" type="text" name="saldo_p_aquisicao" id="saldo_p_aquisicao">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Processo de Aquisição</label>
                                    <input class="form-control" type="text" name="processo_aquisicao" id="processo_aquisicao">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Item Processo de Aquisição</label>
                                    <input class="form-control" type="text" name="item_processo_aquisicao" id="item_processo_aquisicao">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Valor Item Processo de Aquisição</label>
                                    <input class="form-control" type="text" name="vlr_item_pa" id="vlr_item_pa">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Saldo Contratação</label>
                                    <input class="form-control" type="text" name="saldo_contratacao" id="saldo_contratacao">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Num. Contratação</label>
                                    <input class="form-control" type="text" name="num_contratacao" id="num_contratacao">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Item Contratação</label>
                                    <input class="form-control" type="text" name="item_contratacao" id="item_contratacao">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Valor Item Contratação</label>
                                    <input class="form-control" type="text" name="vlr_item_contratacao" id="vlr_item_contratacao">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Saldo Liquidação</label>
                                    <input class="form-control" type="text" name="saldo_liquidacao" id="saldo_liquidacao">
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