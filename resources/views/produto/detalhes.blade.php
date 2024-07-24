@extends('layout/principal')

@section('conteudo')

<h1>Detalhes do produto: {{$p->nome }}</h1>
<ul>
    <li>
        <b>Valor: </b> R$ {{number_format($p->valor,2,',','.') }}
    </li>
    <li>
        <b>Descrição: </b> {{$p->descricao }}
    </li>
    <li>
        <b>Quantidade em estoque: </b> {{$p->quantidade }}
    </li>
</ul>
@endsection