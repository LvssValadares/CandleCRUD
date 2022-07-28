@extends('layouts.main')

@section('tittle', 'Dimensions')

@section('content')
<div id="candles-container" class="col-md-12">
    <h1> Nossas Velas</h1>
    <p class="subtitle"></p>
    @foreach($candles as $candle)
    <div class="card col-m-3">
        <img src="/img/candles/{{ $candle->image }}" alt="{{ $candle->name }}">
        <div class="card-body">
            <p class="card-name">Nome: {{ $candle->name}}</p>
            <p class="card-qtd">Em estoque: {{ $candle->qtd}}</p>
            <p class="card-fragance">Fragância: {{ $candle->fragrance}}</p>
            <p class="card-description">Descrição: {{ $candle->description}}</p>
            <a href="/candles/editUpdate/{{ $candle->id }}" class="btn btn-primary"><ion-icon name="create-outline"></ion-icon>Editar</a>
            <form action="/candles/{{ $candle->id }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-primary"><ion-icon name="trash-outline"></ion-icon> Deletar</button>
            </form>
        </div>
    </div>
    @endforeach
    <br>
    <br>
    <br>
    @if(count($candles) == 0)
    <h1> Não a velas disponíveis </h1>
    @endif
    <br>
    <br>
    <a href="/"> Voltar para página inicial</a>
</div>
@endsection
