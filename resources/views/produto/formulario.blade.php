@extends('layout/principal')
@section('conteudo')
    <h1>Novo conteúdo</h1>
    <form action="/produtos/adiciona" method="POST">
        @csrf
        <div class="form-group">
            <label for="">Nome </label>
            <input type="text" name="nome" id="nome" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Descrição </label>
            <textarea name="descricao" id="descricao" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="">Valor </label>
            <input type="text" name="valor" id="valor" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Quantidade </label>
            <input type="text" name="quantidade" id="quantidade" class="form-control">
        </div>
        <div class="form-group mt-3">
            <button type="submit" class="btn btn-primary btn-block">Adicionar</button>
        </div>

    </form>
@endsection
