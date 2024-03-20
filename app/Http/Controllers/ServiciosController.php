<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servicios;
use Redirect;
use Storage;
use DateTime;
use Session;

class ServiciosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
         $servicios = Servicios::all();
        return view('servicios.index', compact('servicios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $servicios = Servicios::all();
        return view('servicios.create', compact('servicios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    
        
 {

 $servicios= new Servicios;

 $servicios->destino= $request->destino;
 $servicios->precio = $request->precio;
 $servicios->cupos = $request->cupos;
 $servicios->duracion = $request->duracion;
 $servicios->descripcion = $request->descripcion;
 
 // Guardamos la fecha de creación del registro
 $servicios->created_at = (new DateTime)->getTimestamp();
 // Inserto todos los datos en mi tabla 'servicios'
 $servicios->save();
 // Hago una redirección a la vista principal con un mensaje
 return redirect('servicios')->with('message','servicios Guardado
Satisfactoriamente !');
 }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $servicios = Servicios::find($id);
        return view('servicios.detalle', compact('servicios')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $servicios = Servicios::find($id);
        return view('servicios.edit',['servicios'=>$servicios]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
     $servicios = Servicios::find($id);
     $servicios->destino = $request->destino;
     $servicios->precio = $request->precio;
     $servicios->cupos = $request->cupos;
     $servicios->duracion = $request->duracion;
     $servicios->descripcion = $request->descripcion;

     // Guardamos la fecha de actualización del registro
    $servicios->updated_at = (new DateTime)->getTimestamp();

    // Actualizo los datos en la tabla 'productos'
    $servicios->save();
    // Muestro un mensaje y redirecciono a la vista principal
    Session::flash('message', 'Editado Satisfactoriamente !');
    return Redirect::to('servicios');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Indicamos el 'id' del registro que se va Eliminar
    $servicios =Servicios::find($id);


    // Elimino el registro de la tabla 'servicios'
    Servicios::destroy($id);

    Session::flash('message', 'Eliminado Satisfactoriamente !');
    return Redirect::to('servicios');
    }
}
