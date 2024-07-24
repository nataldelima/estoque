@extends('layout/principal')

@section('conteudo')

@if (empty($produtos))

<div class="alert alert-danger">
    Nenhum produto encontrado!
</div>

@else

<h1>Listagem de Produtos</h1>
<table class="table table-striped table-bordered table-hover">
    <tr>
        <th>Produtos</th>
        <th>Valor R$</th>
        <th>Descrição</th>
        <th class="text-center">Quantidade</tht>
        <th class="text-end">Ações</th>
    </tr>
    @foreach ($produtos as $p)
    <tr class="{{$p->quantidade <=1 ? 'table-danger' : ''}}">
        <td>{{$p->nome }}</td>
        <td>R$ {{number_format($p->valor,2,',','.') }}</td>
        <td>{{$p->descricao }}</td>
        <td class="text-center">{{$p->quantidade }}</td>
        <td class="text-end"><a href="produtos/mostra/{{$p->id }}" class="btn btn-primary"><i class="bi bi-search"></i></a> <a href="produtos/edita/{{$p->id}}" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
            <a href="produtos/remove/{{$p->id}}" class="btn btn-danger"><i class="bi bi-trash3"></i></a>

        </td>
    </tr>
    @endforeach
</table>
@endif
<h4>
    <span class="badge bg-danger">
        Um ou menos ítens no estoque.
    </span>
</h4>

@if (session('mensagem'))
<div class="alert alert-success m-5">
    {{session('mensagem')}}
</div>
@endif

@endsection
