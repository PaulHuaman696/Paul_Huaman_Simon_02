<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnimalEspecieRecinto extends Model
{
    use HasFactory;
    protected $table = 'animal_especie_recinto';
    public $timestamps = false;
    protected $fillable = [
        'animal_especie_id',
        'recinto_id'
    ];
    public function animalEspecie(){
        return $this->belongsTo(AnimalEspecie::class,'animal_especie_id');
    }
    public function Recinto(){
        return $this->belongsTo(Recinto::class,'recinto_id');
    }
}
