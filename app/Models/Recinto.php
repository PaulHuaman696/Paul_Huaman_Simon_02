<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recinto extends Model
{
    use HasFactory;
    protected $table = 'recintos';
    protected $fillable = [
        'nombre',
        'ubicacion',
        'referencia'
    ];
    public function AnimalEspecieRecinto(){
        return $this->belongsTo(AnimalEspecieRecinto::class,'recinto_id');
    }
}
