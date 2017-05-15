<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoriaHospedajeRequest;
use Illuminate\Http\Request;
use App\CategoriaHospedaje;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class CategoriaHospedajeController extends Controller
{
    public function index(Request $request){
       

         $categorias = CategoriaHospedaje::where('estado',1)->orderBy('id')->paginate(6);
         $cat= CategoriaHospedaje::name($request->get('table_search'))->orderBy('id')->paginate(6);
         
        
          return view('administracion.categoriasHospedaje.index',compact('categorias', 'cat'));

    }

    public function create(){

        return view ('administracion.categoriasHospedaje.create');
    }

    public function store(CategoriaHospedajeRequest $request){
        $categoria= new CategoriaHospedaje;
        $categoria->categoria=$request['categoria'];
        $categoria->descripcion=$request['descripcion'];
        $categoria->estado ='1';
        $categoria->contador_visitas =0;
        $categoria->save();
        if($categoria->save()){
            return Redirect::to('administracion/categoriasHospedaje/create')->with('mensaje-registro', 'Categoria Registrada Correctamente');
        }
    }

   

    public function edit($id){
        $categoria = CategoriaHospedaje::find($id);
        return view('administracion.categoriasHospedaje.edit',compact('categoria'));


    }

    public function update(CategoriaHospedajeRequest $request, $id){
        $categoria = CategoriaHospedaje::find($id);
        $categoria->fill($request->all());

        if($categoria->save()){
            return Redirect::to('administracion/categoriasHospedaje')->with('mensaje-registro', 'Categoria Actualizada Correctamente');
        }



    }
    
    public function destroy($id, Request $request)
    {
        $categoria = CategoriaHospedaje::find($id);
        $categoria->estado = 0;
        $categoria->save();

        $message = "Eliminado Correctamente";
        if ($request->ajax()) {
            return response()->json([
                'id'      => $categoria->id,
                'message' => $message
            ]);
        }
    }
}
