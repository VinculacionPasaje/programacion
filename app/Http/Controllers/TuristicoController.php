<?php

namespace App\Http\Controllers;

use App\Http\Requests\TuristicoRequest;
use App\Http\Requests\TuristicoEditRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Turistico;
use App\CategoriaTuristica;

class TuristicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $actividades = Turistico::where('estado',1)->orderBy('id')->paginate(6);
        $busqueda= Turistico::name($request->get('table_search'))->orderBy('id')->paginate(6);
        return View('administracion.turistico.index',compact('actividades', 'busqueda'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = CategoriaTuristica::where('estado',1)->get();
        
        return View('administracion.turistico.create',compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TuristicoRequest $request)
    {

        

            Turistico::create([
            'titulo' => $request['titulo'],
            'descripcion' => $request['descripcion'],
            'fecha_post' => $request['fecha_post'],
            'path'=> $request['path'],
            'contenido'=> $request['contenido'],
            'contador_visitas'=>0,
            'id_categorias'=> $request['id_categorias'],
           
        ]);

            
               
        return Redirect::to('administracion/turistico/create')->with('mensaje-registro', 'Actividad Registrada Correctamente');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $actividades = Turistico::find($id);
        $categorias = CategoriaTuristica::where('estado',1)->get();
        return view('administracion.turistico.edit',compact('actividades','categorias'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TuristicoEditRequest $request, $id)
    {
       
        $actividades = Turistico::find($id);
        
          

                 $actividades->fill([

                    'titulo' => $request['titulo'],
                    'descripcion' => $request['descripcion'],
                    'fecha_post' => $request['fecha_post'],
                    'path'=> $request['path'],
                    'contenido'=> $request['contenido'],
                    'id_categorias'=> $request['id_categorias'],
                   
                ]);

                  


        if($actividades->save()){
            return Redirect::to('administracion/turistico')->with('mensaje-registro', 'Actividad Actualizada Correctamente');
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
        $actividad = Turistico::find($id);
        $actividad->estado = 0;
        $actividad->save();

        $message = "Eliminado Correctamente";
        if ($request->ajax()) {
            return response()->json([
                'id'      => $actividad->id,
                'message' => $message
            ]);
        }
    }
}
