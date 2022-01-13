<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;

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



# Method GET All Resource / Mengaksses semua Resource 
# keterangan yang di ubah nya :
// function(){
//     echo "Menambahkan data patient ";
// }
# diganti menjadi [PatientController::class, 'index'] // index adalah nama pada file controller harus sama
Route::get('/patients',[PatientController::class, 'index']);


# Method POST / Untuk menambahkan resource
Route::post('/patients', [PatientController::class, 'store']);


# Method GET Detail Resource / Mengakses Resource berdasarkan id nya
Route::get('/patients/{id}', [PatientController::class, 'show']);



# Method PUT / untuk mengupdate data
Route::put('/patients/{id}', [PatientController::class, 'update']);


# Method Delete / menghapus data berdasarkan id
Route::delete('/patients/{id}', [PatientController::class, 'destroy']);



// dari sini harus ada yang diubah search


