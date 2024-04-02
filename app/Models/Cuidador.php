<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuidador extends Model
{
    use HasFactory;
    protected $table = 'cuidadores';
    protected $fillable = [
        'nombre',
        'apellido',
        'edad'
    ];

    public function cuidadorAnimal(){
        return $this->hasMany(CuidadorAnimal::class,'cuidador_id');
    }
    public function cuidadorEspecie(){
        return $this->hasMany(CuidadorEspecie::class,'cuidador_id');
    }
}
