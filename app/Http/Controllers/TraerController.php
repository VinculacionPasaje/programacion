<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traer;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\TraerRequest;

class TraerController extends Controller
{
     public function edit($id){
        $traer = Traer::find($id);
        return view('administracion.traer.edit',compact('traer'));


    }

    public function index(Request $request){
        $traer= Traer::where('id',1)->paginate(1);
        
        return view('administracion.traer.index',compact('traer'));

    }

     public function update(TraerRequest $request, $id){
        $traer = Traer::find($id);
        $traer->fill($request->all());

        if($traer->save()){
            return Redirect::to('administracion/traer')->with('mensaje-registro', 'Contenido Actualizado Correctamente');
        }



    }
}
