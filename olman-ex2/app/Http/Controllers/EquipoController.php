<?php

namespace App\Http\Controllers;

use App\Models\Equipo;

class EquipoController extends Controller
{
    public function index()
    {
        $equipos = Equipo::orderBy('id')->get();
        return view('equipos.index', ['equipos' => $equipos]);
    }
}