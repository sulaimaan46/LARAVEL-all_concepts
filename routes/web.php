<?php

namespace App\Http\Controllers;

//use App\Models\RegUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Route;
use App\Jobs\SendEmailJob;

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


Route::get('/form', 'CustomerController@create');

Route::post('/formrequestdate','CustomerController@index');

// Route::post('/formrequestperson','CustomerController@index');

Route::get('/student', function () {
    return view('student');
});

Route::get('/studentdetails', 'StudentController@index');

Route::get('/studentsdetails', 'StudentController@show');
Route::post('/insert_student', 'CustomerController@store');

Route::get('/index', function () {
    return view('index');
});
Route::get('/email','SendmailController@create');

//Route::post('/emailform','SendmailController@sendmail');

Route::post('/emailform', function(){

    dispatch_now(new SendEmailJob());

    return "Email Send Sucessfully";


});

Route::get('/data','StudentController@create');

//Route::get('/data',function (){
//
//    \App\Models\book::create([
//        'book_name' => 'Writter',
//        'book_title' => 'Everybody Writes',
//        'price' => '499'
//    ]);
//    \App\Models\book::create([
//        'book_name' => 'Love',
//        'book_title' => 'Half Lover',
//        'price' => '2
//        99'
//    ]);
//
//});

