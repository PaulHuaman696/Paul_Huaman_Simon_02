<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActividadHorario extends Model
{
    use HasFactory;
    protected $table = 'actividad_horario';
    public $timestamps = false;
    protected $fillable = [
        'actividad_id',
        'horario_id'
    ];

    public function actividad(){
        return $this->belongsTo(Actividad::class,'actividad_id');
    
    }
    public function horario(){
        return $this->belongsTo(Horario::class,'horario_id');
    
    }
    public function actividadHorarioAnimal(){
        return $this->hasMany(ActividadHorarioAnimal::class,'actividad_horario_id');

    }
}
