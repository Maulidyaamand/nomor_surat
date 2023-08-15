<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuratMasukController;
use App\Http\Controllers\SuratKeluarController;
use App\Http\Controllers\SuratKakanwilController;
use App\Http\Controllers\SuratPerintahController;
use App\Http\Controllers\SuratCutiController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

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
    return view('auth.login');
});

Route::middleware(['auth'])->group(function(){  
    
    // Surat Masuk
    Route::get('/sumaumum2023', [SuratMasukController::class, 'indexSumaUmum2023']);
    Route::post('/sumaumum2023', [SuratMasukController::class, 'storeSumaUmum2023']);
    Route::get('/sumaumum2022', [SuratMasukController::class, 'indexSumaUmum2022']);  
    Route::get('/sumaumum2021', [SuratMasukController::class, 'indexSumaUmum2021']);

    Route::get('/sumap2l2023', [SuratMasukController::class, 'indexSumaP2L2023']);
    Route::post('/sumap2l2023', [SuratMasukController::class, 'storeSumap2L2023']);
    Route::get('/sumap2l2022', [SuratMasukController::class, 'indexSumaP2L2022']);
    Route::get('/sumap2l2021', [SuratMasukController::class, 'indexSumaP2L2021']);

    Route::get('/sumapas2023', [SuratMasukController::class, 'indexSumaPas2023']);
    Route::post('/sumapas2023', [SuratMasukController::class, 'storeSumaPas2023']);
    Route::get('/sumapas2022', [SuratMasukController::class, 'indexSumaPas2022']);
    Route::get('/sumapas2021', [SuratMasukController::class, 'indexSumaPas2021']);

    Route::get('/sumaimig2023', [SuratMasukController::class, 'indexSumaImig2023']);
    Route::post('/sumaimig2023', [SuratMasukController::class, 'storeSumaImig2023']);
    Route::get('/sumaimig2022', [SuratMasukController::class, 'indexSumaImig2022']);
    Route::get('/sumaimig2021', [SuratMasukController::class, 'indexSumaImig2021']);

    Route::get('/sumayankum2023', [SuratMasukController::class, 'indexSumaYankum2023']);
    Route::post('/sumayankum2023', [SuratMasukController::class, 'storeSumaYankum2023']);
    Route::get('/sumayankum2022', [SuratMasukController::class, 'indexSumaYankum2022']);
    Route::get('/sumayankum2021', [SuratMasukController::class, 'indexSumaYankum2021']);

    Route::get('/sumaplh2023', [SuratMasukController::class, 'indexSumaPlh2023']);
    Route::post('/sumaplh2023', [SuratMasukController::class, 'storeSumaPlh2023']);
    Route::get('/sumaplh2022', [SuratMasukController::class, 'indexSumaPlh2022']);
    Route::get('/sumaplh2021', [SuratMasukController::class, 'indexSumaPlh2021']);

    

    // Surat Keluar
    Route::get('/sukerumum2023', [SuratKeluarController::class, 'indexSukerUmum2023']);
    Route::post('/sukerumum2023', [SuratKeluarController::class, 'storeSukerUmum2023']);
    Route::get('/sukerumum2022', [SuratKeluarController::class, 'indexSukerUmum2022']);  
    Route::get('/sukerumum2021', [SuratKeluarController::class, 'indexSukerUmum2021']);

    Route::get('/sukerp2l2023', [SuratKeluarController::class, 'indexSukerP2L2023']);
    Route::post('/sukerp2l2023', [SuratKeluarController::class, 'storeSukerP2L2023']);
    Route::get('/sukerp2l2022', [SuratKeluarController::class, 'indexSukerP2L2022']);
    Route::get('/sukerp2l2021', [SuratKeluarController::class, 'indexSukerP2L2021']);

    Route::get('/sukerpas2023', [SuratKeluarController::class, 'indexSukerPas2023']);
    Route::post('/sukerpas023', [SuratKeluarController::class, 'storeSukerPas023']);
    Route::get('/sukerpas2022', [SuratKeluarController::class, 'indexSukerPas2022']);
    Route::get('/sukerpas2021', [SuratKeluarController::class, 'indexSukerPas2021']);

    Route::get('/sukerimig2023', [SuratKeluarController::class, 'indexSukerImig2023']);
    Route::post('/sukerimig2023', [SuratKeluarController::class, 'storeSukerImig2023']);
    Route::get('/sukerimig2022', [SuratKeluarController::class, 'indexSukerImig2022']);
    Route::get('/sukerimig2021', [SuratKeluarController::class, 'indexSukerImig2021']);

    Route::get('/sukeryankum2023', [SuratKeluarController::class, 'indexSukerYankum2023']);
    Route::post('/sukeryankum2023', [SuratKeluarController::class, 'storeSukerYankum2023']);
    Route::get('/sukeryankum2022', [SuratKeluarController::class, 'indexSukerYankum2022']);
    Route::get('/sukeryankum2021', [SuratKeluarController::class, 'indexSukerYankum2021']);

    Route::get('/sukerplh2023', [SuratKeluarController::class, 'indexSukerPlh2023']);
    Route::post('/sukerplh2023', [SuratKeluarController::class, 'storeSukerPlh2023']);
    Route::get('/sukerplh2022', [SuratKeluarController::class, 'indexSukerPlh2022']);
    Route::get('/sukerplh2021', [SuratKeluarController::class, 'indexSukerPlh2021']);

    // Surat Perintah
    Route::get('/suratperintah2023', [SuratPerintahController::class, 'indexSuratPerintah2023']);
    Route::post('/suratperintah2023', [SuratPerintahController::class, 'storeSuratPerintah2023']);
    Route::get('/suratperintah2022', [SuratPerintahController::class, 'indexSuratPerintah2022']);  
    Route::get('/suratperintah2021', [SuratPerintahController::class, 'indexSuratPerintah2021']);

    // Surat Kakanwil
    Route::get('/suratkakanwil2023', [SuratKakanwilController::class, 'indexSuratKakanwil2023']);
    Route::post('/suratkakanwil2023', [SuratKakanwilController::class, 'storeSuratKakanwil2023']);
    Route::get('/suratkakanwil2022', [SuratKakanwilController::class, 'indexSuratKakanwil2022']);  
    Route::get('/suratkakanwil2021', [SuratKakanwilController::class, 'indexSuratKakanwil2021']);

    // Surat Cuti
    Route::get('/suratcuti2023', [SuratCutiController::class, 'indexSuratCuti2023']);
    Route::post('/suratcuti2023', [SuratCutiController::class, 'storeSuratCuti2023']);
    Route::get('/suratcuti2022', [SuratCutiController::class, 'indexSuratCuti2022']);  
    Route::get('/suratcuti2021', [SuratCutiController::class, 'indexSuratCuti2021']);

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');