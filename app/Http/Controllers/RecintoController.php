<?php

namespace App\Http\Controllers;

use App\Models\Recinto;
use Illuminate\Http\Request;

class RecintoController extends Controller
{
    // Listar Recintos
    public function index(){
        $recintos = Recinto::get();
        return $recintos;
    }

    // Ver un Recinto
    public function show($id){  
        $recinto = Recinto::find($id);
        if (is_null($recinto)) {
            return 'El recinto buscado no existe.';
        }
        return $recinto;
    }

    // Crear un Recinto
    public function store(Request $request){
        $params = $request->all();
        // dd($params);
        $recinto = Recinto::create([
            'nombre' => $params['nombre'],
            'ubicacion' => $params['ubicacion'],
            'referencia' => $params['referencia']
        ]);
        
        return $recinto;
    }

    // Eliminar Recinto
    public function destroy($id){
        $recinto = Recinto::find($id)->delete();

        if ($recinto){
            return 'Recinto eleminado.';
        }else{
            return 'No se pudo eliminar.';
        }
    }

    // Actualizar Recinto
    public  function update ($id,Request $request){
        $params = $request->all();
        $recinto = Recinto::find($id)->update([
            'nombre' => $params['nombre'],
            'ubicacion' => $params['ubicacion'],
            'referencia' => $params['referencia']
        ]);
        return $recinto ? 'El recinto fue actualizado.' : 'No se pudo actualizar al recinto.';
    }
}
