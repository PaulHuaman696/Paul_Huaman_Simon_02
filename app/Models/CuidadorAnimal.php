<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CuidadorAnimal extends Model
{
    use HasFactory;
    protected $table = 'cuidador_animal';
    public $timestamps = false;
    protected $fillable = [
        'cuidador_id',
        'animal_id'
    ];

    public function cuidador(){
        return $this->belongsTo(Cuidador::class,'cuidador_id');
    }
    public function animal(){
        return $this->belongsTo(Animal::class,'animal_id');
    }
}
