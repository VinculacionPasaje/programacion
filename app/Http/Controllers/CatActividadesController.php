<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoriaActividadesRequest;
use Illuminate\Http\Request;
use App\CategoriaActividades;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class CatActividadesController extends Controller
{
    public function index(Request $request){
       

         $categorias = CategoriaActividades::where('estado',1)->orderBy('id')->paginate(6);
         $cat= CategoriaActividades::name($request->get('table_search'))->orderBy('id')->paginate(6);
         
        
          return view('administracion.categoriasActividades.index',compact('categorias', 'cat'));

    }

    public function create(){

        return view ('administracion.categoriasActividades.create');
    }

    public function store(CategoriaActividadesRequest $request){
        $categoria= new CategoriaActividades;
        $categoria->categoria=$request['categoria'];
        $categoria->descripcion=$request['descripcion'];
        $categoria->estado ='1';
        $categoria->contador_visitas =0;
        $categoria->save();
        if($categoria->save()){
            return Redirect::to('administracion/categoriasActividades/create')->with('mensaje-registro', 'Categoria Registrada Correctamente');
        }
    }

    public function show ($id){
        $categoria = CategoriaActividades::findOrFail($id);
        return view('administration.categoriasActividades.show',compact('categoria'));

    }

    public function edit($id){
        $categoria = CategoriaActividades::find($id);
        return view('administracion.categoriasActividades.edit',compact('categoria'));


    }

    public function update(CategoriaActividadesRequest $request, $id){
        $categoria = CategoriaActividades::find($id);
        $categoria->fill($request->all());

        if($categoria->save()){
            return Redirect::to('administracion/categoriasActividades')->with('mensaje-registro', 'Categoria Actualizada Correctamente');
        }



    }
    
    public function destroy($id, Request $request)
    {
        $categoria = CategoriaActividades::find($id);
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
