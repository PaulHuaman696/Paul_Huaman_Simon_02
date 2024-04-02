<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CuidadorEspecie extends Model
{
    use HasFactory;
    protected $table = 'cuidador_especie';
    public $timestamps = false;
    protected $fillable = [
        'cuidador_id',
        'especie_id'
    ];
    public function cuidador(){
        return $this->belongsTo(Cuidador::class,'cuidador_id');
    }
    public function especie(){
        return $this->belongsTo(Especie::class,'especie_id');
    }
}
