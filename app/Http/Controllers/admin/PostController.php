<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PostController extends Controller
{
    public function index()
    {
       $res = Http::get('https://jsonplaceholder.typicode.com/posts');
       $java = Http::get('http://localhost:3009/api/docentes');
       $data = $res->json();
       $docentes_java = $java->json();
       

   // dd($docentes_java);
       
       return view('welcome'); 
    }

    public function store(Request $request)
    {
        //$api = Http::post('https://jsonplaceholder.typicode.com/posts', $request);
        $api_java = Http::post('http://localhost:3009/api/docentes', $request);
        return "Docente agregado desde Laravel!";
    }

    public function update(Request $request, $id)
    {
        $update_docente = Http::put('http://localhost:3009/api/docentes/'.$id);
        return ['respuesta' => 'actualizado el docente'];
    }

    public function destroy($id)
    {
        $delete = Http::delete('http://127.0.0.1:8000/api/post/'.$id);
    }

    public function cliente_json() 
    {
        //CON PHP CRUDO
        $api_json = "https://jsonplaceholder.typicode.com/posts";
        $ch = curl_init($api_json);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $res = curl_exec($ch);

        curl_close($ch);
        $data = json_decode($res, true);

      
        //return view('otra_pagina', compact('data'));
    }
}
