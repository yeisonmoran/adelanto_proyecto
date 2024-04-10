<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AerolineasFormRequest; 
use App\Models\Aerolineas;
use Redirect;
use Storage;
use DateTime;
use Session;

class AerolineasController extends Controller
{
      public function __construct()
      {
        $this->middleware('auth');
      }

      public function index()
      {
          $aerolineas = Aerolineas::all();
          return view('aerolineas.index1', compact('aerolineas'));
      }
    
 
      public function create(Request $request)
      {
          $request->user()->authorizeRoles('admin');
          $aerolineas = Aerolineas::all();
          return view('aerolineas.create1', compact('aerolineas'));
      }
  
      public function store(AerolineasFormRequest $request)
      {
          $aerolineas = new Aerolineas;
  
          $aerolineas->Nombre = $request->Nombre;
          $aerolineas->Pais = $request->Pais;
          $aerolineas->Disponibilidad = $request->Disponibilidad;
          $aerolineas->Anio_fundacion = $request->Anio_fundacion;
  
          $aerolineas->created_at = now();
          $aerolineas->save();
  
          return redirect('aerolineas')->with('message2', '¡ guardado satisfactoriamente !');
      }
  
      public function show($id)
      {
          $aerolineas = Aerolineas::find($id);
          return view('aerolineas.detalle1', compact('aerolineas')); 
      }
  
      public function edit($id)
      {
          $aerolineas = Aerolineas::find($id);
          return view('aerolineas.edit1', ['aerolineas' => $aerolineas]);
      }
  
      public function update(AerolineasFormRequest $request, $id)
      {
          $aerolineas = Aerolineas::find($id);
          $aerolineas->Nombre= $request->Nombre;
          $aerolineas->Pais = $request->Pais;
          $aerolineas->Disponibilidad = $request->Disponibilidad;
          $aerolineas->Anio_fundacion = $request->Anio_fundacion;
  
          $aerolineas->updated_at = now();
          $aerolineas->save();
          
          Session::flash('message2', '¡ editado satisfactoriamente !');
          return Redirect::to('aerolineas');
      }
  
      public function destroy($id)
      { 
          Aerolineas::destroy($id);
          Session::flash('message2', '¡ eliminado satisfactoriamente !');
          return Redirect::to('aerolineas');
      }
  
}
