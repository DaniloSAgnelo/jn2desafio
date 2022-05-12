@extends('layouts.main')
@section('title','JN2 Desafio - Clientes')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">

            <table id="listar-usuarios" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th scope="col" style="width:5%">#</th>
                        <th scope="col" style="width:30%">Nome</th>
                        <th scope="col" style="width:15%">Telefone</th>
                        <th scope="col" style="width:15%">CPf</th>
                        <th scope="col" style="width:15%">Placa</th>
                        <th scope="col" style="width:20%">Visualizar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clientes as $item)
                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <td>{{ $item->nome }}</td>
                        <td>{{ $item->telefone }}</td>
                        <td>{{ $item->cpf }}</td>
                        <td>{{ $item->placa_carro}}</td>
                        <td>
                            <a href="/editcliente/{{ $item->id }}" title="Editar"><ion-icon name="create-outline"></ion-icon></a>
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="/cliente/{{ $item->id }}" title="Excluir"><ion-icon name="trash-outline" class="red"></ion-icon></a>
                        </td> 
                    </tr>
                    @endforeach
                </tbody>
            </table>


        </div>
    </div>
    

@endsection
