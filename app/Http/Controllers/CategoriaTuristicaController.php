<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoriaTuristicaRequest;
use Illuminate\Http\Request;
use App\CategoriaTuristica;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class CategoriaTuristicaController extends Controller
{
    public function index(Request $request){
       

         $categorias = CategoriaTuristica::where('estado',1)->orderBy('id')->paginate(6);
         $cat= CategoriaTuristica::name($request->get('table_search'))->orderBy('id')->paginate(6);
         
        
          return view('administracion.categoriasTuristicas.index',compact('categorias', 'cat'));

    }

    public function create(){

        return view ('administracion.categoriasTuristicas.create');
    }

    public function store(CategoriaTuristicaRequest $request){
        $categoria= new CategoriaTuristica;
        $categoria->categoria=$request['categoria'];
        $categoria->descripcion=$request['descripcion'];
        $categoria->estado ='1';
        $categoria->contador_visitas =0;
        $categoria->save();
        if($categoria->save()){
            return Redirect::to('administracion/categoriasTuristicas/create')->with('mensaje-registro', 'Categoria Registrada Correctamente');
        }
    }

    public function show ($id){
        $categoria = CategoriaTuristica::findOrFail($id);
        return view('administration.categoriasTuristicas.show',compact('categoria'));

    }

    public function edit($id){
        $categoria = CategoriaTuristica::find($id);
        return view('administracion.categoriasTuristicas.edit',compact('categoria'));


    }

    public function update(CategoriaTuristicaRequest $request, $id){
        $categoria = CategoriaTuristica::find($id);
        $categoria->fill($request->all());

        if($categoria->save()){
            return Redirect::to('administracion/categoriasTuristicas')->with('mensaje-registro', 'Categoria Actualizada Correctamente');
        }



    }
    
    public function destroy($id, Request $request)
    {
        $categoria = CategoriaTuristica::find($id);
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
