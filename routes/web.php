<?php

use App\Http\Controllers\CommandeControler;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\ProvisionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Response;
use PhpParser\Builder\Function_;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
//EX 06 )
Route::get('/home', function(){
    return view('home');
});

Route::get('/profile', function () {
    return view('profile', [
        'nom' => 'Mohamed',
        'metier' => 'Développeur Web'
    ]);
});

Route::get('/admin',function(){
    return view('admin.dashboard');
});
Route::get('/status', function () {
    return view('status');
});


Route::get('/stagiaires', function () {
    return view('stagiaires');
});

///////cc1


Route::resource('produits', ProduitController::class);




















/*
//1  bonjour

Route::get('/bonjour', function () {
    return response("Bonjour Laravel", 200);
});

//2 notes
Route::get('/notes', function () {
    return [18, 11, 14, 9];
});


//3acces-refuse (403)
Route::get('/acces-refuse', function () {
    return response("Accès interdit", 403);
});
//4
Route::get('/info', function () {
    return response("Informations", 200)
        ->header('Content-Type', 'text/plain')
        ->header('X-App-Name', 'LaravelApp');
});

//5
Route::get('/user-json', function () {
    return response()->json([
        'nom' => 'Mohamed',
        'email' => 'mohamed@email.com',
        'age' => 22
    ]);
});
//6) /set-cookie
Route::get('/set-cookie', function () {
    return response("Cookie créé")
        ->cookie('lang', 'fr', 30);
});


//7
Route::get('/ancien-home', function () {
    return redirect('/home');
});

*/





//1
Route::get('/infoo', function (Request $request) {
    return [
        'path' => $request->path(),
        'fullUrl' => $request->fullUrl(),
    ];
});


//2
Route::post('/test-post', function (Request $request) {
    return "Requête POST validée";
});

Route::any('/test-post', function () {
    return "erreur";
});


//3
Route::get('/ip', function (Request $request) {
    return $request->ip();
});


//4
Route::post('/login', function (Request $request) {
    $data = $request->only(['email', 'password']);
    return $data;
});











// Home avec controller invoquable
Route::get('/', ProvisionController::class);


Route::resource('commande', CommandeControler::class)->missing(function () {
    return Redirect::route('commande.index');
});

// Controller normal
Route::get('/welcome', [ProduitController::class, 'show']);

Route::get('/about', function () {
    return "À propos";
});

Route::get('/contact', function () {
    return "Page Contact";
});

// Paramètre obligatoire
Route::get('/user/{name}', function ($name) {
    return "Bonjour $name";
});

// Paramètre optionnel
Route::get('/article/{id?}', function ($id = null) {
    return $id ? "Article $id" : "Tous les articles";
});

// Route nommée
Route::get('/dashboard', function () {
    return "Dashboard Page";
})->name('dashboard.home');

Route::post('/test-post', function (Request $request) {
    return "Requête POST validée";
});