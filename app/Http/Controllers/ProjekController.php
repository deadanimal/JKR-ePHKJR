<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projek;

class ProjekController extends Controller
{
    public function tunjuk_senarai_projek(Request $request) {

        $user = $request->user();

        if ( $user->hasRole('owner') || $user->hasRole('owner') ) {

            $projeks = Projek::all();

        } else if ($user->hasRole('owner')) {

            $projeks = Projek::all();

        } else {

            $projeks = Projek::all();
            
        }               

        return view('projek.senarai', compact('projeks'));
    }

    public function tunjuk_satu_projek(Request $request) {

        // $id = $request->route('id');
        // $projek = Projek::find($id);   

        return view('projek.satu');
    }

    public function cipta_satu_projek(Request $request) {   

        return view('projek.cipta');
    }    

    public function daftar(Request $request) {
        
        $projek = New Projek;
        $projek->save();

        $url = '/projek/'.$projek->id;
        return redirect($url);
    }

    public function pilih_pasukan(Request $request) {
        $id = $request->route('id');
        $projek = Projek::find($id);       
        $url = '/projek/'.$projek->id;
        return redirect($url);         
    }

    public function sah_daftar(Request $request) {
        $id = $request->route('id');
        $projek = Projek::find($id);
        $url = '/projek/'.$projek->id;
        return redirect($url);
    }

    public function gugur(Request $request) {
        $id = $request->route('id');
        $projek = Projek::find($id);
        $url = '/projek/'.$projek->id;
        return redirect($url);
    }

    public function tunjuk_gugur(Request $request) {
        $id = $request->route('id');
        $projek = Projek::find($id);
        $url = '/projek/'.$projek->id;
        return redirect($url);        
    }

    public function sah_gugur(Request $request) {
        $id = $request->route('id');
        $projek = Projek::find($id);
        $url = '/projek/'.$projek->id;
        return redirect($url);        
    }

    public function kemaskini(Request $request) {
        $id = $request->route('id');
        $projek = Projek::find($id);
        $url = '/projek/'.$projek->id;
        return redirect($url);         
    }    

    public function batal(Request $request) {
        $id = $request->route('id');
        $projek = Projek::find($id);
        $url = '/projek/'.$projek->id;
        return redirect($url); 
    }    

    public function tunjuk_gpss_arkitek (Request $request) {
        return view('projek.gpss_arkitek');
    }

    public function tunjuk_gpss_arkitek_step2 (Request $request) {
        return view('projek.gpss_arkitek_step2');
    }
    
    public function tunjuk_gpss_arkitek_step3 (Request $request) {
        return view('projek.gpss_arkitek_step3');
    }
    
    public function tunjuk_gpss_arkitek_step4 (Request $request) {
        return view('projek.gpss_arkitek_step4');
    }    
  
    public function tunjuk_gpss_elektrikal (Request $request) {
        return view('projek.gpss_elektrikal');
    }
    public function tunjuk_gpss_mekanikal (Request $request) {
        return view('projek.gpss_mekanikal');
    }
    public function tunjuk_gpss_sivil (Request $request) {
        return view('projek.gpss_sivil');
    }

    public function tunjuk_gpss_sivil_step2 (Request $request) {
        return view('projek.gpss_sivil_step2');
    }    
}
