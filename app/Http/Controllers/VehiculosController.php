<?php

namespace App\Http\Controllers;

use App\Vehiculos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class VehiculosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datosVehiculo['vehiculos']=Vehiculos::paginate(50);
        return view('vehiculos.index',$datosVehiculo);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('vehiculos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * 
     */
    public function store(Request $request)
    {
        //
        $campos=[
                'Rut' => 'required|string|max:100',
                'Propietario' => 'required|string|max:100',
                'TipoVehiculo' => 'required|string|max:100',
                'Marca' => 'required|string|max:100',
                'Modelo' => 'required|string|max:100',
                'Patente' => 'required|string|max:100',
                'Año' => 'required|string|max:100',
                'Color'  => 'required|string|max:100',
                'NumeroChasis' => 'required|string|max:100',
                'Combustible' => 'required|string|max:100',
                'Foto' => 'required|max:10000|mimes:jpeg,png,jpg',
                //'Estado' => 'required|string|max:100',
        ];
         
         //$estado= "Didsponible";
        $Mensaje=["required" => 'El :attribute es requerido'];

        $this->validate($request, $campos, $Mensaje);
       
        $datosVehiculo=request()->except('_token');
        //$datosVehiculo=request()->Estado('Disponible');

        if($request->hasFile('Foto')){
            $datosVehiculo['Foto']=$request->file('Foto')->store('uploads','public');
            
        }
        

        Vehiculos::Insert($datosVehiculo);
        return redirect('vehiculos')->with('Mensaje', 'Vehículo agregado al inventario');

//        return response()->json($datosVehiculo);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Vehiculos  $vehiculos
     * @return \Illuminate\Http\Response
     */
    public function show(Vehiculos $vehiculos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vehiculos  $vehiculos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $vehiculo = Vehiculos::findOrFail($id);
        return view('vehiculos.edit', compact('vehiculo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vehiculos  $vehiculos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $campos=[
            'Rut' => 'required|string|max:100',
            'Propietario' => 'required|string|max:100',
            'TipoVehiculo' => 'required|string|max:100',
            'Marca' => 'required|string|max:100',
            'Modelo' => 'required|string|max:100',
            'Patente' => 'required|string|max:100',
            'Año' => 'required|string|max:100',
            'Color'  => 'required|string|max:100',
            'NumeroChasis'  => 'required|string|max:100',
            'Combustible' => 'required|string|max:100',
    ];
    if($request->hasFile('Foto')){
        $campos+=['Foto'=>'required|max:10000|mimes:jpeg,png,jpg'];
    }
    $Mensaje=["required" => 'El :attribute es requiredo'];
        $this->validate($request, $campos, $Mensaje);
        $datosVehiculo=request()->except(['_token','_method']);

        if($request->hasFile('Foto')){
            $vehiculo= Vehiculos::findOrFail($id);
            Storage::delete(['public/'.$vehiculo->Foto]);
            $datosVehiculo['Foto']=$request->file('Foto')->store('uploads','public');
        }
        //$estado = "Disponible";
        Vehiculos::where('id','=', $id)->update($datosVehiculo);
        return redirect('vehiculos')->with('Mensaje','Se guardaron cambios en el vehículo ');

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vehiculos  $vehiculos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $vehiculo= Vehiculos::findOrFail($id);
        if(Storage::delete('public/'.$vehiculo->Foto)){
            Vehiculos::destroy($id);
        }

        return redirect('vehiculos')->with('Mensaje','Vehículo Eliminado');
    }
}
