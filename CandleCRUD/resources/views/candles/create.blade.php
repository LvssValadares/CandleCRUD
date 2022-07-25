@extends('layouts.main')

@section('tittle', 'Adicionar Vela')

@section('content')
    <div id="candle-create-container" class="col-md-6 offset-md-3">
        <br>
        <h1> Adicione a vela desejada!!! </h1>
        <form action="/candles" method="POST">
            @csrf
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
            <input type="submit" class="btn btn-primary" value="Adicionar Vela">
        <br>
        <br>
        <a href="/"> Voltar para página inicial</a>
    </div>
@endsection
