<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

//El método View es mejor por cuestiones de rendimiento realmente, 
//Ya que compacta la función - En especial para sencillas como Copyright, etc

Route::view('/','home')->name('home');
Route::view('/about','about')->name('about');
Route::view('/contact','contact')->name('contact');
Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio');


// Route::resource('projects', 'PortfolioController' )->only(['index', 'show']);  
// // Route::get('/portfolio', PortfolioController::class); 

Route::get('/', function () {
    $nombre = "Jorge";
    return view('home', compact ('nombre'));
})->name('home');

//Compact permite compactar el parámetro y su valor asignado

// // nombre - Es el parámetro que se modifica para obvervar a quien saludamos
// // . = +

// // Route::get('saludo/{nombre?}', function ($nombre = 'Invitado') 
// // {
// //     return "Saludos " . $nombre; 
// // });

// Route :: get('contactame', function(){
//     return "Sección de contactos";
// })->name('contactos');

// //->name ('') nos permite declarar una variable global y no tener que cambiar la
// //url en todos los scripts manualmente

// Route::get('/', function ()
// {
//     echo "<a href='" . route('contactos') . "'> Contactos 1 </a><br>";
//     echo "<a href='" . route('contactos') . "'> Contactos 2</a><br>";
//     echo "<a href='" . route('contactos') . "'> Contactos 3</a><br>";
//     echo "<a href='" . route('contactos') . "'> Contactos 4</a><br>";
//     echo "<a href='" . route('contactos') . "'> Contactos 5</a><br>";  
//     });