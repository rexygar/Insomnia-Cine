<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscripcion extends Model
{
    use HasFactory;

    protected $table = 'subscripcion';
    protected $fillable =[
        'user_id',
         'inicio',
         'termino'
    ];


    public function Pelicula()
    {
        return $this->belongsTo('App\User','user_id','user_id');
    }
  



}
