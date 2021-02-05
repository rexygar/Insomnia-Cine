<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pelicula;
use App\Models\Genero;
use App\Models\Pelicula_Genero;
use Illuminate\Http\Request;
use DataTables;
use Illuminate\Support\Facades\DB;
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
        if ($request->ajax()) {
            $data = Pelicula::latest()->get();
            return DataTables::of($data)->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('APP\Peliculas\Listar');
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
            'Titulo' => 'required|string|max:100',
            'Sinopsis' => 'required|string|max:800',
            'Genero' => 'required|integer|',
            'Clasificacion' => 'required|string|',
            'Duracion' => 'required|integer|',
            'Año_estreno' => 'required|',
        ]);

        if ($validatedData) {
            // ------- Genero ------
            $Pelicula = new Pelicula();
            $Pelicula->Titulo =  request('Titulo');
            $Pelicula->Descripcion =  request('Sinopsis');
            $Pelicula->Clasificacion =  request('Clasificacion');
            $Pelicula->Año_estreno =  request('Año_estreno');
            $Pelicula->Duracion =  request('Duracion');
            $Pelicula->IMG_portada =  "img_portada"; //->nullable();
            $Pelicula->IMGs = "img_array"; //->nullable();
            // $Pelicula->IMG_portada =  request('IMG_portada'); //->nullable();
            // $Pelicula->IMGs =  request('IMGs'); //->nullable();
            $Pelicula->En_Cartelera =  request('En_Cartelera'); //->nullable();
            $Pelicula->save();
            // ------- Genero ------
            $GeneroID = request('Genero');
            if ($GeneroID != 1000) {

                $ultimaIDPeli =  $Pelicula->id;
                $pelicula_Genero = new Pelicula_Genero();
                $pelicula_Genero->pelicula_id = $ultimaIDPeli;
                $pelicula_Genero->genero_id = request('Genero');
                $pelicula_Genero->save();

                // $Pelicula->
            } else {
                $Genero = new  Genero();
                $Genero->nombre =  request('GeneroNew');
                $Genero->save();

                $ultimaIDPeli =  $Pelicula->id;
                $ultimaIDGene =  $Genero->id;
                $pelicula_Genero = new Pelicula_Genero();
                $pelicula_Genero->pelicula_id = $ultimaIDPeli;
                $pelicula_Genero->genero_id = $ultimaIDGene;
                $pelicula_Genero->save();
            }
            // for ($i = 0; $i < 10; $i++) {
            //     $newTask = $Pelicula->replicate(); //para llenar la bd de prueba
            //     $newTask->save();

            // }
            // return redirect()->action('PhotoController@index');
            return redirect()->to('PeliculaS');
        } else {

            return view('APP.Peliculas.Create');
        }
    }


    public function show($idPelicula, Request $request)
    {

        $pelicula = Pelicula::findOrFail($idPelicula);
        $genero_Pelicula = Pelicula::findOrFail($idPelicula)->Genero;
        $i = 0;
        foreach ($genero_Pelicula as $genero) {
            $ids[$i] = $genero->genero_id;
            $i++;
        }
        $Generos = Genero::find($ids);
        return view('APP.Peliculas.Show', compact('pelicula','Generos'));
    }
}
