<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Noticia;
use Illuminate\Http\Request;
use DataTables;

class NoticiaController extends Controller
{
    public function listar(Request $request)
    {
        if($request->ajax()){
            $data = Noticia::latest()->get();
            return DataTables::of($data)->addIndexColumn()
            ->addColumn('action', function($row){
                $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
        }
        return view('APP\Noticias\Listar');
    }
}
