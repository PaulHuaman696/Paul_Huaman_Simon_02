<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;
    protected $table = 'animales';
    protected $fillable = [
        'nombre',
        'edad'
    ];
    public function actividadHorarioAnimal(){
        return $this->hasOne(ActividadHorarioAnimal::class,'animal_id');
    }
    public function cuidadorAnimal(){
        return $this->hasMany(CuidadorAnimal::class,'animal_id');
    }
    public function animalEspecie(){
        return $this->hasOne(Especie::class,'animal_id');
    }
}
