<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projek;

class ProjekController extends Controller
{
    public function tunjuk_senarai(Request $request) {

        $user = $request->user();

        if ( $user->hasRole('owner') || $user->hasRole('owner') ) {

            $projeks = Projek::all();

        } else if ($user->hasRole('owner')) {

            $projeks = Projek::all();

        } else {

            $projeks = Projek::all();
            
        }               

        return view('projek_senarai', compact('projeks'));
    }

    public function tunjuk_satu(Request $request) {

        $id = $request->route('id');
        $projek = Projek::find($id);   

        return view('projek_satu', compact('projek'));
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
}
