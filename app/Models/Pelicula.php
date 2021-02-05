<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    use HasFactory;

    protected $table = "pelicula";
    protected $fillable =[
        'Titulo',
         'Descripcion',
         'Clasificacion',
         'Duracion',
         'Año_estreno',
         'IMG_portada',
         'IMGs',
         'En_Cartelera'
    ];

    public function Genero()
    {
        return $this->belongsTo('App\Genero');
    }

    public function Funciones()
    {
        return $this->hasMany('App\Funcion', 'id');
    }


}
