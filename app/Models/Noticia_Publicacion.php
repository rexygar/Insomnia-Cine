<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Noticia_Publicacion extends Model
{
    use HasFactory;

    protected $table = "noticias_publicacion";
    protected $fillable =[
        'noticia_id',
         'publicacion_id'
    ];

    public function Noticia()
    {
        return $this->belongsTo('App\Noticia');
    }
    public function Tipo_Publicacion()
    {
        return $this->belongsTo('App\TipoPublicacion');
    }



}
