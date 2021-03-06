<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="description" content="Search Food - Delivery">
        <meta name="author" content="Danilo Gonçalves dos Santos">
        <title>Search Food - Delivery</title>

        <!--Icon-->
        <link rel="shortcut icon" href="{{asset('img/icon/SF.ico')}}" type="image/x-icon">

        <!--Fonts-->
        <link href="https://fonts.googleapis.com/css?family=Copse" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>

        <!--cdn Bootstrap CSS file-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <!--cdn Bootstrap JS files-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>

        <!--CSS files-->
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="{{url('/')}}">
                <img height="55" src="{{asset('img/logo/Logo_Search_Food_Branca.png')}}" alt="Logo">
                <span id="logo-text">Search Food</span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <div class="dropdown nav-item">
                        <span style="cursor: pointer" class="nav-link">
                             Sobre
                        </span>                        
                        <div class="dropdown-content text-center p-1">
                            <a class="dropdown-item" href="{{url('/sobre')}}">Sobre o Search Food</a>
                            <a class="dropdown-item" href="{{url('/termos')}}">Termos de Uso</a>
                            <a class="dropdown-item" href="{{url('/privacidade')}}">Privacidade</a>
                        </div>
                    </div>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/contato')}}">Contato</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/entrar')}}">Entrar/Cadastrar</a>
                    </li>
                    <div id="donos-restaurante" class="dropdown nav-item">
                        <span style="cursor: pointer" class="nav-link">
                             Donos de Restaurante
                        </span>                        
                        <div class="dropdown-content text-center p-1">
                            
                            <a class="dropdown-item" href="{{url('/restaurante/cadastro')}}">Cadastrar Restaurante</a>
                            <a class="dropdown-item" href="{{url('/restaurante/login')}}">Acessar Painel</a>
                        </div>
                    </div>
                </ul>
            </div>
        </nav>

        <!--JavaScrips files-->
        <script src="{{asset('js/popper.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
    </body>
</html>