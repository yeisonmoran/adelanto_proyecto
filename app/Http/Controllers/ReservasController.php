<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ReservasFormRequest;
use App\Models\Reservas; 
use Redirect;
use Storage;
use DateTime;
use Session;

class ReservasController extends Controller
{
   
    // Métodos para Reservas
    public function index()
    {
        $reservas = Reservas::all();
        return view('reservas.index1', compact('reservas'));
    }
    
    public function create()
    {
        $reservas = Reservas::all();
        return view('reservas.create1', compact('reservas'));
    }

    public function store(ReservasFormRequest $request)
    {
        $reservas = new Reservas;

        $reservas->fecha_reserva = $request->fecha_reserva;
        $reservas->num_personas = $request->num_personas;
        $reservas->estado = $request->estado;
    
        $reservas->created_at = now();
        $reservas->save();

        return redirect('reservas')->with('message1', '¡ guardada satisfactoriamente !');
    }

    public function show($id)
    {
        $reservas = Reservas::find($id);
        return view('reservas.detalle1', compact('reservas')); 
    }

    public function edit($id)
    {
        $reservas = Reservas::find($id);
        return view('reservas.edit1', ['reservas' => $reservas]);
    }

    public function update(ReservasFormRequest $request, $id)
    {
        $reservas = Reservas::find($id);
       
        $reservas->fecha_reserva = $request->fecha_reserva;
        $reservas->num_personas = $request->num_personas;
        $reservas->estado = $request->estado;
    
        $reservas->updated_at = now();
        $reservas->save();

        Session::flash('message1', '¡ editada satisfactoriamente !');
        return Redirect::to('reservas');
    }

    public function destroy($id)
    {
        Reservas::destroy($id);
        Session::flash('message1', '¡ eliminada satisfactoriamente !');
        return Redirect::to('reservas');
    }
}

