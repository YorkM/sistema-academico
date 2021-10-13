<?php

namespace App\Controllers;

class Estudiante extends BaseController
{
    public function index()
    {
        return view('estudiante');
    }

    public function matricula()
    {
        return view('matricula');
    }
}