<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use DataTables;

class BlogController extends Controller
{
    public function listar(Request $request)
    {
        if($request->ajax()){
            $data = Blog::latest()->get();
            return DataTables::of($data)->addIndexColumn()
            ->addColumn('action', function($row){
                $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
        }
        return view('APP\Blog\listar');
    }
}
