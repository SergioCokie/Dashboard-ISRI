<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;


class SistemaController extends Controller
{
    //
    public function index()
    {
        # code...
        return Inertia::render("SystemsISRI/Sistema1/IndexSistema1");

    }
}