<?php

namespace App\Http\Controllers;


use App\Http\Requests\NoticiaRequest;
use App\Http\Requests\NoticiaEditRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Noticia;
use App\Categoria;


class NoticiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $noticias = Noticia::where('estado',1)->orderBy('id')->paginate(6);
        $busqueda= Noticia::name($request->get('table_search'))->orderBy('id')->paginate(6);
        return View('administracion.noticias.index',compact('noticias', 'busqueda'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::where('estado',1)->get();
        
        return View('administracion.noticias.create',compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NoticiaRequest $request)
    {

        $destacado = $request['destacado'];

        if($destacado == 1)
        {
            //el usuario selecciono como destacado

            Noticia::create([
            'titulo' => $request['titulo'],
            'descripcion' => $request['descripcion'],
            'fecha_post' => $request['fecha_post'],
            'destacado' => 1,
            'path'=> $request['path'],
            'contenido'=> $request['contenido'],
            'contador_visitas'=>0,
            'id_categorias'=> $request['id_categorias'],
           
        ]);

            
        }
        else
            {

                //el usuario no selecciono el check
                 Noticia::create([
            'titulo' => $request['titulo'],
            'descripcion' => $request['descripcion'],
            'fecha_post' => $request['fecha_post'],
            'destacado' => 0, //solo cambia esto
            'path'=> $request['path'],
            'contenido'=> $request['contenido'],
            'contador_visitas'=>0,
            'id_categorias'=> $request['id_categorias'],
           
        ]);
                
            }

        
        return Redirect::to('administracion/noticias/create')->with('mensaje-registro', 'Noticia Registrada Correctamente');


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

        $noticia = Noticia::find($id);
        $categorias = Categoria::where('estado',1)->get();
        return view('administracion.noticias.edit',compact('noticia','categorias'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(NoticiaEditRequest $request, $id)
    {
        $data = $request; 
        $destacado = $data['destacado'];
        $noticia = Noticia::find($id);
        
            if($destacado==1){ // si es noticia destacada

                 $noticia->fill([

                    'titulo' => $request['titulo'],
                    'descripcion' => $request['descripcion'],
                    'fecha_post' => $request['fecha_post'],
                    'destacado' => 1,
                    'path'=> $request['path'],
                    'contenido'=> $request['contenido'],
                    'id_categorias'=> $request['id_categorias'],
                   
                ]);

            }else{ // caso contrario no es noticia destacada
            $noticia->fill([ 

                    'titulo' => $request['titulo'],
                    'descripcion' => $request['descripcion'],
                    'fecha_post' => $request['fecha_post'],
                    'destacado' => 0,
                    'path'=> $request['path'],
                    'contenido'=> $request['contenido'],
                    'id_categorias'=> $request['id_categorias'],
                ]);
                
            }
        


        if($noticia->save()){
            return Redirect::to('administracion/noticias')->with('mensaje-registro', 'Noticia Actualizada Correctamente');
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
        $noticia = Noticia::find($id);
        $noticia->estado = 0;
        $noticia->save();

        $message = "Eliminado Correctamente";
        if ($request->ajax()) {
            return response()->json([
                'id'      => $noticia->id,
                'message' => $message
            ]);
        }
    }

     
    
}
