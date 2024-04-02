<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActividadHorarioAnimal extends Model
{
    use HasFactory;
    protected $table = 'actividad_horario_animal';
    public $timestamps = false;
    protected $fillable = [
        'actividad_horario_id',
        'animal_id'
    ];
    public function actividadHorario(){
        return $this->belongsTo(ActividadHorario::class,'actividad_horario_id');
    }
    public function animal(){
        return $this->belongsTo(Animal::class,'animal_id');
    
    }
}
