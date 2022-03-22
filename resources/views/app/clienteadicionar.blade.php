@extends('app.layouts.basico')

@section('titulo')

@section('conteudo')
<div class="container">
    <div class=" row justify-content-center">
        @if(session('mensagem'))
            <div class="alert alert-success">
                <p>{{session('mensagem')}}</p>
            </div>
        @endif
    </div>
    <div class="row justify-content-center align-items-center vh-100">
        <div class="col-12 col-xl-5 col-xxl-8">
            <div>
                <p class="row justify-content-center fw-bold fs-1" >Cadastro de Clientes</p>
            </div>
            <form method="post" action="{{ route('cadastrar') }}" class="row g-3">
                @csrf
                <div class="col-md-6">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" name="nome" value="{{ old('nome') }}" class="form-control" id="nome">
                </div>
                <div class="col-md-6">
                    <label for="sobrenome" class="form-label">Sobrenome</label>
                    <input type="text" name="sobrenome" value="{{ old('sobrenome') }}" class="form-control" id="sobrenome">
                </div>
                <div class="col-7">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="text" name="email" value="{{ old('email') }}" class="form-control" id="email">
                </div>
                <div class="col-5">
                    <label for="contato" class="form-label">Tel. Contato</label>
                    <input type="text" name="contato" value="{{ old('contato') }}" class="form-control" id="contato">
                </div>
                <div class="col-10">
                    <label for="endereco" class="form-label">Endereço</label>
                    <input type="text" name="endereco" value="{{ old('endereco') }}" class="form-control" id="endereco">
                </div>
                <div class="col-2">
                    <label for="numero" class="form-label">Número</label>
                    <input type="text" name="numero" value="{{ old('numero') }}" class="form-control" id="numero">
                </div>
                <div class="col-md-4">
                    <label for="complemento" class="form-label">Complemento</label>
                    <input type="text" name="complemento" value="{{ old('complemento') }}" class="form-control" id="complemento">
                </div>
                <div class="col-md-7">
                    <label for="cidade" class="form-label">Cidade</label>
                    <input type="text" name="cidade" value="{{ old('cidade') }}" class="form-control" id="cidade">
                </div>
                <div class="col-md-1">
                    <label for="uf" class="form-label">UF</label>
                    <input type="text" name="uf" value="{{ old('uf') }}" class="form-control" id="uf">
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                </div>
            </form>
                <div> {{ $errors->has('nome') ? $errors->first('nome') : '' }} </div>
                <div> {{ $errors->has('sobrenome') ? $errors->first('sobrenome') : '' }} </div>
                <div> {{ $errors->has('email') ? $errors->first('email') : '' }} </div>
                <div> {{ $errors->has('contato') ? $errors->first('contato') : '' }} </div>
                <div> {{ $errors->has('endereco') ? $errors->first('emdereco') : '' }} </div>
                <div> {{ $errors->has('numero') ? $errors->first('numero') : '' }} </div>
                <div> {{ $errors->has('complemento') ? $errors->first('complemento') : '' }} </div>
                <div> {{ $errors->has('cidade') ? $errors->first('cidade') : '' }} </div>
                <div> {{ $errors->has('uf') ? $errors->first('uf') : '' }} </div>
        </div>
    </div>
</div>
@endsection
