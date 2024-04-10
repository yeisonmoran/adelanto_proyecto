<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\VuelosFormRequest;
use App\Models\Vuelos; 
use Redirect;
use Storage;
use DateTime;
use Session;

class VuelosController extends Controller
{
   
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $Vuelos = Vuelos::all();
        return view('Vuelos.index4', compact('Vuelos'));
    }
    
    public function create(Request $request)
    {
        $request->user()->authorizeRoles('admin');
        $Vuelos = Vuelos::all();
        return view('Vuelos.create4', compact('Vuelos'));
    }

    public function store(VuelosFormRequest $request)
    {
        $Vuelos = new Vuelos;

        $Vuelos->origen = $request->origen;
        $Vuelos->destino = $request->destino;
        $Vuelos->fecha_salida = $request->fecha_salida;
        $Vuelos->fecha_llegada = $request->fecha_llegada;
        $Vuelos->duracion = $request->duracion;
        $Vuelos->precio = $request->precio;
        $Vuelos->asientos_disponibles = $request->asientos_disponibles;
    
        $Vuelos->created_at = now();
        $Vuelos->save();

        return redirect('Vuelos')->with('message3', '¡ guardado satisfactoriamente !');
    }

    public function show($id)
    {
        $Vuelos = Vuelos::find($id);
        return view('Vuelos.detalle4', compact('Vuelos')); 
    }

    public function edit($id)
    {
        $Vuelos = Vuelos::find($id);
        return view('Vuelos.edit4', ['Vuelos' => $Vuelos]);
    }

    public function update(VuelosFormRequest $request, $id)
    {
        $Vuelos = Vuelos::find($id);
        $Vuelos->origen = $request->origen;
        $Vuelos->destino = $request->destino;
        $Vuelos->fecha_salida = $request->fecha_salida;
        $Vuelos->fecha_llegada = $request->fecha_llegada;
        $Vuelos->duracion = $request->duracion;
        $Vuelos->precio = $request->precio;
        $Vuelos->asientos_disponibles = $request->asientos_disponibles;
    
        $Vuelos->updated_at = now();
        $Vuelos->save();

        Session::flash('message3', '¡ editado satisfactoriamente !');
        return Redirect::to('Vuelos');
    }

    public function destroy($id)
    {
        Vuelos::destroy($id);
        Session::flash('message3', '¡ eliminado satisfactoriamente !');
        return Redirect::to('Vuelos');
    }
}

