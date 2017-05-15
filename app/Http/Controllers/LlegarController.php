<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LlegarRequest;
use Illuminate\Support\Facades\Redirect;
use App\Llegar;

class LlegarController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $llegar = Llegar::where('estado',1)->orderBy('id')->paginate(6);
        $busqueda= Llegar::name($request->get('table_search'))->orderBy('id')->paginate(6);
        return View('administracion.llegar.index',compact('llegar', 'busqueda'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        
        return View('administracion.llegar.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LlegarRequest $request)
    {

        Llegar::create([
            'titulo' => $request['titulo'],
            'contenido' => $request['contenido'],
            'script'=> $request['script'],
            'contador_visitas'=>0,           
        ]);

         

        
        return Redirect::to('administracion/llegar/create')->with('mensaje-registro', 'Contenido Registrado Correctamente');


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

        $llegar = Llegar::find($id);
       
        return view('administracion.llegar.edit',compact('llegar'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(LlegarRequest $request, $id)
    {
       
        $llegar = Llegar::find($id);
        
            

                 $llegar->fill([

                    'titulo' => $request['titulo'],
                    'contenido' => $request['contenido'],
                    'script'=> $request['script'],
                   
                   
                ]);
     
        if($llegar->save()){
            return Redirect::to('administracion/llegar')->with('mensaje-registro', 'Contenido Actualizado Correctamente');
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
        $llegar = Llegar::find($id);
        $llegar->estado = 0;
        $llegar->save();

        $message = "Eliminado Correctamente";
        if ($request->ajax()) {
            return response()->json([
                'id'      => $llegar->id,
                'message' => $message
            ]);
        }
    }
}
