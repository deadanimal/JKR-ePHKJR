<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BangunanPenilaian;
use App\Models\Projek;

class BangunanPenilaianController extends Controller
{
    public function tunjuk_borang(Request $request) {

        $projek_id = (int)$request->query('projek');
        $projek = Projek::find($projek_id);

        return view('bangunan.penilaian', compact('projek'));
    }

    public function lantik_pemudah_cara(Request $request) {
        return Redirect::back()->with('status', 'Pemudah Cara dilantik');
    }

    public function menilai(Request $request) {
        return Redirect::back()->with('status', 'Penilaian dibuat');
    }

    public function mengesah_penilaian(Request $request) {
        return Redirect::back()->with('status', 'Penilaian disahkan');
    }

    public function semak_rawak(Request $request) {
        return Redirect::back()->with('status', 'Penilaian disemak rawak');
    }

    public function jana_sijil(Request $request) {}
}
