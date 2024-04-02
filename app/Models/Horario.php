<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    use HasFactory;
    protected $table = 'horarios';
    protected $fillable = [
        'hora_inicio',
        'hora_end'
    ];
    public function actividadHorario(){
        return $this->hasMany(ActividadHorario::class,'horario_id');
    }
}
