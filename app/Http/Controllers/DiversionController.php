<?php

namespace App\Http\Controllers;

use App\Http\Requests\DiversionRequest;
use App\Http\Requests\DiversionEditRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Diversion;
use App\CategoriaDiversion;

class DiversionController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $diversion = Diversion::where('estado',1)->orderBy('id')->paginate(6);
        $busqueda= Diversion::name($request->get('table_search'))->orderBy('id')->paginate(6);
        return View('administracion.diversion.index',compact('diversion', 'busqueda'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = CategoriaDiversion::where('estado',1)->get();
        
        return View('administracion.diversion.create',compact('categorias'));
    }

    /**
     * Store a newly created resource in storage
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DiversionRequest $request)
    {
          Diversion::create($request->all());

      

        
        return Redirect::to('administracion/diversion/create')->with('mensaje-registro', 'Contenido Registrado Correctamente');


    }

   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $diversion = Diversion::find($id);
        $categorias = CategoriaDiversion::where('estado',1)->get();
        return view('administracion.diversion.edit',compact('diversion','categorias'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DiversionEditRequest $request, $id)
    {
        $diversion = Diversion::find($id);
        $diversion->fill($request->all());
        


        if($diversion->save()){
            return Redirect::to('administracion/diversion')->with('mensaje-registro', 'Contenido Actualizado Correctamente');
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
        $diversion = Diversion::find($id);
        $diversion->estado = 0;
        $diversion->save();

        $message = "Eliminado Correctamente";
        if ($request->ajax()) {
            return response()->json([
                'id'      => $diversion->id,
                'message' => $message
            ]);
        }
    }
}
