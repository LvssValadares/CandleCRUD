@extends('layouts.main')

@section('tittle', $candle->name)

@section('content')
    <div class="col-md-10 offset-md-1">
        <div class="row">
            <div id="image-container" class="col-md-6">
                <img scr="/img/candles/{{ $candle->image }}" class="img-fluid" alt="{{ $candle->name}}">
            </div>
            <div id="info-container" class="col-md-6">
                <h1>Nome: {{$candle->name}}</h1>
                <p class="candle-fragrance"><ion-icon name="flower-outline"></ion-icon> Fragância: {{ $candle->fragrance}}</p>
                <p class="candle-description"><ion-icon name="document-text-outline"></ion-icon> Descrição: {{ $candle->description}}</p>
            </div>
        </div>
    </div>
        <a href="/"> Voltar para página inicial</a>
    </div>
@endsection
