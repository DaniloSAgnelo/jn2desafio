<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Http;
use App\Http\Controllers\ClienteController;
use App\Models\Cliente;

class HomeController extends Controller
{
    public function index()
    {
        $clientes = Cliente::all();
        $jsonData = json_decode($clientes);
        return view('home',['clientes'=>$jsonData]);
    }

}
