<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('pages/index');
    }

    public function nosotros()
    {
        return view('pages/nosotros');
    }

    public function maquinas()
    {
        return view('pages/maquinas');
    }

    public function respuestos()
    {
        return view('pages/repuestos');

        
    }

    public function sugerencias()
    {
        return view('pages/sugerencias');

        
    }
}
