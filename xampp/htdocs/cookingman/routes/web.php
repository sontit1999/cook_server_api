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

Route::get('/', function () {
    return view('welcome');
});
Route::get( 'xin-chao/{ten?}/{namsinh?}' ,'Mycontroller@getxinchao');
Route::get('/tambiet/{ten?}','Mycontroller@gettambiet');
Route::get('/connect','Mycontroller@connectdatabase');
Route::get('/hi','Mycontroller@sayhi');
Route::get('/addrecipe','Mycontroller@addrecipedemo');
Route::get('/recipe','Controller_recipe@index');
Route::get('/recipe/{id}','Controller_recipe@show');

// Route::get( 'nhom/nhom1' , function(){ 
// return 'Nhóm 1 '; 
// });
// Route::get( 'nhom/nhom2' , function(){ 
// return 'Nhóm 2 '; 
// });
// Route::get( 'nhom/nhom3' , function(){ 
// return 'Nhóm 3 '; 
// });
// Route::prefix('nhom')->group(function () {
//     route::get('nhom1',function () {return "Bạn đang ở nhom/nhom1";});
//     route::get('nhom2',function () {return "Bạn đang ở nhom/nhom2";});
//     route::get('nhom3',function () {return "Bạn đang ở nhom/nhom3";});
//     route::get('nhom4',function () {return "Bạn đang ở nhom/nhom4";});
// });
