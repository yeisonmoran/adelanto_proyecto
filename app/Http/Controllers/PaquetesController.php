<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PaquetesFormRequest; 
use App\Models\Paquetes;
use App\Models\Reservas; 
use App\Models\Vuelos; 
use App\Models\Aerolineas;
use Redirect;
use Storage;
use DateTime;
use Session;

class PaquetesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $paquetes = Paquetes::all();

        $reservas = Reservas::all();

        $Vuelos = Vuelos::all();

        $aerolineas = Aerolineas::all();
        
        return view('paquetes.index', compact('paquetes','reservas','Vuelos','aerolineas'));
    }

    public function create(Request $request)
    {
        $request->user()->authorizeRoles('admin');
        $paquetes = Paquetes::all();
        return view('paquetes.create', compact('paquetes'));
    }

    public function store(PaquetesFormRequest $request)
    {
        $paquetes = new Paquetes;

        $paquetes->Nombre = $request->Nombre;
        $paquetes->Descripcion = $request->Descripcion;
        $paquetes->Precio_total = $request->Precio_total;
        $paquetes->Fecha_salida = $request->Fecha_salida;
        $paquetes->Fecha_regreso = $request->Fecha_regreso;

        $paquetes->created_at = now();
        $paquetes->save();

        return redirect('paquetes')->with('message', '¡ guardado satisfactoriamente !');
    }

    public function show($id)
    {
        $paquetes = Paquetes::find($id);
        return view('paquetes.detalle', compact('paquetes')); 
    }

    public function edit($id)
    {
        $paquetes = Paquetes::find($id);

        return view('paquetes.edit', ['paquetes' => $paquetes]);

    }

    public function update(PaquetesFormRequest $request, $id)
    {
        $paquetes = Paquetes::find($id);
        $paquetes->Nombre = $request->Nombre;
        $paquetes->Descripcion = $request->Descripcion;
        $paquetes->Precio_total = $request->Precio_total;
        $paquetes->Fecha_salida = $request->Fecha_salida;
        $paquetes->Fecha_regreso = $request->Fecha_regreso;

        $paquetes->updated_at = now();
        $paquetes->save();
        
        Session::flash('message', '¡ editado satisfactoriamente !');
        return Redirect::to('paquetes');
    }

    public function destroy($id)
    { 
        Paquetes::destroy($id);
        Session::flash('message', '¡ eliminado satisfactoriamente !');
        return Redirect::to('paquetes');
    }
 

}