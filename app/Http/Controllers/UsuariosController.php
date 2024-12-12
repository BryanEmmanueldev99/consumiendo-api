<?php

namespace App\Http\Controllers;

use App\Jobs\ProcessJobMailTwo;
use App\Jobs\UserJob;
use App\Mail\NewsletterMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $usuario = new User();
        $email = $request->email;
        $usuario->name = $request->name;
        $usuario->email = $request->email;
        $usuario->save();
        //Mail::to($email)->send(new NewsletterMail($usuario));
        UserJob::dispatch($usuario);
        return redirect()->back();
    }

    public function contacto(Request $request)
    {
        $usuario = new User();
        $saludos = "Un parametro";
        $usuario->name = $request->name;
        $usuario->email = $request->email;
        $usuario->save();
        echo "Llegue!";
        ProcessJobMailTwo::dispatch($usuario, $saludos);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
