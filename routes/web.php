<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

        //Para las vistas principales
        Route::get('/', 'FrontController@index');
        Route::get('administracion','FrontController@admin');
        
        // para los menus de actividades
         Route::get('actividades', 'FrontController@todas_actividades');
         Route::get('actividades/{id}', 'FrontController@actividades');
         Route::get('categoria/{id}', 'FrontController@category');

           // para los menus de atractivos turisticos
         Route::get('atractivosTuristicos', 'FrontController@todos_actractivos');
         Route::get('categoriaTuristico/{id}', 'FrontController@category_turistico');
         Route::get('atractivosTuristicos/{id}', 'FrontController@atractivosTuristicos');

        Route::get('traer', 'FrontController@traer');
        Route::get('material', 'FrontController@material');
        Route::get('preguntas', 'FrontController@pregunta');
        Route::get('mapas', 'FrontController@mapas');
        Route::get('llegar', 'FrontController@llegar');
        Route::get('turismoComunitario', 'FrontController@turismo_comunitario');
        
        Route::get('contactos', 'MailController@index');
        Route::post('send', ['as' => 'send', 'uses' => 'MailController@send'] );


        // Authentication Routes...
        Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
        Route::post('login', 'Auth\LoginController@login');
        Route::post('logout', 'Auth\LoginController@logout')->name('logout');

      
        // Password Reset Routes...
        Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
        Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
        Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
        Route::post('password/reset', 'Auth\ResetPasswordController@reset');

        //vistas de administracion
        Route::resource('administracion/usuarios','UsuarioController');
        Route::resource('administracion/traer','TraerController');
        Route::resource('administracion/turismo','TurismoController');
        Route::resource('administracion/material','MaterialController');
        Route::resource('administracion/categorias','CategoriaController');
        Route::resource('administracion/preguntas','PreguntasController');
        Route::resource('administracion/redes','RedesController');
        Route::resource('administracion/videos','VideoController');
        Route::resource('administracion/footer','FooterController');
        Route::resource('administracion/noticias','NoticiaController');
        Route::resource('administracion/mapas','MapasController');
        Route::resource('administracion/llegar','LlegarController');
        Route::resource('administracion/actividades','ActividadesController');
        Route::resource('administracion/hospedaje','HospedajeController');
         Route::resource('administracion/turistico','TuristicoController');
          Route::resource('administracion/alimentacion','AlimentacionController');
          Route::resource('administracion/diversion','DiversionController');
        Route::resource('administracion/categoriasActividades','CatActividadesController');
        Route::resource('administracion/categoriasTuristicas','CategoriaTuristicaController');
         Route::resource('administracion/categoriasHospedaje','CategoriaHospedajeController');
           Route::resource('administracion/categoriasAlimentacion','CategoriaAlimentacionController');
            Route::resource('administracion/categoriasDiversion','CategoriaDiversionController');


        Route::get('/error',function(){
                abort(404);
                });
