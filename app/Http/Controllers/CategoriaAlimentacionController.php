<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoriaAlimentacionRequest;
use Illuminate\Http\Request;
use App\CategoriaAlimentacion;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class CategoriaAlimentacionController extends Controller
{
    public function index(Request $request){
       

         $categorias = CategoriaAlimentacion::where('estado',1)->orderBy('id')->paginate(6);
         $cat= CategoriaAlimentacion::name($request->get('table_search'))->orderBy('id')->paginate(6);
         
        
          return view('administracion.categoriasAlimentacion.index',compact('categorias', 'cat'));

    }

    public function create(){

        return view ('administracion.categoriasAlimentacion.create');
    }

    public function store(CategoriaAlimentacionRequest $request){
        $categoria= new CategoriaAlimentacion;
        $categoria->categoria=$request['categoria'];
        $categoria->descripcion=$request['descripcion'];
        $categoria->estado ='1';
        $categoria->contador_visitas =0;
        $categoria->save();
        if($categoria->save()){
            return Redirect::to('administracion/categoriasAlimentacion/create')->with('mensaje-registro', 'Categoria Registrada Correctamente');
        }
    }

 

    public function edit($id){
        $categoria = CategoriaAlimentacion::find($id);
        return view('administracion.categoriasAlimentacion.edit',compact('categoria'));


    }

    public function update(CategoriaAlimentacionRequest $request, $id){
        $categoria = CategoriaAlimentacion::find($id);
        $categoria->fill($request->all());

        if($categoria->save()){
            return Redirect::to('administracion/categoriasAlimentacion')->with('mensaje-registro', 'Categoria Actualizada Correctamente');
        }



    }
    
    public function destroy($id, Request $request)
    {
        $categoria = CategoriaAlimentacion::find($id);
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
