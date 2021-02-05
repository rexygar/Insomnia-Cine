<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoPublicacion extends Model
{
    use HasFactory;

    protected $table = 'tipo_publicacion';
    protected $fillable =[
        'nombre'
    ];


    public function Post()
    {
        return $this->belongsTo('App\Blog');
    }



}