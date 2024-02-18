<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productosController extends Controller
{
    //
    public function crear()
    {
        return \view("crear");
    }

    public function dataformulario(Request $request)
    {
        return $request->input('nombre');
    }
}
