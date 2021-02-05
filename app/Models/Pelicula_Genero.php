<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelicula_Genero extends Model
{
    use HasFactory;

    protected $table = "pelicula_genero";
    protected $fillable =[
        'pelicula_id',
         'genero_id',
    ];

    public function Generos()
    {
        return $this->belongsTo('App\Genero');
    }
    public function Peliculas()
    {
        return $this->belongsTo('App\Pelicula');
    }



}
