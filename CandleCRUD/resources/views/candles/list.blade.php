@extends('layouts.main')

@section('tittle', 'Dimensions')

@section('content')
    <div id="candles-container" class="col-md-12">
    <h1> Nossas Velas</h1>
    <p class="subtitle"></p>
        @foreach($candles as $candle)
            <div class="card col-m-3">
                <img src="/img/dimensionssearchbar.png" alt="{{ $candle->name }}">
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
        <br>
        <br>
        <a href="/"> Voltar para página inicial</a>
    </div>
@endsection
