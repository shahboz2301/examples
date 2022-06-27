<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

use App\Http\Controllers\ShowProfileController;
/*
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CompaniesController;
*/
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
    return view('welcome');
});

//8-dars
Route::get('/home', [HomeController::class, 'index']);

Route::get('/members', [HomeController::class, 'members']);

Route::get('/abaut', [HomeController::class, 'abaut']);

Route::resource('companies',CompaniesController::class);


//    7-dars
Route::get('/user/{name?}', [UserController::class, 'show']);

Route::get('/users', [UserController::class, 'list']);

//5-dars
// bir vazifali rout
Route::get('/show/{id?}', ShowProfileController::class);


//   3-dars
// Route::get('/wyu', function () {
//     return 'salom';
// });
//
//
// Route::get('/name/{men?}', function ($men=null) {
//     return 'hello shahboz,name'.$men;
// });
// Route::get('/search', function (Request $request){
//     return $request->All();
// });
//
//routlarda bir xil rout takrorlansa ularni guruhlab qo'yamiz
// Route::group(['Prefix'=>'dashboard'],function(){
//      Route::get('/users', function(){
//                    return 'Users dashboard';
//              });
//
//       Route::get('/statistic', function(){
//                    return 'Statistic dashboard';
//              });
// });
//


