<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hebahan;

class HebahanController extends Controller
{
    public function tunjuk_senarai(Request $request) {
        $hebahans = Hebahan::all();        
        return view('hebahan_senarai', compact('hebahans'));
    }

    public function tunjuk_satu(Request $request) {
        $id = $request->route('id');
        $hebahan = Hebahan::find($id);
        return view('hebahan_satu', compact('hebahan'));
    }

    public function tambah(Request $request) {
        $hebahan = New Hebahan;

        $hebahan->save();
        $url = '/hebahan/'.$faq->id;
        return Redirect($url);        
    }

    public function kemaskini(Request $request) {
        $id = $request->route('id');
        $hebahan = Hebahan::find($id);

        $hebahan->save();
        $url = '/hebahan/'.$faq->id;
        return Redirect($url);           
    }    

    public function batal(Request $request) {
        $id = $request->route('id');
        $hebahan = Hebahan::find($id);

        $hebahan->delete();
        $url = '/hebahan';
        return Redirect($url);           
    }    
}
