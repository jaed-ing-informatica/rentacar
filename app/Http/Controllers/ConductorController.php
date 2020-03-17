<?php

namespace App\Http\Controllers;

use App\Conductor;
use Illuminate\Http\Request;

class ConductorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $datosconductor['datosconductor']=Conductor::paginate(50);
        return view('conductores.index',$datosconductor);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('conductores.create');
    
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
            'RutConductor' => 'required|string|max:100',
            'NombreConductor' => 'required|string|max:100',
            'LicenciaClase' => 'required|string|max:100',
            'LicenciaNumero' => 'required|string|max:100',
            'LicenciaVencimiento' => 'required|string|max:100',
            'LicenciaMunicipalidad' => 'required|string|max:100',
            'TelefonoConductor' => 'required|string|max:100',
            'DireccionConductor'  => 'required|string|max:100',
            'Foto' => 'required|max:10000|mimes:jpeg,png,jpg',
            //'Estado' => 'required|string|max:100',
    ];
     
     //$estado= "Didsponible";
    $Mensaje=["required" => 'El :attribute es requerido'];

    $this->validate($request, $campos, $Mensaje);
   
    $datosConductor=request()->except('_token');
    //$datosVehiculo=request()->Estado('Disponible');

    if($request->hasFile('Foto')){
        $datosConductor['Foto']=$request->file('Foto')->store('uploads','public');
        
    }
    

    Conductor::Insert($datosConductor);
    return redirect('conductores')->with('Mensaje', 'Condcutor agregado al sistema');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Conductor  $conductor
     * @return \Illuminate\Http\Response
     */
    public function show(Conductor $conductor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Conductor  $conductor
     * @return \Illuminate\Http\Response
     */
    public function edit(Conductor $conductor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Conductor  $conductor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Conductor $conductor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Conductor  $conductor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Conductor $conductor)
    {
        //
    }
}
