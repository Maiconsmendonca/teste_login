@extends('app.layouts.basico')

@section('titulo')

@section('conteudo')
    <div class="container">
        <div class="row justify-content-center align-items-center vh-100">
            <div class="col-12 col-xl-5 col-xxl-5">
                <div>
                    <p class="row justify-content-center fw-bold fs-1" >Consultar Clientes</p>
                </div>
                <div>
                    <p class="row justify-content-center fs-6" >Insira pelo menos um campo para efetuar a pesquisa ou deixe os campos em branco para listar todos os clientes!</p>
                </div>
                <form method="post" action="{{ route('localizar') }}"class="row g-3">
                    @csrf
                    <div class="col-md-6">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" name="nome" class="form-control" id="nome">
                    </div>
                    <div class="col-md-6">
                        <label for="sobrenome" class="form-label">Sobrenome</label>
                        <input type="text" name="sobrenome" class="form-control" id="sobrenome">
                    </div>
                    <div class="col-7">
                        <label for="email" class="form-label">E-mail</label>
                        <input type="text" name="email" class="form-control" id="email">
                    </div>
                    <div class="col-5">
                        <label for="contato" class="form-label">Tel. Contato</label>
                        <input type="text" name="contato" class="form-control" id="contato">
                    </div>
                    <div class="col-10">
                        <label for="endereco" class="form-label">Endereço</label>
                        <input type="text" name="endereco" class="form-control" id="endereco">
                    </div>
                    <div class="col-2">
                        <label for="numero" class="form-label">Número</label>
                        <input type="text" name="numero" class="form-control" id="numero">
                    </div>
                    <div class="col-md-4">
                        <label for="complemento" class="form-label">Complemento</label>
                        <input type="text" name="complemento" class="form-control" id="complemento">
                    </div>
                    <div class="col-md-7">
                        <label for="cidade" class="form-label">Cidade</label>
                        <input type="text" name="cidade" class="form-control" id="cidade">
                    </div>
                    <div class="col-md-1">
                        <label for="uf" class="form-label">UF</label>
                        <input type="text" name="uf" class="form-control" id="uf">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Localizar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
