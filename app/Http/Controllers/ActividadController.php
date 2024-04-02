<?php

namespace App\Http\Controllers;

use App\Models\Actividad;
use Illuminate\Http\Request;

class ActividadController extends Controller
{
    // Listar Actividades
    public function index(){
        $actividades = Actividad::get();
        return $actividades;
    }

    // Ver un Actividad
    public function show($id){  
        $actividad = Actividad::find($id);
        if (is_null($actividad)) {
            return 'El actividad buscado no existe.';
        }
        return $actividad;
    }

    // Crear un Actividad
    public function store(Request $request){
        $params = $request->all();
        // dd($params);
        $actividad = Actividad::create([
            'dia' => $params['dia']
        ]);
        
        return $actividad;
    }

    // Eliminar Actividad
    public function destroy($id){
        $actividad = Actividad::find($id)->delete();

        if ($actividad){
            return 'Actividad eleminado.';
        }else{
            return 'No se pudo eliminar.';
        }
    }

    // Actualizar Actividad
    public  function update ($id,Request $request){
        $params = $request->all();
        $actividad = Actividad::find($id)->update([
            'dia' => $params['dia']
        ]);
        return $actividad ? 'El actividad fue actualizado.' : 'No se pudo actualizar al actividad.';
    }
}
