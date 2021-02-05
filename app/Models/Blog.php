<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $table = 'blog';
    protected $fillable =[
        'Titulo',
         'publicacion',
         'contenido'
    ];


    public function Usuario()
    {
        return $this->belongsTo('App\User');
    }
    public function Posts()
    {
        return $this->hasMany('App\TipoPublicacion', 'id');
    }



}
