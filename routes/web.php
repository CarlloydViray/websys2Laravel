<?php

use App\Http\Controllers\employeesController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\validationTestController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/bye', function () {
    $string = "this is a passed parameter from web.php to views";
    $add = "nothing";
    return view('bye', ['string' => $string, 'add' => $add]);
});

Route::get('/user/{id}', function ($id) {
    return 'User ID is: ' . $id;
});

Route::get('/posts/{post}/comments/{comment}', function ($postID, $commentID) {
    return 'Post ID is: ' . $postID . " and Comment ID is: " . $commentID;
});

Route::get('/nullVal/{nullVal?}', function ($nullVal = null) {
    return 'and Comment ID is: ' . $nullVal;
});

//checkpoint assignment 1
Route::get('/customer/{cusID}/{cusName}/{cusAddress}', function ($cusID, $cusName, $cusAddress) {
    return view('customer', ['cusID' => $cusID, 'cusName' => $cusName, 'cusAddress' => $cusAddress]);
});

Route::get('/item/{itemNo}/{itemName}/{itemPrice}', function ($itemNo, $itemName, $itemPrice) {
    return view('item', ['itemNo' => $itemNo, 'itemName' => $itemName, 'itemPrice' => $itemPrice]);
});

Route::get('/order/{cusID}/{cusName}/{orderNo}/{date}', function ($cusID, $cusName, $orderNo, $date) {
    return view('order', ['cusID' => $cusID, 'cusName' => $cusName, 'orderNo' => $orderNo, 'date' => $date]);
});

Route::get('/orderDetails/{transNo}/{orderNo}/{itemID}/{itemName}/{itemPrice}/{qty}', function ($transNo, $orderNo, $itemID, $itemName, $itemPrice, $qty) {
    return view('orderDetails', ['transNo' => $transNo, 'orderNo' => $orderNo, 'itemID' => $itemID, 'itemName' => $itemName, 'itemPrice' => $itemPrice, 'qty' => $qty]);
});
//endof checkpoint assignment 1


//using controllers. include `use App\Http\Controllers\PostsController;`
Route::get('/postIndex', [PostsController::class, 'index']);
Route::get('/parameterController/{id}', [PostsController::class, 'showId']);
Route::get('/about', [PostsController::class, 'display']);
Route::get('/details', [PostsController::class, 'details']);

//using another controller called students
Route::get('/student',[StudentController::class, 'display']);
Route::get('/student/{id}',[StudentController::class, 'displayId']);

//Activity 2
Route::post('/information',[registerController::class,'register']);

//first parameter is the name in the url, second parameter is the registration.blade.php
Route::view('/registration','registration');

//endof Act2

Route::post('/validationTestView',[validationTestController::class,'regValidate']);
Route::view('/validationTest','validationTest');

//routing models
Route::get('/createNew', [employeesController::class,'create']);
Route::post('createUser',[employeesController::class, 'store']);
Route::get('/employeesView', [employeesController::class,'index']);