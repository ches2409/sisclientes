<?php
use App\Http\Controllers\EmpleadosController;
use App\Http\Controllers\TiposproyController;

Route::get('proyectos1', function(){
    // $tipoproyecto = \App\Tipoproyecto::findOrfail(1);
    // return $tipoproyecto-> proyectos;

    // $proyecto = \App\Proyecto::findOrfail(1);
    // return $proyecto-> tipoproyecto;

    return \App\Proyecto::with('tipoproyecto')->get();
    // return \App\Tipoproyecto::with('proyectos')->get();

});

Route::get('tareas1', function () {
    // return \App\Tarea::with('tareatipo')->get();
    return \App\Tareatipo::with('tareas')->get();
});

Route::get('cargos1', function(){
    return \App\Cargo::with( 'empleados')->get();
    // return \App\Empleado::with('cargo')->get();
});

Route::get('/', 'PagesController@HOME')->name('inicio');


/* SECTION Tipos de Proyectos
+==================+
|    RUTA PARA     |
|TIPOS DE PROYECTOS|
+==================+
*/

Route::get('tiposProyectos', 'TiposproyController@index')->name('tiposProyectos.index');
Route::get('tiposProyectos/create', 'TiposproyController@create')->name('tiposProyectos.create');
Route::post('tiposProyectos', 'TiposproyController@store')->name('tiposProyectos.store');
Route::get('tiposProyectos/{id}', 'TiposproyController@show')->name('tiposProyectos.show');
Route::get('tiposProyectos/{id}/edit', 'TiposproyController@edit')->name('tiposProyectos.edit');
Route::put('tiposProyectos/{id}', 'TiposproyController@update')->name('tiposProyectos.update');
Route::delete('tiposProyectos/{id}', 'TiposproyController@destroy')->name('tiposProyectos.destroy');

Route::resource('proyectos', 'ProyectosController');
// Route::get('proyectos/create', 'ProyectosController@create')->name('proyectos.create');
// Route::post('proyectos', 'ProyectosController@store')->name('proyectos.store');
// Route::get('proyectos', 'ProyectosController@index')->name('proyectos.index');
// Route::get('proyectos/{id}', 'ProyectosController@show')->name('proyectos.show');
// Route::get('proyectos/{id}/edit', 'ProyectosController@edit')->name('proyectos.edit');
// Route::put('proyectos/{id}', 'ProyectosController@update')->name('proyectos.update');
// Route::delete('proyectos/{id}', 'ProyectosController@destroy')->name('proyectos.destroy');

Route::resource('empleados', 'EmpleadosController');
// Route::get('empleados/create', 'EmpleadosController@create')->name('empleados.create');
// Route::post('empleados', 'EmpleadosController@store')->name('empleados.store');
// Route::get('empleados', 'EmpleadosController@index')->name('empleados.index');
// Route::get('empleados/{id}', 'EmpleadosController@show')->name('empleados.show');
// Route::get('empleados/{id}edit', 'EmpleadosController@edit')->name('empleados.edit');
// Route::put('empleados/{id}', 'EmpleadosController@update')->name('empleados.update');
// Route::delete('empleados/{id}', 'EmpleadosController@destroy')->name('empleados.destroy');

// ->except('create', 'store', 'show', 'edit', 'update', 'destroy')

Route::resource('tareatipos', 'TareatiposController');

Route::resource('tareas', 'TareasController');

Route::resource('cargos', 'CargosController');

Route::resource('tiempoinversiones', 'TiempoinversionesController');

Route::resource('clasificaciones', 'ClasificacionesController');

Route::resource('propiedadestados', 'PropiedadestadosController');

Route::resource('tipoclientes', 'TipoclientesController');

Route::resource('propventas', 'PropventasController');

Route::resource('referidos', 'ReferidosController');

Route::resource('dispopagos', 'DispopagosController');

Route::resource('clientes', 'ClientesController');

// rutas de autenticación
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');


// Path resource for vehiculos
Route::resource('vehiculos', 'VehiculosController');
// Path resource for usuarios
Route::resource('usuarios', 'UsuariosController')->except('create', 'store', 'show', 'edit', 'update', 'destroy');
