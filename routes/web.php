<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountMangement;

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
    return view('pages.home');
});
Route::get('/test', function () {
    return view('pages.test');
});
Route::get('/login', function () {
    return view('layouts.withoutnavbar');
});
Route::get('/login', function () {
    return view('layouts.withoutnavbar');
});
Route::get('/AccountTable', function () {
    return view('pages.accountManager');
});
route::get('/logingin',[AccountMangement::class,'login']);
// Route::get('/AccountTable', function () {
//     return view('pages.accountManager');
// });
Route::get('/AccountTable',[AccountMangement::class,'index']);
Route::get('/gg', function () {
    return redirect('/');
});