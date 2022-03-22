@extends('layouts.basico')

@section('titulo')

@section('conteudo')
    <div class="container">
        <div class="row justify-content-center align-items-center vh-100">
            <div class="col-12 col-sm-10 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                <form action={{ route('login') }} method="post">
                    @csrf
                    <div class="row mb-3">
                        <label for="name" class="col-auto">Usuário</label>
                        <div class="col-sm-10">
                            <input name="usuario" type="text" class="form-control" id="name">
                            <label for="password" class="col-auto">Password</label>
                        </div>
                        <div class="col-sm-10">
                            <input name="senha" type="password" class="form-control" id="password">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
                {{ isset($erro) && $erro != '' ? $erro : '' }}
            </div>
        </div>
    </div>
@endsection
