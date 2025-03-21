<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agenda;
use App\Models\Personas;
use App\Models\Imagenes;

class AgendaController extends Controller
{
    //
    public function getInsertar(){
        $personas = Personas::all(); 
        $imgs = Imagenes::all();
        return view('catalog.dos', compact('personas', 'imgs'));
        
    }

    public function postInsertar(Request $request){
        $agenda = new Agenda();
        $agenda->fecha = $request->fecha;
        $agenda->idpersona = $request->id_persona;
        $agenda->idimagen = $request->imagen;
        $agenda->hora = $request->hora;
        $agenda->save();
        return redirect()->route('agenda.insertar')->with('mensaje', 'Agenda creada correctamente');
    }

    public function getVisualizar(){
        $personas = Personas::all();
        return view('catalog.tres', compact('personas'));
    }
    public function postVisualizar(Request $request){
        $agenda=Agenda::select('imagenes.imagen', 'agenda.fecha','agenda.hora') 
        ->join('imagenes', 'imagenes.idimagen', '=', 'agenda.idimagen') 
        ->where('agenda.idpersona',$request->id_persona) 
        ->where('agenda.fecha',$request->fecha) ->get();
        return view('catalog.tresmost', compact('agenda'));
    }

}
