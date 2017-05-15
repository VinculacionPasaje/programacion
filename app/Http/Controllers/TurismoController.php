<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TurismoComunitario;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\TurismoRequest;

class TurismoController extends Controller
{
    public function edit($id){
        $turismo = TurismoComunitario::find($id);
        return view('administracion.turismo.edit',compact('turismo'));


    }

    public function index(Request $request){
        $turismo= TurismoComunitario::where('id',1)->paginate(1);
        
        return view('administracion.turismo.index',compact('turismo'));

    }

     public function update(TurismoRequest $request, $id){
        $turismo = TurismoComunitario::find($id);
        $turismo->fill($request->all());

        if($turismo->save()){
            return Redirect::to('administracion/turismo')->with('mensaje-registro', 'Contenido Actualizado Correctamente');
        }



    }
}
