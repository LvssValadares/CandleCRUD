@extends('layouts.main')

@section('tittle', 'Editando Vela:' . $candle->name)

@section('content')
<div id="candle-create-container" class="col-md-6 offset-md-3">
    <br>
    <h1> Editando a vela: {{ $candle->name }} !!! </h1>
    <form action="/candles/update/{{ $candle->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="tittle">Nome da Vela:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Nome">
        </div>
        <div class="form-group">
            <label for="tittle">Quantidade no estoque:</label>
            <input type="number" class="form-control" id="qtd" name="qtd" placeholder="Quantidade">
        </div>
        <div class="form-group">
            <label for="tittle">Fragância da vela:</label>
            <input type="text" class="form-control" id="fragrance" name="fragrance" placeholder="Fragância">
        </div>
        <div class="form-group">
            <label for="tittle">Descrição da Vela:</label>
            <input type="text" class="form-control" id="description" name="description" placeholder="Descrição">
        </div>
        <div class="form-group">
            <label for="image">Imagem da Vela:</label>
            <input type="file" id="image" name="image" class="from-control-file">
            <img src="/img/candles/{{ $candle->image }}" alt="{{ $candle->name }}" class="img-preview"
            placeholder="Nome da Vela" value="{{ $candle->name }}">
        </div>
        <input type="submit" class="btn btn-primary" value="Adicionar Vela">
        <br>
        <br>
        <a href="/"> Voltar para página inicial</a>
</div>
@endsection