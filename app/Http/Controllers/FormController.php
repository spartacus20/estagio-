<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FormController extends Controller
{
    function sendData(Request $request){

        $validator = $request->validate([
            'title' => 'required',
            'date' => 'required|after_or_equal:today',
            'start_date' => 'required',
            'finish_date' => 'required|before:start_date',
            'lugares' => 'required',
            'description' => 'required',
        ]);
    

        $lugares = $request->input('lugares');
        $lugaresSelecionados = [];
        if ($lugares) {
            foreach ($lugares as $lugar) {
                $lugaresSelecionados[] = $lugar;
            }
        }
        $lugaresJson = json_encode($lugaresSelecionados);
        $response = Http::post("https://api.ayawma.com/api/formulario/add", [
            'title' => $request->titulo,
            'date' => $request->data,
            'start_date' => $request->data_inicio,
            'finish_date' => $request->data_fim,
            'places_publish' =>  $lugaresJson,
            'description' => $request->descricao,
        ]); 
        dd($response); 

    }
}
