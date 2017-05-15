<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MapasRequest;
use App\Http\Requests\MapasEditRequest;
use Illuminate\Support\Facades\Redirect;
use App\Mapas;


class MapasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $mapas = Mapas::where('estado',1)->orderBy('id')->paginate(6);
        $busqueda= Mapas::name($request->get('table_search'))->orderBy('id')->paginate(6);
        return View('administracion.mapas.index',compact('mapas', 'busqueda'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        
        return View('administracion.mapas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MapasRequest $request)
    {

        Mapas::create([
            'titulo' => $request['titulo'],
            'descripcion' => $request['descripcion'],
            'path'=> $request['path'],
            'contador_visitas'=>0,           
        ]);

         

        
        return Redirect::to('administracion/mapas/create')->with('mensaje-registro', 'Mapa Registrado Correctamente');


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

        $mapas = Mapas::find($id);
       
        return view('administracion.mapas.edit',compact('mapas'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MapasEditRequest $request, $id)
    {
       
        $mapas = Mapas::find($id);
        
            

                 $mapas->fill([

                    'titulo' => $request['titulo'],
                    'descripcion' => $request['descripcion'],
                    'path'=> $request['path'],
                   
                   
                ]);
     
        if($mapas->save()){
            return Redirect::to('administracion/mapas')->with('mensaje-registro', 'Mapa Actualizado Correctamente');
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
        $mapas = Mapas::find($id);
        $mapas->estado = 0;
        $mapas->save();

        $message = "Eliminado Correctamente";
        if ($request->ajax()) {
            return response()->json([
                'id'      => $mapas->id,
                'message' => $message
            ]);
        }
    }
}
