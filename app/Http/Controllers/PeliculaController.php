<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pelicula;
use Illuminate\Http\Request;
use DataTables;

class PeliculaController extends Controller
{

    public function listar(Request $request)
    {
        if($request->ajax()){
            $data = Pelicula::latest()->get();
            return DataTables::of($data)->addIndexColumn()
            ->addColumn('action', function($row){
                $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
        }
        return view('APP\Peliculas\Listar');
    }
}
