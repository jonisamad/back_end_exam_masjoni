<?php

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
use App\Http\Controllers\Controller;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group(['prefix' => 'unit'], function() {
    
     Route::get('/getunit', function(){
        $units=DB::table('unit_rumahs')->get();

        if(empety($units)){
            return response()->json(['message' => 'unit not found'],404);
        }
          return response()->json($units, 200);
     }); 

     Route::post('/createnewunit', 'Productcontroler@CreateUnit');
     Route::post('/deleteunit{id}', 'Productcontroler@DeleteUnit');

});