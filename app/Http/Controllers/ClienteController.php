<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Cliente;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ClienteController extends Controller
{

    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes.index', compact('clientes'));
    }

}
