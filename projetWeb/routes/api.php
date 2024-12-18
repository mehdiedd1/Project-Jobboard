<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
// use Fruitcake\Cors\HandleCors::class,


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    
    return $request->user();
});
Route::get('/test', function()
{
    $userOrders =new UsersController;
    return $userOrders->index();
    
    
    // Do stuff here
});

Route::post('/log', function()
{
    $userOrders =new UsersController;
    return $userOrders->login();
    
    
    // Do stuff here
});

Route::post('/logadmin', function()
{
    $userOrders =new UsersController;
    return $userOrders->loginAdmin();
    
    
    // Do stuff here
});

Route::get('/getannonces', function()
{
    $userOrders =new UsersController;
    return $userOrders->get_annonces();
    
    
    // Do stuff here
});

Route::get('/getentreprise',function()
{
    $userOrders =new UsersController;
    return $userOrders->get_entreprises();
    
});

Route::get('/getutilisateur',function()
{
    $userOrders =new UsersController;
    return $userOrders->get_utilisateurs();
    
});

Route::post('/editannonces', function()
{
    $userOrders =new UsersController;
    return $userOrders->edit_annonces();
    
    
    // Do stuff here
});
Route::post('/register', function()
{
    $userOrders =new UsersController;
    return $userOrders->register();
    
    
    // Do stuff here
});
Route::post('/editentreprises', function()
{
    $userOrders =new UsersController;
    return $userOrders->edit_entreprises();
    
    
    // Do stuff here
});

Route::post('/editutilisateurs', function()
{
    $userOrders =new UsersController;
    return $userOrders->edit_utilisateurs();  
    // Do stuff here
});

Route::post('/adda', function()
{
    $userOrders =new UsersController;
    return $userOrders->adda();  
    // Do stuff here
});


Route::delete('/deleteannonce/{id}',[UsersController::class, "delete_annonce"]);
Route::delete('/deleteentreprise/{id}',[UsersController::class, "delete_entreprise"]);
Route::delete('/deleteutilisateur/{id}',[UsersController::class, "delete_utilisateur"]);

