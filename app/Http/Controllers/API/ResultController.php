<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use RealRashid\SweetAlert\Facades\Alert;

class ResultController extends Controller
{
    public function result(Request $request)
    {
        $response = Http::post('127.0.0.1:8000/api/v1.0/search', [
            'name' => $request->name,
        ])->getBody()->getContents();

        $decoded_response = json_decode($response);
        // Si le produit n'existe pas ou n'est plus en stock
        if (!$decoded_response->status) {
            Alert::toast($decoded_response->message, 'error');
            return back();
        }

        // Sinon
        Alert::toast($decoded_response->message, 'success');
        return view('result', [
            'produit' => $decoded_response->content,
        ]);
    }
}
