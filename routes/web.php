<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

// Route::match(['get', 'post'], '/', function(){
//     return "POST and GET is allowed";
// });

// Route::any('/', function(){
//     return view('welcome');
// });

// Route::view('/welcome', 'welcome');

// Route::redirect('/welcome', '/'); -> this will return to the get URL

//Route::permanentRedirect('/welcome', '/'); -> sample: http:// -> https://

// Route::get('/users', function(Request $request){ 
//     dd($request);
//     return "goods";
// });

// Route::get('/user/{id}/{group}', function($id,$group){
//     return response($id.'-'.$group, 500);
//                 // ->header('Content-Type', 'text/plain');

// });

// Route::get('/request-json', function(){
//     return response ()->json(['name' => 'Prescribe Digital', 'age' => '22']);
// });

// Route::get('/request-download', function(){
//     $path = public_path().'/sample.txt';
//     $name = 'sample.txt';
//     $headers = array(
//         'Content-type: application/text-plain',
//     );
//     return response()->download($path, $name, $headers);
// });


//default ROUTE
// Route::get('/', function(){
//     return view('welcome');
// });

// Route::get('/users', [UserController::class, 'index'])->name('login');

// Route::get('/users/{id}', [UserController::class, 'show']);

// //Route that will direct to the students
// Route::get('/student/{id}', [StudentController::class, 'show']);



/*
SAMPLE ROUTES:
Route::get();
Route::post();
Route::put();
Route::patch();
Route::delete();
Route::option();

COMMON NAMING ROUTE:
index  - show all data or students
show - show single data or student
create - show a form to add new student/user
store - store a data 
edit - show a form to edit a data
update - update a data
destroy - delete a data
*/

//MAIN ROUTE
Route::get('/', [StudentController::class, 'index']);

//ROUTE FOR LOGIN
Route::get('/login', [UserController::class, 'create']);
