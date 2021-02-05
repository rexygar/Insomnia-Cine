<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog_Publicacion extends Model
{
    use HasFactory;

    protected $table = "blog_publicacion";
    protected $fillable =[
        'blog_id',
         'publicacion_id'
    ];

    public function Post()
    {
        return $this->belongsTo('App\Blog');
    }
    public function Tipo_Publicacion()
    {
        return $this->belongsTo('App\TipoPublicacion');
    }



}
