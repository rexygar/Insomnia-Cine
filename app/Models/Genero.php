<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    use HasFactory;

    protected $table = 'genero';

    protected $fillable =[
        'nombre',

    ];
    public function Peliculas()
    {
        return $this->hasMany(Pelicula_Genero::class, 'id');
    }


}
