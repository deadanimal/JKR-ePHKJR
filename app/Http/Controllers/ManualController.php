<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Manual;

class ManualController extends Controller
{
    public function tunjuk_senarai(Request $request) {
        
        $manuals = Manual::all();
        return view('manual_senarai', compact('manuals'));

    }

    public function tunjuk_satu(Request $request) {
        
        $id = $request->route('id');
        $manual = Manual::find($id);          
        return view('manual_satu', compact('manual'));
        
    }

    public function tambah(Request $request) {
        $manual = New Manual;

        $manual->save();
        $url = '/manual/'.$faq->id;
        return Redirect($url);         
    }

    public function kemaskini(Request $request) {
        $manual = New Manual;

        $manual->save();
        $url = '/manual/'.$faq->id;
        return Redirect($url);          
    }    

    public function batal(Request $request) {
        $manual = New Manual;
        $manual->active = false;
        $manual->save();
        $url = '/manual/'.$faq->id;
        return Redirect($url);  
    }    
}
