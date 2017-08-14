<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class EntradaController extends Controller
{
    public function index()
    {
        return view('entrada');
    }
}
