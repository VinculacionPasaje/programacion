<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoriaRequest;
use Illuminate\Http\Request;
use App\Categoria;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class CategoriaController extends Controller
{
    public function index(Request $request){
       

         $categorias = Categoria::where('estado',1)->orderBy('id')->paginate(6);
         $cat= Categoria::name($request->get('table_search'))->orderBy('id')->paginate(6);
         
        
          return view('administracion.categorias.index',compact('categorias', 'cat'));

    }

    public function create(){
        return view ('administracion.categorias.create');
    }

    public function store(CategoriaRequest $request){
        $categoria= new Categoria;
        $categoria->nombre=$request['nombre'];
        $categoria->descripcion=$request['descripcion'];
        $categoria->estado ='1';
        $categoria->save();
        if($categoria->save()){
            return Redirect::to('administracion/categorias/create')->with('mensaje-registro', 'Categoria Registrada Correctamente');
        }
    }

    public function show ($id){
        $categoria = Categoria::findOrFail($id);
        return view('administration.categorias.show',compact('categoria'));

    }

    public function edit($id){
        $categoria = Categoria::find($id);
        return view('administracion.categorias.edit',compact('categoria'));


    }

    public function update(CategoriaRequest $request, $id){
        $categoria = Categoria::find($id);
        $categoria->fill($request->all());

        if($categoria->save()){
            return Redirect::to('administracion/categorias')->with('mensaje-registro', 'Categoria Actualizada Correctamente');
        }



    }
    
    public function destroy($id, Request $request)
    {
        $categoria = Categoria::find($id);
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
