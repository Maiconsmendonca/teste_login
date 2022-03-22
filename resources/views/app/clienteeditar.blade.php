@extends('app.layouts.basico')

@section('titulo')

@section('conteudo')
        <div class="row justify-content-center align-items-center vh-100">
            <div class="col-12 col-xl-5 col-xxl-8">
                <div>
                    <p class="row justify-content-center fw-bold fs-1" >Editar de Cliente</p>
                </div>
                <form method="post" action="{{ route('confirmar') }}"class="row g-3">
                    <input type="hidden" name="id" value="{{$clientes->id}}">
                    @csrf
                    <div class="col-md-6">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" name="nome" value="{{ $clientes->nome ?? old('nome') }}" class="form-control" id="nome">
                    </div>
                    <div class="col-md-6">
                        <label for="sobrenome" class="form-label">Sobrenome</label>
                        <input type="text" name="sobrenome" value="{{ $clientes->sobrenome ?? old('sobrenome') }}" class="form-control" id="sobrenome">
                    </div>
                    <div class="col-7">
                        <label for="email" class="form-label">E-mail</label>
                        <input type="text" name="email" value="{{$clientes->email ?? old('email') }}" class="form-control" id="email">
                    </div>
                    <div class="col-5">
                        <label for="contato" class="form-label">Tel. Contato</label>
                        <input type="text" name="contato" value="{{ $clientes->contato ?? old('contato') }}" class="form-control" id="contato">
                    </div>
                    <div class="col-10">
                        <label for="endereco" class="form-label">Endereço</label>
                        <input type="text" name="endereco" value="{{ $clientes->endereco ?? old('endereco') }}" class="form-control" id="endereco">
                    </div>
                    <div class="col-2">
                        <label for="numero" class="form-label">Número</label>
                        <input type="text" name="numero" value="{{ $clientes->numero ?? old('numero') }}" class="form-control" id="numero">
                    </div>
                    <div class="col-md-4">
                        <label for="complemento" class="form-label">Complemento</label>
                        <input type="text" name="complemento" value="{{ $clientes->complemento ?? old('complemento') }}" class="form-control" id="complemento">
                    </div>
                    <div class="col-md-7">
                        <label for="cidade" class="form-label">Cidade</label>
                        <input type="text" name="cidade" value="{{ $clientes->cidade ?? old('cidade') }}" class="form-control" id="cidade">
                    </div>
                    <div class="col-md-1">
                        <label for="uf" class="form-label">UF</label>
                        <input type="text" name="uf" value="{{ $clientes->uf ?? old('uf') }}" class="form-control" id="uf">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Alterar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
