<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JalanPenilaian;

class JalanPenilaianController extends Controller
{
    public function lantik_pemudah_cara(Request $request) {
        $projek_id = (int)$request->query('projek');
        $projek = Projek::find($projek_id);        
    }

    public function isi_skor_kad(Request $request) {
        $projek_id = (int)$request->query('projek');
        $projek = Projek::find($projek_id);        
    }

    public function lantik_penilai_jalan(Request $request) {
        $projek_id = (int)$request->query('projek');
        $projek = Projek::find($projek_id);        
    }

    public function menilai(Request $request) {
        $projek_id = (int)$request->query('projek');
        $projek = Projek::find($projek_id);        
    }

    public function mengesah_penilaian(Request $request) {
        $projek_id = (int)$request->query('projek');
        $projek = Projek::find($projek_id);        
    }

    public function merayu(Request $request) {
        $projek_id = (int)$request->query('projek');
        $projek = Projek::find($projek_id);        
    }

    public function mengesah_rayuan(Request $request) {
        $projek_id = (int)$request->query('projek');
        $projek = Projek::find($projek_id);        
    }

    public function jana_sijil(Request $request) {
        $projek_id = (int)$request->query('projek');
        $projek = Projek::find($projek_id);        
    }
}
