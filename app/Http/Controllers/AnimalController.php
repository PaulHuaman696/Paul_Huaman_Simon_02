<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Models\AnimalEspecie;
use App\Models\Especie;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    // Listar Animales
    public function index(){
        $animales = Animal::get();
        return $animales;
    }

    // Ver un Animal
    public function show($id){  
        $animal = Animal::find($id);
        if (is_null($animal)) {
            return 'El animal buscado no existe.';
        }
        return $animal;
    }

    // Crear un Animal
    public function store(Request $request){
        $params = $request->all();
        // dd($params);
        $animal = Animal::create([
            'nombre' => $params['nombre'],
            'edad' => $params['edad']
        ]);

        # Crear registro en AnimalEspecie
        if (isset($params['especie']) && is_array($params['especie'])) {
            foreach ($params['especie'] as $key => $especie) {
                if (isset($params['especie']['id'])) {
                    AnimalEspecie::create([
                        'especie_id' => $especie,
                        'animal_id' => $animal->id
                    ]);
                } else {
                    $especieObj = Especie::create([
                        'especie' => $params['especie']['especie'],
                        'familia' => $params['especie']['familia']
                    ]);

                    AnimalEspecie::create([
                        'especie_id' => $especieObj->id,
                        'animal_id' => $animal->id
                    ]);
                };
            };
        };
        
        return $animal;
    }

    // Eliminar Animal
    public function destroy($id){
        $animal = Animal::find($id)->delete();

        if ($animal){
            return 'Animal eleminado.';
        }else{
            return 'No se pudo eliminar.';
        }
    }

    // Actualizar Animal
    public  function update ($id,Request $request){
        $params = $request->all();
        $animal = Animal::find($id)->update([
            'nombre' => $params['nombre'],
            'edad' => $params['edad']
        ]);
        return $animal ? 'El animal fue actualizado.' : 'No se pudo actualizar al animal.';
    }
}
