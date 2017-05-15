<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoriaDiversionRequest;
use Illuminate\Http\Request;
use App\CategoriaDiversion;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class CategoriaDiversionController extends Controller
{
    public function index(Request $request){
       

         $categorias = CategoriaDiversion::where('estado',1)->orderBy('id')->paginate(6);
         $cat= CategoriaDiversion::name($request->get('table_search'))->orderBy('id')->paginate(6);
         
        
          return view('administracion.categoriasDiversion.index',compact('categorias', 'cat'));

    }

    public function create(){

        return view ('administracion.categoriasDiversion.create');
    }

    public function store(CategoriaDiversionRequest $request){
        $categoria= new CategoriaDiversion;
        $categoria->categoria=$request['categoria'];
        $categoria->descripcion=$request['descripcion'];
        $categoria->estado ='1';
        $categoria->contador_visitas =0;
        $categoria->save();
        if($categoria->save()){
            return Redirect::to('administracion/categoriasDiversion/create')->with('mensaje-registro', 'Categoria Registrada Correctamente');
        }
    }

   

    public function edit($id){
        $categoria = CategoriaDiversion::find($id);
        return view('administracion.categoriasDiversion.edit',compact('categoria'));


    }

    public function update(CategoriaDiversionRequest $request, $id){
        $categoria = CategoriaDiversion::find($id);
        $categoria->fill($request->all());

        if($categoria->save()){
            return Redirect::to('administracion/categoriasDiversion')->with('mensaje-registro', 'Categoria Actualizada Correctamente');
        }



    }
    
    public function destroy($id, Request $request)
    {
        $categoria = CategoriaDiversion::find($id);
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
