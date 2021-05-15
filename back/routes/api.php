<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('/ok', function(){

    return ['message' => 'hello'];
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/meals',function(){
    $user = DB::table('meals')->get();
    
    return response()->json($user);

});
Route::post('/post_meal/{user}',function( $user){
    $ok = $user;
    
    print_r($ok);
    return response()->json($users);

});

