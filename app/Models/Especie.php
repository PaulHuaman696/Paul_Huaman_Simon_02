<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Especie extends Model
{
    use HasFactory;
    protected $table = 'especies';
    protected $fillable = [
        'especie',
        'familia'
    ];
    public function cuidadorEspecie(){
        return $this->hasMany(CuidadorEspecie::class,'especie_id');
    }
    public function animalEspecie(){
        return $this->hasMany(AnimalEspecie::class,'especie_id');
    }
}
