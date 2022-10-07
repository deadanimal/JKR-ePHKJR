<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDokumenRequest;
use App\Http\Requests\UpdateDokumenRequest;
use App\Models\Dokumen;

class DokumenController extends Controller
{
    public function upload(Request $request)
    {
        $user = $request->user();
        $user_id = $user->id;

        $dokumen = New Dokumen;
        $dokumen->user_id = $user_id;
        $dokumen->taggable_id = $request->taggable_id;
        $dokumen->taggable_type = $request->taggable_type;
        $dokumen->save();

        $dokumen->url = '';
        $dokumen->save();

        activity()
            ->performedOn($dokumen)
            ->causedBy($user)
            ->log('Dokumen uploaded');        

        return Redirect::back()->with('status', 'Dokumen uploaded');
    }

    public function senarai_upload(Request $request)
    {
        $dokumens = Dokumen::all();
        return view('senarai_dokumen', compact('dokumens'));
    }
}
