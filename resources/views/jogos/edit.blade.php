@extends('layouts.welcome')

@section('content')

<div class="container mt-5">
    <h1>Editar jogo</h1>
    <hr>
    <form action="{{ route('jogos-update', ['id'=>$jogos->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <div class="form-group">
                <label for="nome">nome:</label>
                <input type="text" value="{{ $jogos->nome }}" class="form-control" name="nome" placeholder="Digite seu nome...">
            </div>
            <br>
            <div class="form-group">
                <label for="nome">Categoria:</label>
                <input type="text" value="{{ $jogos->categoria }}" class="form-control" name="categoria" placeholder="Digite uma categoria...">
            </div>
            <br>
            <div class="form-group">
                <label for="nome">Ano de Criação:</label>
                <input type="text" value="{{ $jogos->ano_criacao }}" class="form-control" name="ano_criacao" placeholder="Digite o ano...">
            </div>
            <br>
            <div class="form-group">
                <label for="nome">Valor:</label>
                <input type="text" value="{{ $jogos->valor }}" class="form-control" name="valor" placeholder="Digite seu valor...">
            </div>
            <br>
            <div class="form-group">
                <input type="submit" value="Atualizar" class="btn btn-success" name="submit">
            </div>
        </div>
    </form>
</div>

@endsection