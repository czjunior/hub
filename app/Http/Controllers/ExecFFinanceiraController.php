<?php

namespace App\Http\Controllers;

use App\Models\Exec_f_financeira;
use Illuminate\Http\Request;

class ExecFFinanceiraController extends Controller
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
        return view('exec_f_financeira.create');
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
     * @param  \App\Models\Exec_f_financeira  $exec_f_financeira
     * @return \Illuminate\Http\Response
     */
    public function show(Exec_f_financeira $exec_f_financeira)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Exec_f_financeira  $exec_f_financeira
     * @return \Illuminate\Http\Response
     */
    public function edit(Exec_f_financeira $exec_f_financeira)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Exec_f_financeira  $exec_f_financeira
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Exec_f_financeira $exec_f_financeira)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Exec_f_financeira  $exec_f_financeira
     * @return \Illuminate\Http\Response
     */
    public function destroy(Exec_f_financeira $exec_f_financeira)
    {
        //
    }
}
