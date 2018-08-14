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
            <?php 
                if( explode('/', Request::url())[3] == 'sobre'  ||
                    explode('/', Request::url())[3] == 'termos' ||
                    explode('/', Request::url())[3] == 'privacidade' 
                ) { 
            ?>
            <div class="dropdown nav-item">
                <span style="cursor: pointer" class="nav-link active text-white">
                    Sobre
                </span>                        
                <div class="dropdown-content text-center p-1">
                    <a class="dropdown-item" href="{{url('/sobre')}}">Sobre o Search Food</a>
                    <a class="dropdown-item" href="{{url('/termos')}}">Termos de Uso</a>
                    <a class="dropdown-item" href="{{url('/privacidade')}}">Privacidade</a>
                </div>
            </div>
            <?php } else { ?>
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
            <?php } ?>
            <?php if(explode('/', Request::url())[3] == 'contato') { ?>
                <li class="nav-item">
                    <a class="nav-link active text-white" href="{{url('/contato')}}">Contato</a>
                </li> 
            <?php } else { ?>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/contato')}}">Contato</a>
                </li> 
            <?php } ?>
            <?php if(explode('/', Request::url())[3] == 'entrar') { ?>
                <li class="nav-item">
                    <a class="nav-link active text-white" href="{{url('/entrar')}}">Entrar/Cadastrar</a>
                </li>
            <?php } else { ?>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/entrar')}}">Entrar/Cadastrar</a>
                </li>
            <?php } ?>
            <?php if( explode('/', Request::url())[3] == 'restaurante') { ?>
                <div id="donos-restaurante" class="dropdown nav-item">
                    <span style="cursor: pointer" class="nav-link active text-white">
                        Donos de Restaurante
                    </span>                        
                    <div class="dropdown-content text-center p-1">
                        <a class="dropdown-item" href="{{url('/restaurante/cadastro')}}">Cadastrar Restaurante</a>
                        <a class="dropdown-item" href="{{url('/restaurante/login')}}">Acessar Painel</a>
                    </div>
                </div>
            <?php } else { ?>
                <div id="donos-restaurante" class="dropdown nav-item">
                    <span style="cursor: pointer" class="nav-link">
                        Donos de Restaurante
                    </span>                        
                    <div class="dropdown-content text-center p-1">
                        <a class="dropdown-item" href="{{url('/restaurante/cadastro')}}">Cadastrar Restaurante</a>
                        <a class="dropdown-item" href="{{url('/restaurante/login')}}">Acessar Painel</a>
                    </div>
                </div>
            <?php } ?>
        </ul>
    </div>
</nav>