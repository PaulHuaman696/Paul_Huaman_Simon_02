<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    use HasFactory;
    protected $table = 'actividades';
    protected $fillable = [
        'dia'
    ];

    public function actividadHorario(){
        return $this->hasOne(ActividadHorario::class,'actividad_id');
    
    }
}
