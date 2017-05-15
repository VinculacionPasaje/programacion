<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Footer;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\FooterRequest;

class FooterController extends Controller
{
    public function edit($id){
        $footer = Footer::find($id);
        return view('administracion.footer.edit',compact('footer'));


    }

    public function index(Request $request){
        $footer= Footer::where('id',1)->paginate(1);
        
        return view('administracion.footer.index',compact('footer'));

    }

     public function update(FooterRequest $request, $id){
        $footer = Footer::find($id);
        $footer->fill($request->all());

        if($footer->save()){
            return Redirect::to('administracion/footer')->with('mensaje-registro', 'Contenido Actualizado Correctamente');
        }



    }
}
