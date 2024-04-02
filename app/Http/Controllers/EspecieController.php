<?php

namespace App\Http\Controllers;

use App\Models\Especie;
use Illuminate\Http\Request;

class EspecieController extends Controller
{
    // Listar Especies
    public function index(){
        $especies = Especie::get();
        return $especies;
    }

    // Ver un Especie
    public function show($id){  
        $especie = Especie::find($id);
        if (is_null($especie)) {
            return 'El especie buscado no existe.';
        }
        return $especie;
    }

    // Crear un Especie
    public function store(Request $request){
        $params = $request->all();
        // dd($params);
        $especie = Especie::create([
            'especie' => $params['espececie'],
            'familia' => $params['familia']
        ]);
        
        return $especie;
    }

    // Eliminar Especie
    public function destroy($id){
        $especie = Especie::find($id)->delete();

        if ($especie){
            return 'Especie eleminado.';
        }else{
            return 'No se pudo eliminar.';
        }
    }

    // Actualizar Especie
    public  function update ($id,Request $request){
        $params = $request->all();
        $especie = Especie::find($id)->update([
            'especie' => $params['especie'],
            'familia' => $params['familia']
        ]);
        return $especie ? 'El especie fue actualizado.' : 'No se pudo actualizar al especie.';
    }
}
