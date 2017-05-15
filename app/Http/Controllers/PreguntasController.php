<?php

namespace App\Http\Controllers;

use App\Http\Requests\PreguntasRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Preguntas;



class PreguntasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $preguntas = Preguntas::where('estado',1)->orderBy('id')->paginate(6);
         $busqueda= Preguntas::name($request->get('table_search'))->orderBy('id')->paginate(6);
        return View('administracion.preguntas.index',compact('preguntas', 'busqueda'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $preguntas = Preguntas::where('estado',1)->get();
        return View('administracion.preguntas.create',compact('preguntas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PreguntasRequest $request)
    {
        Preguntas::create($request->all());
        return Redirect::to('administracion/preguntas/create')->with('mensaje-registro', 'Preguntas Registradas Correctamente');
    }

    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $preguntas = Preguntas::find($id);
        
        return view('administracion.preguntas.edit',compact('preguntas'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PreguntasRequest $request, $id)
    {
        $preguntas = Preguntas::find($id);
        $preguntas->fill($request->all());

        if($preguntas->save()){
            return Redirect::to('administracion/preguntas')->with('mensaje-registro', 'Pregunta Actualizada Correctamente');
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
        $preguntas = Preguntas::find($id);
        $preguntas->estado = 0;
        $preguntas->save();

        $message = "Eliminado Correctamente";
        if ($request->ajax()) {
            return response()->json([
                'id'      => $preguntas->id,
                'message' => $message
            ]);
        }
    }
}
