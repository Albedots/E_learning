<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("title")</title>
    <link rel="stylesheet" href="/css/styles.css">
    <script src="/js/script.js"></script>
</head>

<body>
<!--Layout Main de todo o site-->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <section class="collapse navbar-collapse" id="navbar">
                <a href="/" class="navbar-brand">
                <ion-icon name="home-outline" class="brand"></ion-icon>
                </a>
                <ul class="navbar-nav">
                    @guest      <!--Se o usuário não tiver conta ele vera esses campos-->
                    <li class="nav-item">
                        <a href="/login" class="nav-link">Entrar</a>
                    </li>
                    <li class="nav-item">
                        <a href="/register" class="nav-link">Cadastrar</a>
                    </li>
                    @endguest
                    @auth   <!--Se o usuário tiver logado ele vera esses campos-->
                    <li class="nav-item">
                        <a href="/dashboard" class="nav-link">Meus cursos</a>
                    </li>

                    <li class="nav-item">
                        <a href="/" class="nav-link">Cursos</a>
                    </li>

                    <li class="nav-item">
                        <a href="/events/create" class="nav-link">Criar cursos</a>
                    </li>
                    <li class="nav-item">
                        <form action="/logout" method="post">
                            @csrf
                            <a href="/" class="nav-link"
                                onclick="event.preventDefault(); 
                            this.closest('form').submit();">Sair</a>
                        </form>
                    </li>
                    @endauth
                </ul>
            </section>
        </nav>
        <div class="container-fluid">
            <div class="row">       <!--Mensagem personalizada da página-->
                @if(session("msg"))
                <p class="msg">{{ session("msg") }}</p>
                @endif
                @yield("content")
            </div>
        </div>
    </header>

    <!--FONTE GOOGLE-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!--BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!--IONICONS icones-->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>


    <footer>Direitos de Gabriel &copy; 2024</footer>

</body>

</html>