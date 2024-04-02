<?php

namespace App\Http\Controllers;

use App\Models\Cuidador;
use Illuminate\Http\Request;

class CuidadorController extends Controller
{
    // Listar Cuidadores
    public function index(){
        $cuidadores = Cuidador::get();
        return $cuidadores;
    }

    // Ver un Cuidador
    public function show($id){  
        $cuidador = Cuidador::find($id);
        if (is_null($cuidador)) {
            return 'El cuidador buscado no existe.';
        }
        return $cuidador;
    }

    // Crear un Cuidador
    public function store(Request $request){
        $params = $request->all();
        // dd($params);
        $cuidador = Cuidador::create([
            'nombre' => $params['nombre'],
            'apellido' => $params['apellido'],
            'edad' => $params['edad']
        ]);
        
        return $cuidador;
    }

    // Eliminar Cuidador
    public function destroy($id){
        $cuidador = Cuidador::find($id)->delete();

        if ($cuidador){
            return 'Cuidador eleminado.';
        }else{
            return 'No se pudo eliminar.';
        }
    }

    // Actualizar Cuidador
    public  function update ($id,Request $request){
        $params = $request->all();
        $cuidador = Cuidador::find($id)->update([
            'nombre' => $params['nombre'],
            'apellido' => $params['apellido'],
            'edad' => $params['edad']
        ]);
        return $cuidador ? 'El cuidador fue actualizado.' : 'No se pudo actualizar al cuidador.';
    }
}
