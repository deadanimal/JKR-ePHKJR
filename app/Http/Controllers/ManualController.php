<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Manual;

class ManualController extends Controller
{
    public function tunjuk_senarai(Request $request) {
        return view('manual_senarai');
    }

    public function tunjuk_satu(Request $request) {
        return view('manual_satu');
    }

    public function tambah(Request $request) {
        $manual = New Mnual;

        $manual->save();
        $url = '/manual/'.$faq->id;
        return Redirect($url);         
    }

    public function kemaskini(Request $request) {}    

    public function batal(Request $request) {}    
}
