@extends('layout/principal')
@section('conteudo')

<div class="alert alert-success">
    O produto {{$nome}} foi adicionado com sucesso!
</div>
<div class="btn-btn-success">
    <a href="/produtos">Voltar</a>
</div>

@endsection
