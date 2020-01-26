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
//Admin-Routes
Route::get('/admin', 'admincontroller@allproducts_page1');
Route::get('/admin/allproducts/page1', 'admincontroller@allproducts_page1');
Route::get('/admin/allproducts/page2', 'admincontroller@allproducts_page2');
Route::get('/admin/allproducts/page3', 'admincontroller@allproducts_page3');
Route::get('/admin/allproducts/page4', 'admincontroller@allproducts_page4');
Route::get('/admin/allusers/page4', 'admincontroller@allusers_page4');

Route::get('/admin/dashboard', 'admincontroller@dashboard');
Route::get('/admin_login', 'admincontroller@admin_login');
Route::post('/admin_login_action', 'admincontroller@admin_login_action');

Route::get('/delete_product/{product_id}', 'admincontroller@delete_product');
Route::get('/edit_product/{product_id}', 'admincontroller@edit_product');


Route::get('/admin/allusers/page1', 'admincontroller@allusers_page1');