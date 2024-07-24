@extends('layout.principal')
@section('conteudo')
<h1>Editar Produto</h1>
<form action="/produtos/atualiza/{{$produto->id}}" method="POST">
    @csrf
    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" class="form-control" value="{{ old('nome', $produto->nome) }}">
    </div>
    <div class="form-group">
        <label for="descricao">Descrição</label>
        <textarea name="descricao" id="descricao" class="form-control">{{ old('descricao', $produto->descricao) }}</textarea>
    </div>
    <div class="form-group">
        <label for="valor">Valor</label>
        <input type="text" name="valor" id="valor" class="form-control" value="{{ old('valor', $produto->valor) }}">
    </div>
    <div class="form-group">
        <label for="quantidade">Quantidade</label>
        <input type="text" name="quantidade" id="quantidade" class="form-control" value="{{ old('quantidade', $produto->quantidade) }}">
    </div>
    <div class="form-group mt-3">
        <button type="submit" class="btn btn-primary btn-block">Atualizar</button>
    </div>
</form>

@endsection
