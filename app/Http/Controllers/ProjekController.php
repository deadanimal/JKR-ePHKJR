<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projek;

class ProjekController extends Controller
{
    public function tunjuk_senarai(Request $request) {
        return view('projek_senarai');
    }

    public function tunjuk_satu(Request $request) {
        return view('projek_satu');
    }

    public function daftar(Request $request) {}

    public function pilih_pasukan(Request $request) {}

    public function sah_daftar(Request $request) {}

    public function gugur(Request $request) {}

    public function tunjuk_gugur(Request $request) {}

    public function sah_gugur(Request $request) {}

    public function kemaskini(Request $request) {}    

    public function batal(Request $request) {}    
}
