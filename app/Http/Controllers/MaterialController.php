<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Material;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\MaterialRequest;

class MaterialController extends Controller
{
    public function edit($id){
        $material = Material::find($id);
        return view('administracion.material.edit',compact('material'));


    }

    public function index(Request $request){
        $material= Material::where('id',1)->paginate(1);
        
        return view('administracion.material.index',compact('material'));

    }

     public function update(MaterialRequest $request, $id){
        $material = Material::find($id);
        $material->fill($request->all());

        if($material->save()){
            return Redirect::to('administracion/material')->with('mensaje-registro', 'Contenido Actualizado Correctamente');
        }



    }
}
