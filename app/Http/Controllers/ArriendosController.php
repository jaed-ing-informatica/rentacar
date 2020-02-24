<?php

namespace App\Http\Controllers;

use App\Arriendos;
use Illuminate\Http\Request;

class ArriendosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 
        $datosArriendo['arriendos']=Arriendos::paginate(10);
        return view('arriendos.index',$datosArriendo);
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
     * @param  \App\Arriendos  $arriendos
     * @return \Illuminate\Http\Response
     */
    public function show(Arriendos $arriendos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Arriendos  $arriendos
     * @return \Illuminate\Http\Response
     */
    public function edit(Arriendos $arriendos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Arriendos  $arriendos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Arriendos $arriendos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Arriendos  $arriendos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Arriendos $arriendos)
    {
        //
    }
}
