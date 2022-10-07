<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengguna;
use App\Models\User;

class PenggunaController extends Controller
{
    public function daftar_pengguna(Request $request) {}

    public function tunjuk_daftar(Request $request) {
        return view('pengguna.daftar');
    }

    public function tunjuk_senarai_pengesahan_pendaftaran() {
        return view('pengguna.senarai_pengesahan_pendaftaran');
    }

    public function sahkan_pengguna(Request $request) {}

    public function pengguna_login(Request $request) {}

    public function tunjuk_login(Request $request) {
        return view('pengguna.login');
    }    

    public function pengguna_lupa(Request $request) {}

    public function tunjuk_lupa(Request $request) {
        return view('pengguna.lupa');
    }      
    
    public function ubah_profil(Request $request) {}

    public function tunjuk_profil(Request $request) {
        return view('pengguna.profil');
    }  
    
    public function tunjuk_senarai_profil(Request $request) {
        return view('pengguna.senarai_profil');
    }  
    
    public function ubah_peranan(Request $request) {}
    
    public function sah_ubah_peranan(Request $request) {}

    public function tunjuk_peranan(Request $request) {
        return view('pengguna.peranan');
    }         

}
