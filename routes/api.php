<?php

use App\CentralLogics\Helpers;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('uploadFiles', function(Request $request){
    $tam_file = $request->file('tam_file');
    if ($request->has('tam_file')) {
        $tam_fileName = Helpers::upload('temp_files/', 'png', $tam_file,$request->file('tam_file')->getClientOriginalName());
        return response()->json(['message' => 'uploaded Successfully', 'file_name'=> $tam_fileName], 200);
    }
});