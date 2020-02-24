<?php

namespace App\Http\Controllers;

use App\Clientes;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datosCliente['clientes']=Clientes::paginate(10);
        return view('clientes.index',$datosCliente);
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
        $campos=[
                'RutCliente' => 'required|string|max:100',
                'NombreCliente' => 'required|string|max:100',
                'ApellidoPaterno' => 'required|string|max:100',
                'ApellidoMaterno' => 'required|string|max:100',
                'DireccionCliente' => 'required|string|max:100',
                //'DireccionComercial' => 'required|string|max:100',
                //'CiudadComercial' => 'required|string|max:100',
                'CiudadCliente'  => 'required|string|max:100',
                'FechaNacimientoCliente' => 'required|string|max:100',
                //'Combustible' => 'required|string|max:100',
                'TelefonoCliente' => 'required|string|max:100',
                'CorreoCliente' => 'required|string|max:100',
                'Foto' => 'required|max:10000|mimes:jpeg,png,jpg',
        ];

        $Mensaje=["required" => 'El :attribute es requerido'];

        $this->validate($request, $campos, $Mensaje);
        
        $datosCliente=request()->except('_token');

        if($request->hasFile('Foto')){
            $datosCliente['Foto']=$request->file('Foto')->store('uploads','public');
        }

        Clientes::Insert($datosCliente);
        return redirect('clientes')->with('Mensaje', 'Vehículo agregado al inventario');

//        return response()->json($datosVehiculo);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function show(Clientes $clientes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function edit(Clientes $clientes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Clientes $clientes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Clientes $clientes)
    {
        //
    }
}
