<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="./css/index.css">
    <title>Menu Principal</title>
</head>

<body>

    <header>

        <header>
            <nav class="nav-bar">
                <div class="logo">
                    <a href="./index.php"><img src="./img/phpClaro.png" alt="logo php"></a>
                </div>

                <div class="nav-list">
                    <ul>
                        <li class="nav-item"><a href="#exer" class="nav-link">Exercícios</a></li>
                        <li class="nav-item"><a href="#form" class="nav-link">Formulários</a></li>
                        <li class="nav-item"><a href="#aula" class="nav-link">Aula</a></li>
                    </ul>
                </div>

                <div class="login-button">
                    <a href="#contato"><button>Contato</button></a>
                </div>
                </div>

        </header>


    </header>

    <main>
        <section id="exer" class="sessao">
            <div class="container">
                <div class="sessaoExercicio">
                    <h1>Exercícios</h1>
                    <ul class="exercicio-lista">
                        <li class="exercicio-item">
                            <a href="./exer1.php" class="navLink" title="Acessar Exercício 1">Exercício 1</a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <section id="form" class="sessao">
            <div class="container">
                <div class="sessaoFormulario">
                    <h1>Formulários</h1>
                    <ul class="form-lista">
                        <li class="form-item">
                            <a href="./forms/formexer1.php" class="navLink" title="Acessar Formulário 1">Formulário 1</a>
                        </li>
                        <li class="form-item">
                            <a href="./forms/feedback.php" class="navLink" title="Acessar Formulário 2">Formulário 2</a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        
        <section id="aula" class="sessao">
            <div class="container">
                <div class="sessaoFormulario">
                    <h1>Aulas</h1>
                    <ul class="form-lista">
                        <li class="form-item">
                            <a href="./aula/index.php" class="navLink" title="Acessar exercício 1">Exercício 1</a>
                        </li>
                       
                    </ul>
                </div>
            </div>
        </section>


    </main>

    <footer id="contato" class="contato">

        <div class="interface">

            <article class="txt-contato">
                <h3>Entre em <span>contato</span></h3>
            </article>

            <article class="icons-contato">
                <a href="#"><button><i class="bi bi-whatsapp"></i>
                        <p>Chamar no WhatsApp</p>
                    </button></a>
                <a href="#"><button><i class="bi bi-envelope-at"></i>
                        <p>Enviar e-mail</p>
                    </button></a>
                <a href="#"><button><i class="bi bi-github"></i>
                        <p>Github</p>
                    </button></a>
                <a href="#"><button><i class="bi bi-instagram"></i>
                        <p>Instagram</p>
                    </button></a>
                <a href="#"><button><i class="bi bi-linkedin"></i>
                        <p>Linkedin</p>
                    </button></a>
            </article>

        </div>

        <p class="txtContato"> &copy; Desenvolvido por Marcelle Sandy <br>
            Todos os direitos reservados</p>

    </footer>

</body>

</html>