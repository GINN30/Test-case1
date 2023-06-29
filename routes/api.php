<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\KaryawanController;
use App\Http\Resources\KaryawanResource;
use App\Models\Karyawan;
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

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {

    // Display a list of Karyawan
    Route::get('/karyawan', function () {
        $karyawan = Karyawan::all();
        return KaryawanResource::collection($karyawan);
    });

    // Add New Karyawan
    Route::post('/karyawan', function (Request $request) {
        $karyawan = Karyawan::create($request->all());
        return new KaryawanResource($karyawan);
    });

    // Edit Karyawan by Id
    Route::put('/karyawan/{id}', function (Request $request, $id) {
        $karyawan = Karyawan::findOrFail($id);
        $karyawan->update($request->all());
        return new KaryawanResource($karyawan);
    });
});
