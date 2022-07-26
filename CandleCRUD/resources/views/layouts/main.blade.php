<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('tittle')</title>

    <!-- Fonte do Google -->
    <link href="https://fonts.googleapis.com/css2?family=Pacifico" rel="stylesheet">
    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/styles.css">
    <script src="/js/scripts.js"></script>
</head>

<body>
    <header>
        <nav class="nav navbar navbar-expand-lg navdar-light">
            <div class="collapse navbar-collapse" id="navbar">
                <a href="/" class="navbar-brand">
                    <img src="/img/logo.png" alt="Dimensions">
                </a>
                <a href="/" class="navbar-brand">
                    <h1> Bem Vindo a Dimensions</h1>
                </a>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="/candles/list" class="nav-link">Velas Disponíveis</a>
                    </li>
                    <li class="nav-item">
                        <a href="/candles/create" class="nav-link">Adicionar Vela</a>
                    </li>
                    <li class="nav-item">
                        <a href="/candles/edit" class="nav-link">Editar Vela</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <div class="container-fluid">
            <div class="row">
                @if(session('msg'))
                <p class="msg">{{ session('msg') }}</p>
                @endif
                @yield('content')
            </div>
        </div>
    </main>
    <footer>
        <p>Dimensions &copy 2022</p>
    </footer>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
