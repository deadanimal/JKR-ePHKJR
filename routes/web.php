<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\ProjekController;
use App\Http\Controllers\DokumenController;

use App\Http\Controllers\LaporanController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\HebahanController;
use App\Http\Controllers\IntegrasiController;
use App\Http\Controllers\MaklumBalasController;
use App\Http\Controllers\ManualController;

use App\Http\Controllers\BangunanPenilaianController;
use App\Http\Controllers\GPSSPenilaianController;
use App\Http\Controllers\JalanPenilaianController;

use App\Http\Controllers\BangunanVerifikasiController;
use App\Http\Controllers\GPSSVerifikasiController;
use App\Http\Controllers\JalanVerifikasiController;

use App\Http\Controllers\BangunanValidasiController;


Route::post('/pengguna-login', [PenggunaController::class, 'pengguna_login']);
Route::get('/pengguna-logout', [PenggunaController::class, 'pengguna_logout']);


Route::middleware(['auth'])->group(function () {

    Route::get('/', [PenggunaController::class, 'tunjuk_home']);

    Route::get('profil', [PenggunaController::class, 'tunjuk_profil']);
    Route::get('profil/senarai', [PenggunaController::class, 'tunjuk_senarai_profil']);
    Route::put('profil/{id}/peranan', [PenggunaController::class, 'tukar_peranan']);
    Route::get('profil/senarai-tukar-peranan', [PenggunaController::class, 'tunjuk_senarai_tukar_peranan']);


    Route::get('projek', [ProjekController::class, 'tunjuk_senarai_projek']);
    Route::get('projek/cipta', [ProjekController::class, 'cipta_satu_projek']);
    Route::post('projek', [ProjekController::class, 'cipta_projek']);
    Route::get('projek/{id}', [ProjekController::class, 'tunjuk_satu_projek']);
    Route::put('projek/{id}', [ProjekController::class, 'kemaskini_projek']);
    Route::put('projek/{id}/gugur', [ProjekController::class, 'gugur_projek']);
    Route::put('projek/{id}/sah', [ProjekController::class, 'sah_projek']);

    Route::get('projek/{id}/gpss/arkitek', [ProjekController::class, 'tunjuk_gpss_arkitek']);
    Route::get('projek/{id}/gpss/elektrikal', [ProjekController::class, 'tunjuk_gpss_elektrikal']);
    Route::get('projek/{id}/gpss/mekanikal', [ProjekController::class, 'tunjuk_gpss_mekanikal']);
    Route::get('projek/{id}/gpss/sivil', [ProjekController::class, 'tunjuk_gpss_sivil']);

    Route::get('projek/{id}/gpss/jalan', [ProjekController::class, 'tunjuk_gpss_jalan']);
    Route::get('projek/{id}/gpss/jalan-elektrikal', [ProjekController::class, 'tunjuk_gpss_jalan_elektrikal']);
    Route::get('projek/{id}/gpss/jalan-struktur', [ProjekController::class, 'tunjuk_gpss_jalan_struktur']);

    Route::get('projek/{id}/jalan/baru', [ProjekController::class, 'tunjuk_jalan_baru']);
    Route::get('projek/{id}/jalan/lama', [ProjekController::class, 'tunjuk_jalan_lama']);



    Route::get('faq', [FaqController::class, 'tunjuk_senarai_faq']);
    Route::post('faq', [FaqController::class, 'cipta_faq']);
    Route::get('faq/{id}', [FaqController::class, 'tunjuk_satu_faq']);
    Route::put('faq/{id}', [FaqController::class, 'kemaskini_faq']);   

    Route::get('hebahan', [HebahanController::class, 'tunjuk_senarai_hebahan']);
    Route::post('hebahan', [HebahanController::class, 'cipta_hebahan']);
    Route::get('hebahan/{id}', [HebahanController::class, 'tunjuk_satu_hebahan']);
    Route::put('hebahan/{id}', [HebahanController::class, 'kemaskini_hebahan']);   

    Route::get('maklum-balas', [MaklumBalasController::class, 'tunjuk_senarai_maklum_balas']);
    Route::post('maklum-balas', [MaklumBalasController::class, 'cipta_maklum_balas']);
    Route::get('maklum-balas/{id}', [MaklumBalasController::class, 'tunjuk_satu_maklum_balas']);
    Route::put('maklum-balas/{id}', [MaklumBalasController::class, 'kemaskini_maklum_balas']);   

    Route::get('manual', [ManualController::class, 'tunjuk_senarai_manual']);
    Route::post('manual', [ManualController::class, 'cipta_manual']);
    Route::get('manual/{id}', [ManualController::class, 'view_profile']);
    Route::put('manual/{id}', [ManualController::class, 'view_profile']);  

    Route::get('log', [PenggunaController::class, 'tunjuk_log']);
    



        
});



require __DIR__.'/auth.php';
