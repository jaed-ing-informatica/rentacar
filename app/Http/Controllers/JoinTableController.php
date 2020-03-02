<?php

namespace App\Http\Controllers;

use App\joinTable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JoinTableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = DB::table('provincias')
        ->join('regiones','regiones.id', '=', 'provincias.region_id')
        
       // ->join('provincias', 'provincias.region_id', '=', 'regiones.id')

        ->join('comunas', 'comunas.provincia_id', '=', 'provincias.id')

        ->select('comunas.comuna', 'regiones.region', 'provincias.provincia')
        ->get();
        return view('join_table', compact('data'));
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

    /**
     * Display the specified resource.
     *
     * @param  \App\joinTable  $joinTable
     * @return \Illuminate\Http\Response
     */
    public function show(joinTable $joinTable)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\joinTable  $joinTable
     * @return \Illuminate\Http\Response
     */
    public function edit(joinTable $joinTable)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\joinTable  $joinTable
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, joinTable $joinTable)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\joinTable  $joinTable
     * @return \Illuminate\Http\Response
     */
    public function destroy(joinTable $joinTable)
    {
        //
    }
}
