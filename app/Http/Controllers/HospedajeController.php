<?php

namespace App\Http\Controllers;

use App\Http\Requests\HospedajeRequest;
use App\Http\Requests\HospedajeEditRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Hospedaje;
use App\CategoriaHospedaje;

class HospedajeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $hospedaje = Hospedaje::where('estado',1)->orderBy('id')->paginate(6);
        $busqueda= Hospedaje::name($request->get('table_search'))->orderBy('id')->paginate(6);
        return View('administracion.hospedaje.index',compact('hospedaje', 'busqueda'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = CategoriaHospedaje::where('estado',1)->get();
        
        return View('administracion.hospedaje.create',compact('categorias'));
    }

    /**
     * Store a newly created resource in storage
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HospedajeRequest $request)
    {
         Hospedaje::create([
            'titulo' => $request['titulo'],
            'descripcion' => $request['descripcion'],
            'fecha_post' => $request['fecha_post'],
            'estrellas' => $request['estrellas'],
            'path'=> $request['path'],
            'contenido'=> $request['contenido'],
            'contador_visitas'=>0,
            'id_categorias'=> $request['id_categorias'],
           
        ]);

      

        
        return Redirect::to('administracion/hospedaje/create')->with('mensaje-registro', 'Noticia Registrada Correctamente');


    }

   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $hospedaje = Hospedaje::find($id);
        $categorias = CategoriaHospedaje::where('estado',1)->get();
        return view('administracion.hospedaje.edit',compact('hospedaje','categorias'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(HospedajeEditRequest $request, $id)
    {
        $hospedaje = Hospedaje::find($id);
        $hospedaje->fill($request->all());
        


        if($hospedaje->save()){
            return Redirect::to('administracion/hospedaje')->with('mensaje-registro', 'Noticia Actualizada Correctamente');
        }



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,Request $request)
    {
        $hospedaje = Hospedaje::find($id);
        $hospedaje->estado = 0;
        $hospedaje->save();

        $message = "Eliminado Correctamente";
        if ($request->ajax()) {
            return response()->json([
                'id'      => $hospedaje->id,
                'message' => $message
            ]);
        }
    }
}
