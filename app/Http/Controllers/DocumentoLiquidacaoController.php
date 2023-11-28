<?php

namespace App\Http\Controllers;

use App\Models\Documento_liquidacao;
use Illuminate\Http\Request;

class DocumentoLiquidacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('documento_liquidacao.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Documento_liquidacao  $documento_liquidacao
     * @return \Illuminate\Http\Response
     */
    public function show(Documento_liquidacao $documento_liquidacao)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Documento_liquidacao  $documento_liquidacao
     * @return \Illuminate\Http\Response
     */
    public function edit(Documento_liquidacao $documento_liquidacao)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Documento_liquidacao  $documento_liquidacao
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Documento_liquidacao $documento_liquidacao)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Documento_liquidacao  $documento_liquidacao
     * @return \Illuminate\Http\Response
     */
    public function destroy(Documento_liquidacao $documento_liquidacao)
    {
        //
    }
}
