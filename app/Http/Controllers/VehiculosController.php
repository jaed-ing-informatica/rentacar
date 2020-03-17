<?php

namespace App\Http\Controllers;

use App\Vehiculos;
use App\Tipos;
use App\Combustibles;
use App\Marcas;
use App\Modelos;
use App\Oficinas;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;


class VehiculosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $users = DB::table('users')->get();

        //return view('user.index', ['users' => $users]);
        
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
        //()
     //   if ($request->ajax()){
            
            //$modelosArray[''] = 'Selecciona una modelo';
           // foreach($modelos as $modelo) {
             //   $modelos[$modelo->id_marca] = $modelo->NombreModelo;
            //}
     //   response()->json($modelosArray);
        //return response()->json($modelosArray);
   // }
        
       // $marcasArray[''] = 'Selecciona una marca';
       // foreach ($marcas as $marca) {
      //      $marcas[$marca->id_marca] = $marca->NombreMarca;
      //  }
        //return $marcasArray;

       // $datosmarcas=Marcas::get();

       $data = DB::table('modelos')
       ->join('marcas','marcas.id_marca', '=', 'modelos.id_marca')
       ->select('marcas.NombreMarca', 'modelos.NombreModelo')
       ->get();

       //$marcas = Marcas::pluck('NombreMarca', 'id_marca')->prepend('Selecciona Marca');
        
       // $modelos = Modelos::get();
        $tipos=Tipos::get();
        $combustibles=Combustibles::get();
        $oficinas=Oficinas::get();

        return view('vehiculos.create', [
            
            'tipos' => $tipos,
            'combustibles' => $combustibles,
            'data'=>$data,
            'oficinas'=>$oficinas,
           // 'estados' => $estados,
            //'ciudades' => $ciudades,
            //'puestos' => $puestos,
        ]);
        //return view('vehiculos.create',compact('marcas','modelos','tipos','combustibles', $marcas, $modelos, $tipos, $combustibles));
        //$marcas = Marcas::where('id_marca', $request->id_marca)->get();
        
        //->join('modelos', 'modelos.id_marca', '=', 'marcas.id_marca');
        //->join('modelos', 'modelos.id_marca', '=', 'marcas.id_marca');
        // $modelos = Modelos::where('id_marca', $request->id_marca)->get()
        
       // $modelos = Modelos::get();
      //  ->join('marcas', 'marcas.id_marca', '=', 'modelos.id_marca')
        //->select('*')
        //->where('marcas.id_marca', '=', 'modelos.id_marca')
        //->get();
        
        //$datosmodelos=Modelos::get();

        //$datos['tipos']=Tipos::get();
        
       
        //$datos['combustibles']=Combustibles::get();
        //error_log(Marcas::get());

       
        
    }
    /*
    public function getModelos(Request $request)
    {
        if ($request->ajax()){
            $modelos = Modelos::where('id_marca', $request->id_marca)->get();
            foreach($modelos as $modelo) {
                $modelosArray[$modelo->id_marca] = $modelo->NombreModelo;
        }
        return response()->json($modelosArray);
    }*/

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * 
     */
    public function buscarLocalidad()
        {
            $q = trim(\request('marcas'));
            $results = Marcas::where('NombreMarca', 'LIKE', '%' . $q . '%')->take(15)->get();

           // return Response::json($results);
        }
    public function store(Request $request)
    {
        

        
     //   $data = DB::table('provincias')
    //    ->join('regiones','regiones.id', '=', 'provincias.region_id')
        
       // ->join('provincias', 'provincias.region_id', '=', 'regiones.id')

     //   ->join('comunas', 'comunas.provincia_id', '=', 'provincias.id')

   //     
 //       ->get();
       // return view('join_table', compact('data'));
        //
        /*  
        
        DB::table('users')->insert([
            ['email' => 'taylor@example.com', 'votes' => 0],
            ['email' => 'dayle@example.com', 'votes' => 0]
        ]);

        $latestPosts = DB::table('posts')
                   ->select('user_id', DB::raw('MAX(created_at) as last_post_created_at'))
                   ->where('is_published', true)
                   ->groupBy('user_id');

        $users = DB::table('users')
                ->joinSub($latestPosts, 'latest_posts', function ($join) {
                    $join->on('users.id', '=', 'latest_posts.user_id');
                })->get();
        DB::table('users')
        ->join('contacts', function ($join) {
            $join->on('users.id', '=', 'contacts.user_id')
                 ->where('contacts.user_id', '>', 5);
        })
        ->get();

        DB::table('users')
        ->join('contacts', function ($join) {
            $join->on('users.id', '=', 'contacts.user_id')->orOn(...);
        })
        ->get();
        $users = DB::table('sizes')
            ->crossJoin('colours')
            ->get();

        $users = DB::table('users')
            ->leftJoin('posts', 'users.id', '=', 'posts.user_id')
            ->get();

        $users = DB::table('users')
                    ->rightJoin('posts', 'users.id', '=', 'posts.user_id')
                    ->get();
        $users = DB::table('users')
        ->join('contacts', 'users.id', '=', 'contacts.user_id')
        ->join('orders', 'users.id', '=', 'orders.user_id')
        ->select('users.*', 'contacts.phone', 'orders.price')
        ->get();

            $select = Vehiculos::join('vehiculos', function ($join) {
                $join->on('vehiculos.id_vehiculo', '=', 'propietarios.id_propietario');
                $join->on('customer.CustomerCode',
                            'rootplan_product.CustomerCode');
            })->join('invoice', 'invoice.CustomerCode', '=', 
                        'customer.CustomerCode')
            ->select(['customer.CustomerCode','customer.RouteCode', 
                        'TEMP', 'rootplan_product.RouteplanCode', 
                        'invoice.Status'])
            ->where('invoice.Status','DOWNLOADED')
            ->whereIn('customer.RouteCode', $RouteCode)
            ->get();

            $bindings = $select->getBindings();
            $insertQuery = 'insert into rootplan_product 
                (CustomerCode,RouteCode,STATUS)'. $select->toSql();
            DB::insert($insertQuery, $bindings);

            DB::table('orders')->insert(                        
  array(
    'price'   => 200, // Set a value for the column “price” 
    'product' => 'Console' // Set a value for the column “product”
    )
);

// Create a model definition for the table “users” indicating its 
// relationship to the “orders” table

// app/models/User.php
class User extends Eloquent {
  public function orders()
  {
    return $this->hasMany('Order');
  }
}

// Create a model definition for the table “orders”
// app/models/Order.php
class Order extends Eloquent {}                     

// application code

// Create a new row in “users” table
$user = new User;                               
$user->name = "John Doe";                           
$user->save();                              

// Create a new row in “orders” table and link it to the user
$order = new Order;                             
$order->price   = 100;                          
$order->product = "TV";                         

$user->orders()->save($order);

// Tell the Query Builder to target all rows with column ‘price’ set to more than 50 in 
// table “orders”
DB::table('orders')
  ->where('price','>','50')
  ->update(array('price' => 100)); // Update column ‘price’ with a new value
        
        */
        
     /*   $select = Vehiculos::insert('vehiculos')
            ->join->on('vehiculos.id_vehiculo', '=', 'propietarios.id_propietario')
            ->join->on('vehiculos.id_vehiculo','=','tiposvehiculos.id_tipovehiculo')
       
        
        //->where('invoice.Status','DOWNLOADED')
        
        ->get();

        $bindings = $select->getBindings();
        $insertQuery = 'insert into vehiculos as v, propietarios as p, tiposvehiculos as tv
            (p.NombrePropietario,p.RutPropietario,p.DireccionPropietario,v.Patente,v.PrecioDiarioRenta,v.PrecioMensualRenta,v.PrecioQuincenalrenta,v.PrecioSemanalRenta,v.Descripcion,
            tv.NumeroPuertas,
            tv.NumeroAsientos,
            tv.CapacidadMaleta,
            tv.Marca,
            tv.Modelo,
            v.Año,
            v.Color,
            v.NumeroChasis,
            tv.Combustible,
            v.Foto)'. $select->toSql();
        DB::insert($insertQuery, $bindings);



        $data = DB::table('vehiculos as v, propietarios as p, tiposvehiculos as tv')
        ->join('vehiculos','v.id_vehiculo', '=', 'p.id_propietario')
        ->join('vehiculos','v.id_vehiculo', '=', 'tv.id_tipovehiculo')
        ->select('p.NombrePropietario', 'p.DireccionPropietario', 'p.RutPropietario')
        ->select('tv.NombrePropietario', 'tv.DireccionPropietario', 'tv.RutPropietario')
        ->where('p.id', '=', 1)
        ->where('tv.id', '=', 1)
        ->get();
        DB::insert($data);
         //dd('$data');
         //$estado= "Didsponible";
         
         $estado = $request->input('estado', '1');
         */
        $campos=[

            'RutPropietario' => 'required|string|max:100',
            'NombrePropietario' => 'required|string|max:100',
            'DireccionPropietario' => 'required|string|max:100',
            //'TipoVehiculo' => 'required|string|max:100',
            //'Descripcion' => 'required|string|max:100',
            'NumeroPuertas' => 'required|string|max:100',
            'NumeroAsientos' => 'required|string|max:100',
            'CapacidadMaleta' => 'required|string|max:100',
            //'Marca' => 'required|string|max:100',

            
            'PrecioDiarioRenta' => 'required|string|max:100',
            'PrecioMensualRenta' => 'required|string|max:100',
            'PrecioSemanalRenta' => 'required|string|max:100',
            'PrecioQuincenalRenta' => 'required|string|max:100',
            
            'Patente' => 'required|string|max:100',
            'Año' => 'required|string|max:100',
            'Color'  => 'required|string|max:100',
            'NumeroChasis' => 'required|string|max:100',
           // 'id_combustible' => 'required|integer',
            //'Estado' => 'required|string|max:100',
            // 'Modelo' => 'required|string|max:100',
            'Foto' => 'required|max:10000|mimes:jpeg,png,jpg',
              
        ];
        /*
        $NombrePropietario = $request->input('NombrePropietario');
        $NombrePropietario = $request->input('Patente');
        $NombrePropietario = $request->input('PrecioDiarioRenta');
        $NombrePropietario = $request->input('PrecioMensualRenta');
        $NombrePropietario = $request->input('PrecioSemanalRenta');
        $NombrePropietario = $request->input('PrecioQuincenalRenta');
        $NombrePropietario = $request->input('RutPropietario');
        $NombrePropietario = $request->input('DireccionPropietario');
        $NombrePropietario = $request->input('TipoVehiculo');
        $NombrePropietario = $request->input('Descripcion');
        $NombrePropietario = $request->input('NumeroPuertas');
        $NombrePropietario = $request->input('NumeroAsientos');
        $NombrePropietario = $request->input('CapacidadMaleta');
        $NombrePropietario = $request->input('Marca');
        $NombrePropietario = $request->input('Modelo');
        $NombrePropietario = $request->input('Año');
        $NombrePropietario = $request->input('Color');
        $NombrePropietario = $request->input('NumeroChasis');
        $NombrePropietario = $request->input('Combustible');
        $NombrePropietario = $request->input('Foto');

$user->events()->where('status', 'ACTIVE')->get();


         $data = DB::table('propietarios');
         DB::insert($data);
         
         
         Eloquent Models
class User {
  public function profile() {
    return $this -> hasOne(Profile::class);
  }
}
class Profile {
  public function user() {
    return $this -> belongsTo(User::class);
  }
}
PHP
Database Migrations
Schema::create('users', function(Blueprint $table) {
   $table -> increments('id');
   $table -> string('name');
 });
 Schema::create('profiles', function(Blueprint $table) {
   $table -> increments('id');
   $table -> string('name');
   $table -> integer('user_id') -> unsigned() -> index() - > nullable();
   $table -> foreign('user_id') -> references('id') -> on('users');
 });
         */
    //    $vehiculo =Propietarios::findOrFail($id);
 
    //    $vehiculo->Patente = request('Patente');
    //    $vehiculo->Description = request('Description');
 
    //    $vehiculo->save();
 
    //    return redirect('/vehiculos');

        $Mensaje=["required" => 'El :attribute es requerido'];

            $this->validate($request, $campos, $Mensaje);
        
            $datosVehiculo=request()->except('_token');
            

            if($request->hasFile('Foto')){
                $datosVehiculo['Foto']=$request->file('Foto')->store('uploads','public');
                
            }
           // dd($datosVehiculo);
            Vehiculos::Insert($datosVehiculo);
            
        return redirect('vehiculos')->with('Mensaje','Se guardaron cambios en el vehículo ');

    //  Vehiculos::Insert($datosVehiculo);
      //  return redirect('vehiculos', compact($data))->with('Mensaje', 'Vehículo agregado al inventario'); 

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
        Vehiculos::where('id_vehiculo','=', $id)->update($datosVehiculo);
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
