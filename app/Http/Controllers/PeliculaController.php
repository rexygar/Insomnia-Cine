<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pelicula;
use App\Models\Genero;
use App\Models\Pelicula_Genero;
use Illuminate\Http\Request;
use DataTables;

class PeliculaController extends Controller
{
    public function index()
    {
        $Pelicula = Pelicula::all();
        $Genero = Genero::all();
        return view('APP.Peliculas.Listar', compact('Pelicula', 'Genero'));
    }


    public function listar(Request $request)
    {
        // if($request->ajax()){
        //     $data = Pelicula::latest()->get();
        //     return DataTables::of($data)->addIndexColumn()
        //     ->addColumn('action', function($row){
        //         $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';
        //         return $btn;
        //     })
        //     ->rawColumns(['action'])
        //     ->make(true);
        // }
        // return view('APP\Peliculas\Listar');
    }

    public function create()
    {
        $Genero = Genero::all();


        return view('APP.Peliculas.Create', compact('Genero'));
    }


    public function store(Request $request)
    {
        request()->validate([]);
        $validatedData =  $request->validate([
            'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'titulo' => 'required|string|max:100',
            'Sinopsis' => 'required|string|max:800',
            'Genero' => 'required|integer|',
            'Año_estreno' => 'required|integer|',
        ]);

        if ($validatedData) {
            // ------- Genero ------
            $Pelicula = new Pelicula();
            $Pelicula->Titulo =  request('titulo');
            $Pelicula->Descripcion =  request('Sinopsis');
            $Pelicula->Clasificacion =  request('Clasificacion');
            $Pelicula->Año_estreno =  request('Año_estreno');
            $Pelicula->Duracion =  request('Duracion');
            $Pelicula->IMG_portada =  request('IMG_portada');
            $Pelicula->IMGs =  request('IMGs');
            // ------- Genero ------
            $GeneroID = request('Genero');
            if ($GeneroID == 1000) {
                $Genero = new  Genero();
                $Genero->nombre =  request('GeneroNew');
                $Genero->save();

                $ultimaID =  $Genero->id;
                $pelicula_Genero = new Pelicula_Genero();
                
                
                // $Pelicula->
            }
            for ($i = 0; $i < 10; $i++) {
                $newTask = $Pelicula->replicate(); //para llenar la bd de prueba
                $newTask->save();
            }
            // return redirect()->action('PhotoController@index');
            return redirect()->to('/*Listar*');
        } else {

            return view('APP.Peliculas.Create');
        }
    }
}
