<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Integrasi;

class IntegrasiController extends Controller
{
    public function panggil_mykj(Request $request) {
        
        $response = Http::withHeaders([
            'X-First' => 'foo',
            'X-Second' => 'bar'
        ])->post('http://example.com/users', [
            'name' => 'Taylor',
        ]);
                
    }

    public function panggil_myskala(Request $request) {

        $response = Http::withHeaders([
            'X-First' => 'foo',
            'X-Second' => 'bar'
        ])->post('http://example.com/users', [
            'name' => 'Taylor',
        ]);
                
    }
}
