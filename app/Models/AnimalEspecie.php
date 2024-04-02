<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnimalEspecie extends Model
{
    use HasFactory;
    protected $table = 'animal_especie';
    public $timestamps = false;
    protected $fillable = [
        'especie_id',
        'animal_id'
    ];

    public function animal(){
        return $this->belongsTo(Animal::class,'animal_id');
    }
    public function especie(){
        return $this->belongsTo(Especie::class,'especie_id');
    }
    public function animalEspecieRecinto(){
        return $this->hasMany(AnimalEspecieRecinto::class,'animal_especie_id');
    }
}
