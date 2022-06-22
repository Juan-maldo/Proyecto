<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Redirector;
use Illuminate\Http\Request;
/*Estas son las rutas del sitio web */

/* Home */
Route::view('/', 'welcome');

/* Sesion */
Route::post('login', function() {
    
    $credentials = request()->only('email', 'password');

    if (Auth::attempt($credentials)) {
        request()->session()->regenerate();
        return redirect('/');
    }
    return redirect('login');
});
Route::post('logout', function (Request $request, Redirector $redirect) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return $redirect->to('/');
});




Route::view('login', 'login');
Route::view('register', 'registro');
Route::view('carrito', 'carrito');

/* Guitarras*/
Route::view('Guitarras-Electricas', 'guitarrasElectricas');
Route::view('Guitarras-Acusticas', 'guitarrasElectricas');
Route::view('Cuerdas', 'cuerdas');
Route::view('Pluminas', 'pluminas');

/* Acordeones */
Route::view('Acordeon-Botones', 'acordeonBotones');
Route::view('Acordeon-Teclado', 'acordeonTeclado');
Route::view('Accesorios', 'accesorios');

/* Teclados */
Route::view('Teclados-Digitales', 'tecladosDigitales');
Route::view('Teclados-Acusticos', 'tecladosAcusticos');
Route::view('Teclados-portatiles', 'tecladosPortatiles');



