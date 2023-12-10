<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\FoodController;
use League\CommonMark\Extension\Footnote\Renderer\FootnoteRenderer;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
/*Ruta principal*/
Route::get('/', [FoodController::class,'principal'])->name('food.principal');
/*Ruta para ver el nosotros de la pagina*/
Route::get('food/we', [FoodController::class,'we'])->name('food.we');
/*Para la muestra de la sección de platos*/
Route::get('food/list', [FoodController::class,'list'])->name('food.list');
/*Primera sección de platos-desayuno*/
Route::get('food/breakfast',[FoodController::class,'breakfast'])->name('food.breakfast');
/*Segunda sección de platos-main */
Route::get('food/main',[FoodController::class,'main'])->name('food.main');
/*Tercera sección de platos-drink*/
Route::get('food/drink',[FoodController::class,'drink'])->name('food.drink');
/*Para la muestra del formulario donde se registrará los comentarios de los clientes*/
Route::get('food/comments',[FoodController::class,'comment'])->name('food.comment');
/*Formulario para la actualización de los datos*/
Route::get('food/{dni}/update',[FoodController::class,'foodFormUpdate'])->name('food.foodFormUpdate');
/*Formulario para el inicio de sesion*/
Route::get('food/sesion',[FoodController::class,'sesion'])->name('food.sesion');
/*Para la muestra de todos los registros de clientes*/
Route::get('food/records',[FoodController::class,'record'])->name(('food.record'));
/*Para tener todos los registros*/
Route::get('food/found',[FoodController::class,'found'])->name('food.found');
/*Para registrar los comentarios de los clientes*/
Route::post('food/add',[FoodController::class,'add'])->name('food.add');
/*Para listar el cliente, email y comentario */
Route::get('food/listClient',[FoodController::class,'listClient'])->name('food.listClient');
/*Para actualizar los registros de un cliente*/
Route::put('food/{dni}/update',[FoodController::class,'updateRecord'])->name('food.updateRecord');
/*Para eliminar los registros de un cliente*/
Route::delete('food/{dni}/deleteRecord',[FoodController::class,'deleteRecord'])->name('food.deleteRecord');
/*Para mostrar un reporte*/
Route::get('food/{dni}/showReport',[FoodController::class,'showReport'])->name('food.showReport');
/*Vista donde se mostrará el reporte */
Route::get('food/report',[FoodController::class, 'foodReport'])->name('food.report');