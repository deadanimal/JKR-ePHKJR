<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faq;

class FaqController extends Controller
{
    public function tunjuk_senarai(Request $request) {
        return view('faq_senarai');
    }

    public function tunjuk_satu(Request $request) {
        return view('faq_satu');
    }

    public function tambah(Request $request) {

        $faq = New Faq;

        $faq->save();
        $url = '/faq/'.$faq->id;
        return Redirect($url);
    }

    public function kemaskini(Request $request) {
        $id = $request->route('id');
        $faq = Faq::find($id);

        $faq->save();
        $url = '/faq/'.$faq->id;
        return Redirect($url);        
    }    

    public function batal(Request $request) {
        $id = $request->route('id');
        $faq = Faq::find($id);

        $faq->delete();
        $url = '/faq';
        return Redirect($url);
    }    
}
