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
    return "Hola, estas en la raiz del dominio wke";
});

Route::get("/noticias",function(){
    return "estas en la seccion de noticias";
});

Route::post("/noticias",function(){
    return "esta ruta es para agregar nuevas noticias";
});

Route::put("/noticias",function(){
    return "esta ruta es para agregar nuevas noticias";
});


Route::match(["get", "post"],"/blog",function(){
    return "Aqui llegamos con get y post";
});

Route::any("/promociones", function (){
    return "Aqui llegamos con todos los métodos HTTP";
});

Route::get("/usuarios/{id}", function ($id){
    return "Aqui se muestra la información del usuario: ".$id;
});

Route::get("/bienvenida/{nombre?}", function ($nombre = NULL){
    $respuesta = "bienvenido";
    //if ($nombre){
        $respuesta .= " " . $nombre;
    /*else {
        $respuesta .= "  usuario";
    }*/
    return "Bienvenido: " . $nombre;
});