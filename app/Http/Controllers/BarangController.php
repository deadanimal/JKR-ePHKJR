<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{

    public function upload(Request $request)
    {
        $user_id = $request->user()->id;
        $barang = New Barang;
        $barang->user_id = $user_id;
        $barang->taggable_id = $request->taggable_id;
        $barang->taggable_type = $request->taggable_type;
        $barang->save();

        $barang->url = '';
        $barang->save();

        return Redirect::back()->with('status', 'Profile updated!');
    }

    public function senarai_upload(Request $request)
    {
        $barangs = Barang::all();
        return view('senarai_barang', compact('barangs'));
    }
}
