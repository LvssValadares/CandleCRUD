@extends('layouts.main')

@section('tittle', 'Dimensions')
@section('content')
<br>
<br>
<div id="search-container" class="col-md-12">
    <h2> Busque uma vela </h2>
    <br>
    <form action="/" method="GET">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar por aroma">
    </form>
</div>
<br>
<br>
<div id="candles-container" class="col-md-12">
    @if(count($candles) == 0 && $search)
    <p> Não foi possível encontrar nenhuma vela com o nome: {{ $search }} ! <a href="/"> Voltar para página inicial</a> </p>
    @elseif(count($candles) == 0)
    <p> Não possue velas disponíveis!!!</p>
    @elseif(count($candles) != 0 && $search)
    @foreach($candles as $candle)
    <div class="card col-m-3">
        <img src="/img/candles/{{ $candle->image }}" alt="{{ $candle->name }}">
        <div class="card-body">
            <p class="card-name">Nome: {{ $candle->name}}</p>
            <p class="card-qtd">Em estoque: {{ $candle->qtd}}</p>
            <p class="card-fragance">Fragância: {{ $candle->fragrance}}</p>
            <p class="card-description">Descrição: {{ $candle->description}}</p>
            <a href="/candles/{{ $candle->id }}" class="btn btn-primary"> Saber mais </a>
            <a href="https://shopee.com.br/dimensionsartt" class="btn btn-primary" target="_blank"> Comprar </a>
        </div>
    </div>
    @endforeach
    @else
    <h1> Nosso trabalho </h1>
    @endif

</div>

@endsection
