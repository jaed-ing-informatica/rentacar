<?php

namespace App\Http\Controllers;

use App\Clientes;
use App\Vehiculos;
use App\Tipos;
use App\Combustibles;
use App\Oficinas;
use App\TipoCliente;
use App\MedioPago;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

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

       
        
        //->select('marcas.NombreMarca', 'modelos.NombreModelo')
        //->get();
 
        //$marcas = Marcas::pluck('NombreMarca', 'id_marca')->prepend('Selecciona Marca');
         
        // $modelos = Modelos::get();
       /*  $tipos=Tipos::get();
         $combustibles=Combustibles::get();
         $oficinas=Oficinas::get();
 
         
        $datos = DB::select(DB::raw("select * from vehiculos,clientes where (Patente = '$Patente')"));*/
       // $datos = DB::select(DB::raw("select Marca, Patente, Modelo, id_vehiculo from vehiculos where Patente = $Patente","select id_cliente, NombreCliente from clientes where Patente = $Patente");
       // dd($datos);
       // $datos['datos'] = DB::table('vehiculos')          
       // ->join('clientes','clientes.id_cliente', '=', 'clientes.id_cliente')
       // ->join('modelos','modelos.id_marca', '=', 'marcas.id_marca')
       // ->select('vehiculos.Marca','vehiculos.Patente','vehiculos.Modelo','vehiculos.id_vehiculo')
       // ->where('Patente','=',$Patente)
       // ->get();
       // dd($datos);
        //DB::table('arriendos')->insert(['id_vehiculo' => '$vehiculos->id_vehiculo']);
        
       // $datos->estado = 'Arrendado';
       //dd($datos);
       $datosTiposClientes['datosTiposClientes']= TipoCliente::get();
       $mediopago['mediopago']= MedioPago::get();
        return view('clientes.create', $mediopago, $datosTiposClientes);
        //return view('clientes.create',$datos);
       /* return view('clientes.create', [
             
            'tipos' => $tipos,
            'combustibles' => $combustibles,
            'datos'=>$datos,
            'oficinas'=>$oficinas,
           // 'estados' => $estados,
            //'ciudades' => $ciudades,
            //'puestos' => $puestos,
        ]);*/
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

    public function registraContrato(Request $request, $Patente)
    {

        $tipos=Tipos::get();
        $combustibles=Combustibles::get();
        $oficinas=Oficinas::get();
        $datosTiposClientes=TipoCliente::get();

        
       $datosvehiculos = DB::select(DB::raw("select * from vehiculos where (Patente = '$Patente')"));
       $datosclientes = DB::select(DB::raw("select * from clientes"));

       return view('clientes.arriendo', [
             
        
        'datosvehiculos'=>$datosvehiculos,
        'datosclientes'=>$datosclientes,
        'tipos' => $tipos,
        'combustibles' => $combustibles,
        'oficinas'=>$oficinas,
        'datosTiposClientes' =>$datosTiposClientes,
       // 'estados' => $estados,
        //'ciudades' => $ciudades,
        //'puestos' => $puestos,
    ]);
        
    
}

        //sistematologías propias del virus
        //provenienncia de regiones de sospecha o contagio
        //facilitar todo para someter al trabajador a protocolos medicos gastos asumidos por el empleador
//todo lo relacionado de proteger la vida y salud de los trabajadores
//responsable de.. no obstante de fuera de lugar de trabajo informatico o computacional la empresa tiene que hacerse cargo
        //Deben Activar ley de  protocolos  de accidentes
        
    

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
    //public function Contrato($id)
    //{
      //  $datosVehiculo = request();
        //Kilometros::Insert('insert into Kilometros (id_vehiculo) values ($id)');
       // Vehiculos::Insert();
        //return redirect('clientes');
    //}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function edit(Clientes $clientes,$id)
    {
        //
        
        return view('clientes.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Clientes $clientes,$id)
    {
        //
        $campos=[
            'RutCliente' => 'required|string|max:100',
            'NombreCliente' => 'required|string|max:100',
            'ApellidoPaterno' => 'required|string|max:100',
            'ApellidoMaterno' => 'required|string|max:100',
            'DireccionCliente' => 'required|string|max:100',
            'DireccionComercial' => 'required|string|max:100',
            'CiudadCliente' => 'required|string|max:100',
            'CiudadComercial'  => 'required|string|max:100',
            'FechaNacimientoCliente'  => 'required|string|max:100',
            'TelefonoCliente' => 'required|string|max:100',
            'CorreoCliente' => 'required|string|max:100',
    ];
    if($request->hasFile('Foto')){
        $campos+=['Foto'=>'required|max:10000|mimes:jpeg,png,jpg'];
    }
    $Mensaje=["required" => 'El :attribute es requiredo'];
        $this->validate($request, $campos, $Mensaje);
        $datosCliente=request()->except(['_token','_method']);

        if($request->hasFile('Foto')){
            $cliente= Clientes::findOrFail($id);
            Storage::delete(['public/'.$cliente->Foto]);
            $datosCliente['Foto']=$request->file('Foto')->store('uploads','public');
        }
        //$estado = "Disponible";
        Clientes::where('id_cliente','=', $id)->update($datosCliente);
        return redirect('clientes')->with('Mensaje','Se guardaron cambios en el cliente ');
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
