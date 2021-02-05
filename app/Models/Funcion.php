<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcion extends Model
{
    use HasFactory;

    protected $table = 'funcion';
    protected $fillable =[
        'pelicula_id',
         'dia',
         'hora',
         'precio'
    ];


    public function Pelicula()
    {
        return $this->belongsTo('App\Pelicula');
    }
  



}
