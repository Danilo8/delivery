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

        <!--Fa Icons-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body style="font-family: 'Open Sans', serif;">
        @include('templates.navbar')

        <div class="container-fluid">
            <h1 class="text-center mt-5">Tem alguma duvida?</h1>
            <div id="card-contato" class="">
                <h5 class="text-center mt-5">
                    Mande-nos uma mensagem que responderemos assim que possivel!
                </h5>
                <form action="" method="post" class="mt-5">
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" name="nome" id="nome" class="form-control" placeholder="Nome">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="assunto">Assunto</label>
                        <input type="text" name="assunto" id="assunto" class="form-control" placeholder="Assunto">
                    </div>
                    <div class="form-group">
                        <label for="mensagem">Mensagem</label>
                        <textarea name="mensagem" id="mensagem" class="form-control" rows="8"></textarea>
                    </div>
                </form>
            </div>
            <div id="card-social">
                <ul id="contatos" class="list-group list-group-flush mb-5">
                    <li class="list-group-item">
                        <i style="font-size: 20px" class="fa fa-envelope-o"></i>
                        Email
                    </li>
                    <li class="list-group-item">
                        <i style="font-size: 20px" class="fa fa-map-marker"></i>
                        Endereço
                    </li>
                    <li class="list-group-item">
                        <i style="font-size: 20px" class="fa fa-phone"></i>
                        Telefone
                    </li>
                    <li class="list-group-item">
                        <i style="font-size: 20px" class="fa fa-whatsapp"></i>
                        WhatsApp
                    </li>
                </ul>
            </div>
            <!--Social buttons-->
            <div class="text-center">
                <ul class="list-unstyled list-inline">
                    <li class="list-inline-item">
                        <a id="i" href="#" class="fa fa-facebook"></a>
                    </li>
                    <li class="list-inline-item">
                        <a id="i" href="#" class="fa fa-twitter"></a>
                    </li>
                    <li class="list-inline-item">
                        <a id="i" href="#" class="fa fa-google-plus"></a>
                    </li>
                    <li class="list-inline-item">
                        <a id="i" href="#" class="fa fa-instagram"></a>
                    </li>
                    <li class="list-inline-item">
                        <a id="i" href="#" class="fa fa-youtube-play"></a>
                    </li>
                </ul>
            </div>
            <!--/.Social buttons-->
        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.023271599139!2d-46.76953868562393!3d-13.03418999081482!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x93491f1f5689f9f5%3A0x303c4487f80d380b!2sCampos+Belos+-+GO!5e0!3m2!1spt-BR!2sbr!4v1534274994361" style="width: 100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
        <!--JavaScrips files-->
        <script src="{{asset('js/popper.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
    </body>
</html>