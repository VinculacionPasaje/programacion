<?php

namespace App\Http\Controllers;

use App\Http\Requests\AlimentacionRequest;
use App\Http\Requests\AlimentacionEditRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Alimentacion;
use App\CategoriaAlimentacion;

class AlimentacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $alimentacion = Alimentacion::where('estado',1)->orderBy('id')->paginate(6);
        $busqueda= Alimentacion::name($request->get('table_search'))->orderBy('id')->paginate(6);
        return View('administracion.alimentacion.index',compact('alimentacion', 'busqueda'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = CategoriaAlimentacion::where('estado',1)->get();
        
        return View('administracion.alimentacion.create',compact('categorias'));
    }

    /**
     * Store a newly created resource in storage
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AlimentacionRequest $request)
    {
          Alimentacion::create($request->all());

      

        
        return Redirect::to('administracion/alimentacion/create')->with('mensaje-registro', 'Contenido Registrado Correctamente');


    }

   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $alimentacion = Alimentacion::find($id);
        $categorias = CategoriaAlimentacion::where('estado',1)->get();
        return view('administracion.alimentacion.edit',compact('alimentacion','categorias'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AlimentacionEditRequest $request, $id)
    {
        $alimentacion = Alimentacion::find($id);
        $alimentacion->fill($request->all());
        


        if($alimentacion->save()){
            return Redirect::to('administracion/alimentacion')->with('mensaje-registro', 'Contenido Actualizado Correctamente');
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
        $alimentacion = Alimentacion::find($id);
        $alimentacion->estado = 0;
        $alimentacion->save();

        $message = "Eliminado Correctamente";
        if ($request->ajax()) {
            return response()->json([
                'id'      => $alimentacion->id,
                'message' => $message
            ]);
        }
    }
}
