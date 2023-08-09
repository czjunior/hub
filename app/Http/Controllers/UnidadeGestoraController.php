<?php

namespace App\Http\Controllers;

use App\Models\UnidadeGestora;
use Illuminate\Http\Request;
use App\Models\Cidade;
use App\Models\Ordenador;
use App\Models\Orgao;
use App\Models\UnidadeOrcamentaria;
use Illuminate\Support\Facades\Http;


class UnidadeGestoraController extends Controller
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
        //
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

    public function show2(Request $request)
    {
        //
        $id = $request->codigo_municipio;
        $municipios = Cidade::all()->where('codigo_municipio', '=', $id);
        $orgao = Orgao::all()->where('codigo_municipio', '=', $id);
        $ordenador = Ordenador::all()->where('codigo_municipio', '=', $id);
        $unidadeGestora = UnidadeGestora::all()->where('codigo_municipio', '=', $id);
        $unidadeOrcamentaria = UnidadeOrcamentaria::all()->where('codigo_municipio', '=', $id);
        return view('unidadeGestoras.index', ['municipios' => $municipios,
                                      'orgaos' => $orgao,
                                      'ordenador' => $ordenador,
                                      'unidadeGestora' => $unidadeGestora,
                                      'unidadeOrcamentaria' => $unidadeOrcamentaria
                                    ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UnidadeGestora  $unidadeGestora
     * @return \Illuminate\Http\Response
     */
    public function show(UnidadeGestora $unidadeGestora)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UnidadeGestora  $unidadeGestora
     * @return \Illuminate\Http\Response
     */
    public function edit(UnidadeGestora $unidadeGestora)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UnidadeGestora  $unidadeGestora
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UnidadeGestora $unidadeGestora)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UnidadeGestora  $unidadeGestora
     * @return \Illuminate\Http\Response
     */
    public function destroy(UnidadeGestora $unidadeGestora)
    {
        //
    }
}
