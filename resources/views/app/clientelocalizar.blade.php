@extends('app.layouts.basico')

@section('titulo')

@section('conteudo')
            <div class="row justify-content-center align-items-center" style=" width: 95%; margin-left: auto; margin-right: auto;">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Sobrenome</th>
                            <th>E-mail</th>
                            <th>Tel. Contato</th>
                            <th>Endereço</th>
                            <th>Número</th>
                            <th>Complemento</th>
                            <th>Cidade</th>
                            <th>UF</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($clientes as $clientes)
                            <tr>
                                <td>{{ $clientes->id }}</td>
                                <td>{{ $clientes->nome }}</td>
                                <td>{{ $clientes->sobrenome }}</td>
                                <td>{{ $clientes->email }}</td>
                                <td>{{ $clientes->contato }}</td>
                                <td>{{ $clientes->endereco }}</td>
                                <td>{{ $clientes->numero }}</td>
                                <td>{{ $clientes->complemento }}</td>
                                <td>{{ $clientes->cidade }}</td>
                                <td>{{ $clientes->uf }}</td>
                                <td><a href="{{ route('editar', $clientes->id) }}">Editar</a></td>
                                <td><a href="{{ route('excluir', $clientes->id) }}">Excluir</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
@endsection
