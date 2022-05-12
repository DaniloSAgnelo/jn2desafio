<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class CadastrarClienteController extends Controller
{
    public function index()
    {
        return Cliente::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'telefone' => 'required',
            'cpf' => 'required',
            'placa_carro' => 'required'
        ]);
        $cliente = Cliente::create($request->all()); 
        return redirect('/home');
    }

    public function show($id)
    {
        return Cliente::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $cliente = Cliente::findOrFail($id);

        $cliente->update($request->all());

        return $cliente;
    }

    public function destroy($id)
    {
        return Cliente::destroy($id);
    }

    public function searchPlaca($placa){
        return Cliente::where('placa_carro','like','%'.$placa)->get();
    }
}
