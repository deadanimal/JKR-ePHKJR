<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GPSSPenilaian;

class GPSSPenilaianController extends Controller
{
    public function lantik_pemudah_cara(Request $request) {
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

    public function semak_rawak(Request $request) {
        $projek_id = (int)$request->query('projek');
        $projek = Projek::find($projek_id);        
    }

    public function jana_sijil(Request $request) {
        $projek_id = (int)$request->query('projek');
        $projek = Projek::find($projek_id);        
    }
    
}
