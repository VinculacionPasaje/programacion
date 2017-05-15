<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\User;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = 'administracion';
  
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    
    
    

    /**
     * Todos estos metodos se encuentran en la clase Illuminate\Foundation\Auth\AuthenticatesUsers
     * el metodo Login se lo esta sobreescribiendo
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function login(Request $request)
    {
       
        $data = $request; 
        $mail = $data['email'];
        $usuario = User::where('email',$mail)->get();
        if($usuario->count()) // si al menos hay 1 usuario con ese correo en la BD
        {

             foreach($usuario as $item){
                if($item->estado==0){           // es un usuario registrado pero esta dado de baja
          

                    // If the class is using the ThrottlesLogins trait, we can automatically throttle
                    // the login attempts for this application. We'll key this by the username and
                    // the IP address of the client making these requests into this application.
                    if ($this->hasTooManyLoginAttempts($request)) {
                        $this->fireLockoutEvent($request);

                        return $this->sendLockoutResponse($request);
                    }

                     
                                 
                        $this->incrementLoginAttempts($request); // Si el usuario intenta muchas veces logearse este metodo le pondra un limite de logeo

                     return $this->sendFailedLoginResponse($request); // le mando un mensaje de error
                }else{
                     $this->validateLogin($request);

                    // If the class is using the ThrottlesLogins trait, we can automatically throttle
                    // the login attempts for this application. We'll key this by the username and
                    // the IP address of the client making these requests into this application.
                    if ($this->hasTooManyLoginAttempts($request)) {
                        $this->fireLockoutEvent($request);

                        return $this->sendLockoutResponse($request);
                    }

                    if ($this->attemptLogin($request)) {
                        return $this->sendLoginResponse($request);
                    }

                    // If the login attempt was unsuccessful we will increment the number of attempts
                    // to login and redirect the user back to the login form. Of course, when this
                    // user surpasses their maximum number of attempts they will get locked out.
                    $this->incrementLoginAttempts($request);

                    return $this->sendFailedLoginResponse($request);

            }
        }

        }else{

            // If the class is using the ThrottlesLogins trait, we can automatically throttle
                    // the login attempts for this application. We'll key this by the username and
                    // the IP address of the client making these requests into this application.
                    if ($this->hasTooManyLoginAttempts($request)) {
                        $this->fireLockoutEvent($request);

                        return $this->sendLockoutResponse($request);
                    }
            
            
             
                    $this->incrementLoginAttempts($request);  // Si el usuario intenta muchas veces logearse este metodo le pondra un limite de logeo
             return $this->sendFailedLoginResponse($request); // manda mensaje de error de logeo
        }
       
        
       

               

        
        
    }

}
