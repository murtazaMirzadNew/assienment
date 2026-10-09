 <?php

// use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/inform',function(){
// return view('inform');



// });

// Route::get('/contact2',function(){
//     return view('contact2');
// });


// Route::get('/main',function(){
//     return view('main');
// });

// Route::get('/responsive',function(){
//     return view('responsive');
// });

// Route::get('/room',function(){
//     return view('room');
// });

// ;


// use App\Http\Controllers\InformController;

// Route::get('/inform', [InformController::class, 'index']);

// use App\Http\Controllers\contact2Controller;


// Route::get('/contact2', [contact2Controller::class, 'index']);

// use App\Http\Controllers\roomController;
// Route::get('/room', [roomController::class, ' index']);

// use App\Http\Controllers\mainController;
// Route::get('main',[mainController::class,'index']);


// use App\Http\Controller\responsiveController;
// Route:: get(' responsive',[responsive::class,'index']);


// Route::resource('inform',[InformController::class,'index']);




// Route::resource('room', roomController::class);


// // use App\Http\Controllers\InformController;
// // use App\Http\Controllers\Contact2Controller;
// // use App\Http\Controllers\RoomController;

// Route::resource('inform', InformController::class);
// Route::resource('contact2', Contact2Controller::class);
// Route::resource('room', RoomController::class);


use Illuminate\Support\Facades\Route;

use App\Http\Controllers\InformController;
use App\Http\Controllers\Contact2Controller;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ResponsiveController;


// صفحه اصلی
Route::get('/', function () {
    return view('welcome');
});


// Resource Routes
Route::resource('inform', InformController::class);
Route::resource('contact2', Contact2Controller::class);
Route::resource('main', MainController::class);
Route::resource('responsive', ResponsiveController::class);
Route::resource('room', RoomController::class);

 ?>












