<?php

namespace App\Http\Controllers;

use App\Relbase;
use Illuminate\Http\Request;

class RelbaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('relbase/facturas');
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
     * @param  \App\Relbase  $relbase
     * @return \Illuminate\Http\Response
     */
    public function show(Relbase $relbase)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Relbase  $relbase
     * @return \Illuminate\Http\Response
     */
    public function edit(Relbase $relbase)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Relbase  $relbase
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Relbase $relbase)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Relbase  $relbase
     * @return \Illuminate\Http\Response
     */
    public function destroy(Relbase $relbase)
    {
        //
    }
}
