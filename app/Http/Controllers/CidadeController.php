<?php

namespace App\Http\Controllers;

use App\Models\Cidade;
use App\Models\Ordenador;
use App\Models\Orgao;
use App\Models\UnidadeGestora;
use App\Models\UnidadeOrcamentaria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CidadeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $municipios = Cidade::all();
        $orgao = Orgao::all();
        $ordenador = Ordenador::all();
        $unidadeGestora = UnidadeGestora::all();
        $unidadeOrcamentaria = UnidadeOrcamentaria::all();
        return view('cidades.index', ['municipios' => $municipios,
                                      'orgao' => $orgao,
                                      'ordenador' => $ordenador,
                                      'unidadeGestora' => $unidadeGestora,
                                      'unidadeOrcamentaria' => $unidadeOrcamentaria
                                    ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        ///////////////////////////////////////////////////////////////////////
        $api = Http::get('https://api-dados-abertos.tce.ce.gov.br/municipios');
        $api_array = $api['data'];
        ///////////////////////////////////////////////////////////////////////
        //dd($api_array);
        return view('cidades.create', ['flag' => 0, 'municipios' => $api_array, 'msg' => '']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        ///////////////////////////MUNICÍPIOS//////////////////////////////////
        $api = Http::get('https://api-dados-abertos.tce.ce.gov.br/municipios');
        $api_array = $api['data'];
        ///////////////////////////////////////////////////////////////////////
        $mun = $request->municipio;
        $mun = explode("-", $mun);
        ////////////////////////////ORDENADOR//////////////////////////////////
        $api2 = Http::get('https://api-dados-abertos.tce.ce.gov.br/ordenadores?codigo_municipio='.$mun[0].'&exercicio_orcamento='.date('Y').'00');
        $api2_array = $api2['data'];
        //dd($api2_array);
        /////////////////////////////ORGÃO/////////////////////////////////////
        $api3 = Http::get('https://api-dados-abertos.tce.ce.gov.br/orgaos?codigo_municipio='.$mun[0].'&exercicio_orcamento='.date('Y').'00');
        $api3_array = $api3['data'];
        //dd($api3_array);
        ////////////////////////UNIDADE GESTORA////////////////////////////////
        $api4 = Http::get('https://api-dados-abertos.tce.ce.gov.br/unidades_gestoras?codigo_municipio='.$mun[0].'&exercicio_orcamento='.date('Y').'00');
        $api4_array = $api4['data'];
        //dd($api4_array);
        ////////////////////////UNIDADE ORÇAMENTÁRIA///////////////////////////
        $api5 = Http::get('https://api-dados-abertos.tce.ce.gov.br/unidades_orcamentarias?codigo_municipio='.$mun[0].'&exercicio_orcamento='.date('Y').'00&quantidade=50&deslocamento=1');
        $api5_array = $api5['data'];
        //dd($api5_array);
        ///////////////////////////////////////////////////////////////////////
        
        //dd($mun);
        $conferencia = Cidade::where("codigo_municipio", "=", $mun[0])->count();
        //dd($conferencia);
        if($conferencia > 0){
            $municipio_atual = Cidade::all()->where("codigo_municipio", "=", $mun[0]);
            return redirect()->route('cidades.create', ['flag' => 0, 
                                                        'municipios' => $api_array, 
                                                        'msg' => 'Importação realizada anteriormente'
                                                    ]);
        }
        else{
            $municipio = new Cidade;
            $municipio->codigo_municipio = $mun[0];
            $municipio->nome_municipio = $mun[1];
            $municipio->geoibgeId = $mun[2];
            $municipio->geonamesId = $mun[3];
            $municipio->save();

            for($u=0;$u<count($api2_array);$u++){
                $n_dt1 = explode("T", $api2_array[$u]['data_inclusao_unidade_orcamentaria']);
                $data_inclusao_unidade_orcamentaria = $n_dt1[0]." ".substr($n_dt1[1], 0, 8);

                $n_dt2 = explode("T", $api2_array[$u]['data_inicio_gestao_ordenador']);
                $data_inicio_gestao_ordenador = $n_dt2[0]." ".substr($n_dt2[1], 0, 8);

                if($api2_array[$u]['data_fim_gestao_ordenador'] != null){
                $n_dt3 = explode("T", $api2_array[$u]['data_fim_gestao_ordenador']);
                $data_fim_gestao_ordenador = $n_dt3[0]." ".substr($n_dt3[1], 0, 8);
                }else{$data_fim_gestao_ordenador = null;}


            $ord[$u] = new Ordenador;
            $ord[$u]->codigo_municipio = $api2_array[$u]['codigo_municipio'];
            $ord[$u]->exercicio_orcamento = $api2_array[$u]['exercicio_orcamento'];
            $ord[$u]->codigo_unidade_gestora = $api2_array[$u]['codigo_unidade_gestora'];
            $ord[$u]->codigo_orgao = $api2_array[$u]['codigo_orgao'];
            $ord[$u]->codigo_unidade = $api2_array[$u]['codigo_unidade'];
            $ord[$u]->data_referencia_ordenador = $api2_array[$u]['data_referencia_ordenador'];
            $ord[$u]->nome_ordenador = $api2_array[$u]['nome_ordenador'];
            $ord[$u]->data_inclusao_unidade_orcamentaria = $data_inclusao_unidade_orcamentaria;
            $ord[$u]->cpf_servidor = $api2_array[$u]['cpf_servidor'];
            $ord[$u]->codigo_ingresso = $api2_array[$u]['codigo_ingresso'];
            $ord[$u]->codigo_vinculo = $api2_array[$u]['codigo_vinculo'];
            $ord[$u]->numero_expediente_nomeacao = $api2_array[$u]['numero_expediente_nomeacao'];
            $ord[$u]->data_inicio_gestao_ordenador = $data_inicio_gestao_ordenador;
            $ord[$u]->data_fim_gestao_ordenador = $data_fim_gestao_ordenador;
            $ord[$u]->tipo_cargo = $api2_array[$u]['tipo_cargo'];
            $ord[$u]->save();

            }

            for($u=0;$u<count($api3_array);$u++){
            $org[$u] = new Orgao;
            $org[$u]->codigo_municipio = $api3_array[$u]['codigo_municipio'];
            $org[$u]->exercicio_orcamento = $api3_array[$u]['exercicio_orcamento'];
            $org[$u]->codigo_orgao = $api3_array[$u]['codigo_orgao'];
            $org[$u]->nome_orgao = $api3_array[$u]['nome_orgao'];
            $org[$u]->codigo_tipo_unidade = $api3_array[$u]['codigo_tipo_unidade'];
            $org[$u]->cgc_orgao = $api3_array[$u]['cgc_orgao'];
            $org[$u]->save();
            }
            
            for($u=0;$u<count($api4_array);$u++){
                $n_dt4 = explode("T", $api4_array[$u]['data_criacao']);
                $data_criacao = $n_dt4[0]." ".substr($n_dt4[1], 0, 8);
                if($api4_array[$u]['data_extincao'] != null){
                $n_dt5 = explode("T", $api4_array[$u]['data_extincao']);
                $data_extincao = $n_dt5[0]." ".substr($n_dt5[1], 0, 8);
                }else{$data_extincao = null;}


            $ug[$u] = new UnidadeGestora;
            $ug[$u]->codigo_municipio = $api4_array[$u]['codigo_municipio'];
            $ug[$u]->exercicio_orcamento = $api4_array[$u]['exercicio_orcamento'];
            $ug[$u]->codigo_unidade_gestora = $api4_array[$u]['codigo_unidade_gestora'];
            $ug[$u]->data_referencia = $api4_array[$u]['data_referencia'];
            $ug[$u]->nome_unidade_gestora = $api4_array[$u]['nome_unidade_gestora'];
            $ug[$u]->data_criacao = $data_criacao;
            $ug[$u]->data_extincao = $data_extincao;
            $ug[$u]->numero_lei_criacao = $api4_array[$u]['numero_lei_criacao'];
            $ug[$u]->save();
            }

            for($u=0;$u<count($api5_array);$u++){
            $uo[$u] = new UnidadeOrcamentaria;
            $uo[$u]->codigo_municipio = $api5_array[$u]['codigo_municipio'];
            $uo[$u]->exercicio_orcamento = $api5_array[$u]['exercicio_orcamento'];
            $uo[$u]->codigo_orgao = $api5_array[$u]['codigo_orgao'];
            $uo[$u]->codigo_unidade = $api5_array[$u]['codigo_unidade'];
            $uo[$u]->codigo_tipo_unidade = $api5_array[$u]['codigo_tipo_unidade'];
            $uo[$u]->nome_unidade = $api5_array[$u]['nome_unidade'];
            $uo[$u]->tipo_administracao_unidade = $api5_array[$u]['tipo_administracao_unidade'];
            $uo[$u]->save();
            }
            

            $municipio_atual_id = Cidade::max("id");
            $municipio_atual = Cidade::all()->where("id", "=", $municipio_atual_id);
            $unidadeGestora = UnidadeGestora::all()->where("codigo_municipio", "=", $municipio_atual->codigo_municipio);
            $unidadeOrcamentaria = UnidadeOrcamentaria::all()->where("codigo_municipio", "=", $municipio_atual->codigo_municipio);
            $orgao = Orgao::all()->where("codigo_municipio", "=", $municipio_atual->codigo_municipio);
            $ordenador = Ordenador::all()->where("codigo_municipio", "=", $municipio_atual->codigo_municipio);
            return view('cidades.create', ['flag' => 1, 
                                            'municipios' => $api_array, 
                                            'municipio_atual' => $municipio_atual,
                                            'orgao' => $orgao,
                                            'ordenador' => $ordenador,
                                            'unidadeGestora' => $unidadeGestora,
                                            'unidadeOrcamentaria' => $unidadeOrcamentaria
                                        ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cidade  $cidade
     * @return \Illuminate\Http\Response
     */
    public function show(Cidade $cidade)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cidade  $cidade
     * @return \Illuminate\Http\Response
     */
    public function edit(Cidade $cidade)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cidade  $cidade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cidade $cidade)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cidade  $cidade
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cidade $cidade)
    {
        //
    }
}
