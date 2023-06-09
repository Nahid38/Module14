<?php
use App\Http\Controllers\newcontro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Question 1
Route::post('/userinfo',[newcontro::class,'UserInfo']);

// Question 2
Route::post('/useragent',[newcontro::class,'UserAgent']);

// Question 3
Route::get('/query',[newcontro::class,'ApiPoint']);

// Question 4
Route::get('/jsonresponse',[newcontro::class,'JsonResponse']);

// Question 5
Route::post('/upload',[newcontro::class,'FileUploads']);

// Question 6
Route::post('/setcookie',[newcontro::class,'Cookies']);

// Question 7
Route::post('/submit',function(Request $request){
    $email = $request->input('email');
    if($email){
        return array(
            "success"=> true,
            "message"=> "Form submitted successfully."
        );
    }else{
        return "Email must not be empty!";
    }
});