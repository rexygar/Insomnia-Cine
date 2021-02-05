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

    public function Genero()
    {
        return $this->belongsTo(Genero::class,'genero_id');
    }
    public function Pelicula()
    {
        return $this->belongsTo(Pelicula::class,'pelicula_id');
    }



}
