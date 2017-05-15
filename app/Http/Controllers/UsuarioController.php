<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;

use App\User;
use App\Http\Requests\UsuarioRequest;
use Illuminate\Validation\Rule;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $usuarios = User::where('estado',1)->orderBy('id')->paginate(6);
         $busqueda= User::name($request->get('table_search'))->orderBy('id')->paginate(6);
        return View('administracion.usuarios.index',compact('usuarios', 'busqueda'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return View('administracion.usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsuarioRequest $request)
    {
        User::create([
            'name' => $request['name'],
            'apellido' => $request['apellido'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
            'id_roles'=>'2',
           
        ]);
        return Redirect::to('administracion/usuarios/create')->with('mensaje-registro', 'Usuario Registrado Correctamente');
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
        $usuario = User::find($id);
       
        return view('administracion.usuarios.edit',compact('usuario'));

    }

    /**
     * Update the specified resource in storage.
     *  "Fill" significa literalmente "llenar". Cuando se utiliza el método fill() en un modelo, establece los atributos del modelo a los que le pasemos como argumento en un array. Un ejemplo y quedará claro:
    *   $user = new User();

    *   $user->fill([
    *   'username' => 'IsraelOrtuno',
    *   'email' => 'laraveles@mail.com'
    *   ]);
    *   Esto sería el equivalente a hacer:
    *   $user = new User();

    *   $user->username = 'IsraelOrtuno';
    *   $user->email = 'laraveles@mail.com';
    *   Puede usarse tanto en una instancia nueva de un modelo, como con una existente, simplemente establece atributos de forma masiva.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $data = $request; 
        $password = $data['password'];
        $usuario = User::find($id);
        $this->validate($request, [
                        
                        'name'   => [ 'required', 'max:255' ],
                        'apellido' => [ 'required', 'max:255' ],                      
                        'email'     => [ 'required', Rule::unique('users')->ignore($usuario->id), ],
                        
                    ]);
        
       
            
            if($password==null){ // que no me sobreescriba el password  con un valor null

                 $usuario->fill([

                    'name' => $request['name'],
                    'apellido' => $request['apellido'],
                    'email' => $request['email'],
                   
                ]);

            }else{ // caso contrario que me actualize la nueva contraseña
            $usuario->fill([ 

                    'name' => $request['name'],
                    'apellido' => $request['apellido'],
                    'email' => $request['email'],
                    'password' => bcrypt($request['password']),
                ]);
                
            }
     
        if($usuario->save()){
            return Redirect::to('administracion/usuarios')->with('mensaje-registro', 'Usuario Actualizado Correctamente');
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
        $usuario = User::find($id);
        $usuario->estado = 0;
        $usuario->save();

        $message = "Eliminado Correctamente";
        if ($request->ajax()) {
            return response()->json([
                'id'      => $usuario->id,
                'message' => $message
            ]);
        }
    }
}
