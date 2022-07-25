@extends('layouts.main')

@section('tittle', 'Dimensions')
@section('content')
<br>
<div class="row d-flex justify-content-center ">
    <h1> Bem Vindo a Dimensions</h1>
</div>
<br>
<div id="search-container" class="col-md-12">
    <h2> Busque uma vela </h2>
    <br>
    <form action="">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar por aroma">
    </form>
</div>
<br>
<br>
<div id="candles-container" class="col-md-12">
    <h1> Nossas Velas </h1>

</div>

@endsection