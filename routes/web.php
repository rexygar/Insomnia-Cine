<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('dashboard.index');
});

//Peliculas
Route::get('/Crear_pelicula', function () {
    return view('APP.Peliculas.Create');
});
Route::get('/Listar_pelicula', [App\Http\Controllers\PeliculaController::class, 'listar'])->name('pelicula.listar');
Route::get('/Modificar_pelicula', function () {
    return view('APP.Peliculas.Update');
});
// Route::get('/Eliminar_pelicula', function () {
//     return view('APP.Peliculas.Create');
// });


//Generos
Route::get('/Crear_Generos', function () {
    return view('APP.Generos.Create');
});
Route::get('/Listar_Generos', function () {
    return view('APP.Generos.Listar');
});
Route::get('/Modificar_Generos', function () {
    return view('APP.Generos.Update');
});
// Route::get('/Eliminar_Generos', function () {
//     return view('APP.Generos.Create');
// });

//Noticias
Route::get('/Crear_Noticias', function () {
    return view('APP.Noticias.Create');
});
Route::get('/Listar_Noticias', [App\Http\Controllers\NoticiaController::class, 'listar'])->name('noticia.listar');
Route::get('/Modificar_Noticias', function () {
    return view('APP.Noticias.Update');
});
// Route::get('/Eliminar_Noticias', function () {
//     return view('APP.Noticias.Create');
// });

//Subscripcion
Route::get('/Crear_Subscripcion', function () {
    return view('APP.Subscripciones.Create');
});
Route::get('/Listar_Subscripcion', function () {
    return view('APP.Subscripciones.Listar');
});
Route::get('/Modificar_Subscripcion', function () {
    return view('APP.Subscripciones.Update');
});
// Route::get('/Eliminar_Subscripcion', function () {
//     return view('APP.Subscripciones.Create');
// });

//Usuarios
Route::get('/Crear_Usuarios', function () {
    return view('APP.Usuarios.Create');
});
Route::get('/Listar_Usuarios', function () {
    return view('APP.Usuarios.Listar');
});
Route::get('/Modificar_Usuarios', function () {
    return view('APP.Usuarios.Update');
});
// Route::get('/Eliminar_Usuarios', function () {
//     return view('APP.Usuarios.Create');
// });
// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
