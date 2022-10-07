<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faq;

class FaqController extends Controller
{
    public function tunjuk_senarai(Request $request) {
        $faqs = Faq::all();
        return view('faq_senarai', compact('faqs'));
    }

    public function tunjuk_satu(Request $request) {
        $id = $request->route('id');
        $faq = Faq::find($id);        
        return view('faq_satu', compact('faq'));
    }

    public function tambah(Request $request) {
        $faq = New Faq;

        $faq->save();
        $url = '/faq/'.$faq->id;

        activity()
            ->performedOn($faq)
            ->causedBy($user)
            ->log('FAQ dicipta');

        return Redirect($url);
    }

    public function kemaskini(Request $request) {
        $id = $request->route('id');
        $faq = Faq::find($id);

        $faq->save();
        $url = '/faq/'.$faq->id;

        activity()
            ->performedOn($faq)
            ->causedBy($user)
            ->log('FAQ diubah');

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
