<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Redes;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\RedesRequest;


class RedesController extends Controller
{
    public function edit($id){
        $redes = Redes::find($id);
        return view('administracion.redes.edit',compact('redes'));


    }

    public function index(Request $request){
        $redes= Redes::where('estado',1)->paginate(4);
        
        return view('administracion.redes.index',compact('redes'));

    }

     public function update(RedesRequest $request, $id){
        $redes = Redes::find($id);
        $redes->fill($request->all());

        if($redes->save()){
            return Redirect::to('administracion/redes')->with('mensaje-registro', 'Red social Actualizado Correctamente');
        }



    }
}
