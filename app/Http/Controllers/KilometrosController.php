<?php

namespace App\Http\Controllers;

use App\kilometros;
//use App\Vehiculos;
//use App\Clientes;
//use App\Conductor;
use App\Tipos;
use App\Combustibles;
use App\Oficinas;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class KilometrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($Patente)
    {
        
      

        
       $datosvehiculos = DB::select(DB::raw("select * from vehiculos, clientes, conductores, tiposclientes'"));
      // $datosclientes['$datosvehiculos'] = DB::select(DB::raw("select * from clientes"));
      

       return view('kilometros.index', [
       
        'datosvehiculos'=>$datosvehiculos,
        //'datosclientes'=>$datosclientes,
       
        ]);


      
    }
    public function ContratoConductor($Patente, $rutCliente, $NombreConductor)
    {
        
        $tipos=Tipos::get();
        $combustibles=Combustibles::get();
        $oficinas=Oficinas::get();

        
       $datosv = DB::select(DB::raw("select * from vehiculos where (Patente = '$Patente')"));
       $datoscl = DB::select(DB::raw("select * from clientes where (rutCliente = '$rutCliente')"));
       $datosco = DB::select(DB::raw("select * from conductores where (NombreConductor = '$NombreConductor')"));
       

       return view('clientes.arriendo', [
             
        'tipos' => $tipos,
        'combustibles' => $combustibles,
        'datosv'=>$datosv,
        'datoscl'=>$datoscl,
        'datosc'=>$datosco,
        'oficinas'=>$oficinas,
        ]);


      
    }


    public function registrarContratoKilometros($Patente, $rutCliente, $NombreConductor)
    {
        
        $tipos=Tipos::get();
        $combustibles=Combustibles::get();
        $oficinas=Oficinas::get();

        
       $datosv = DB::select(DB::raw("select * from vehiculos where (Patente = '$Patente')"));
       $datoscl = DB::select(DB::raw("select * from clientes where (rutCliente = '$rutCliente')"));
       $datosco = DB::select(DB::raw("select * from conductores where (NombreConductor = '$NombreConductor')"));
       

       return view('kilometros.create', [
             
        'tipos' => $tipos,
        'combustibles' => $combustibles,
        'datosv'=>$datosv,
        'datoscl'=>$datoscl,
        'datosc'=>$datosco,
        'oficinas'=>$oficinas,
        ]);


      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('kilometros.create');
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
            'Entrada' => 'required|string|max:100',
            'Salida' => 'required|string|max:100',
           // 'TipoVehiculo' => 'required|string|max:100',
            //'id_vehiculo' => 'required|string|max:100',
            //'id_cliente' => 'required|string|max:100',
            //'id_conductor' => 'required|string|max:100',
            //'Marca' => 'required|string|max:100',
            //'Modelo' => 'required|string|max:100',
            //'Patente' => 'required|string|max:100',
            //'Estado' => 'required|string|max:100',
    ];

    $Mensaje=["required" => 'El :attribute es requerido'];

    $this->validate($request, $campos, $Mensaje);

    $datosKilometro=request()->except('_token');

    Kilometros::Insert($datosKilometro);

    return redirect('kilometros')->with('Mensaje', 'Kilometraje agregado al inventario');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\kilometros  $kilometros
     * @return \Illuminate\Http\Response
     */
    public function show(kilometros $kilometros)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\kilometros  $kilometros
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $kilometro = Kilometros::findOrFail($id);
        return view('kilometros.edit', compact('kilometro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\kilometros  $kilometros
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $campos=[
            'Entrada' => 'required|string|max:100',
            'Salida' => 'required|string|max:100',
           // 'TipoVehiculo' => 'required|string|max:100',
            //'id_vehiculo' => 'required|string|max:100',
            //'id_cliente' => 'required|string|max:100',
            //'id_conductor' => 'required|string|max:100',
            //'Marca' => 'required|string|max:100',
            //'Modelo' => 'required|string|max:100',
            //'Patente' => 'required|string|max:100',
            
            //'Estado' => 'required|string|max:100',
           
    ];
    
    $Mensaje=["required" => 'El :attribute es requiredo'];
        $this->validate($request, $campos, $Mensaje);
        $datosKilometro=request()->except(['_token','_method']);

        
        //$estado = "Disponible";
        Kilometros::where('id','=', $id)->update($datosKilometro);
        return redirect('kilometros')->with('Mensaje','Se guardaron cambios en el kilometraje ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\kilometros  $kilometros
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
          //
          $kilometro= Kilometros::findOrFail($id);
          
  
          return redirect('kilometros')->with('Mensaje','Vehículo Eliminado');
    }
}
