<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MaklumBalas;

class MaklumBalasController extends Controller
{
    public function tunjuk_senarai(Request $request) {
        
        $user = $request->user();
        if ( $user->hasRole('owner') || $user->hasRole('owner') ) {
            $maklum_balases = MaklumBalas::all();
        } else if ($user->hasRole('owner')) {
            $maklum_balases = MaklumBalas::all();
        } else {
            $maklum_balases = MaklumBalas::all();
        }        

        return view('maklumbalas_senarai', compact([
            'maklum_balases'
        ]));
    }

    public function tunjuk_satu(Request $request) {
        $id = $request->route('id');
        $maklum_balas = MaklumBalas::find($id);        
        return view('maklumbalas_satu', compact([
            'maklum_balas'
        ]));
    }

    public function tambah(Request $request) {
        $maklum_balas = new MaklumBalas;

        $maklum_balas->save();
        $url = '/maklum-balas/'.$faq->id;
        return Redirect($url);            
    }

    public function kemaskini(Request $request) {
        $id = $request->route('id');
        $maklum_balas = MaklumBalas::find($id);

        $maklum_balas->save();
        $url = '/maklum-balas/'.$faq->id;
        return Redirect($url);         
    }    

    public function batal(Request $request) {
        $id = $request->route('id');
        $maklum_balas = MaklumBalas::find($id);

        $maklum_balas->delete();
        $url = '/maklum-balas';
        return Redirect($url);          
    }    
}
