<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
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

        return Cliente::create($request->all());
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

    public function storeCad(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'telefone' => 'required',
            'cpf' => 'required',
            'placa_carro' => 'required'
        ]);
         Cliente::create($request->all()); 
        return redirect('/home');
    }

    public function destroyCad($id)
    {
        $cliente = Cliente::destroy($id);
        return redirect('/home');
    }

    public function getCad($id){
        $cliente = Cliente::findOrFail($id);

        return view('editcliente',[
            'idcliente'=>$cliente->id,
            'nomecliente'=>$cliente->nome,
            'telefonecliente'=>$cliente->telefone,
            'cpfcliente'=>$cliente->cpf,
            'placacliente'=>$cliente->placa_carro
        ]);
    }

    public function updateCad(Request $request, $id)
    {
        $cliente = Cliente::findOrFail($id);

        $cliente->update($request->all());

        return redirect('/home');
    }

}
