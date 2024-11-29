<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Koulen&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="css/custom.css" rel="stylesheet">
    <style>
        /* Background para a página inteira */
        body {
            background-image: url('path/to/your/image.jpg');
            /* Caminho para a imagem de fundo */
            background-size: cover;
            /* Faz com que a imagem cubra toda a tela */
            background-repeat: no-repeat;
            /* Evita repetição da imagem */
            background-position: center;
            /* Centraliza a imagem */
        }
    </style>
</head>

<!-- A classe container-fluid retira as bordas que fica quando vc usa a classe container-->
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <nav class="navbar navbar-expand-lg">
                <!-- Coloquei a classe container dentro da classe container-fluid pra navbar cobrir todo o espaço mas os elementos terem margens-->
                <div class="container">

                    <!-- Seção da Logo e Barra de Pesquisa -->
                    <div class="w-100">
                        <div class="d-flex align-items-center w-100">

                            <!-- Logo alinhada à esquerda -->
                            <a class="navbar-brand me-5" href="index.php">
                                <img class="logoDrogaria" src="imgs/drogaciaBRANCo.odg (1).svg">
                            </a>

                            <!-- Dropdown / Seção das categorias - Tem que trocar o href para cada uma de suas respectivas páginas de categoria -->
                            <div class="dropdown me-1">
                                <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuButton" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    CATEGORIAS
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <li><a class="dropdown-item" href="categoria_remédios.php">Remédios</a></li>
                                    <li><a class="dropdown-item" href="categoria_cosméticos.php">Cosméticos</a></li>
                                    <li><a class="dropdown-item" href="#">Beleza</a></li>
                                    <li><a class="dropdown-item" href="#">Vitaminas</a></li>
                                    <li><a class="dropdown-item" href="#">Suplementos</a></li>
                                    <li><a class="dropdown-item" href="#">Higiene</a></li>
                                    <li><a class="dropdown-item" href="#">Utilitários</a></li>
                                    <li><a class="dropdown-item" href="#">Alimentos</a></li>
                                </ul>
                            </div>

                            <!-- Barra de Pesquisa e Botão "Procurar" -->
                            <form class="d-flex mx-auto flex-grow-1" id="barraPesquisa" role="search">
                                <input class="form-control me-1" type="search" placeholder="Procurar produto" aria-label="Search">
                                <button class="btn btn-success" id="botaoPesquisa" type="submit"><img src="imgs/pesquisa.svg" alt="Pesquisar"></button>
                            </form>

                            <!-- Botões do usuário - Dentro da tag 'a' trocar a # pelo caminho das respectivas páginas -->
                            <div class="d-flex ms-auto">
                                <div class="d-flex align-items-center me-2">
                                    <a href="usuario.php">
                                        <button class="btn btn-success" type="button">
                                            <img class="BtnUCF" src="imgs/user.svg" alt="Usuario">
                                        </button>
                                    </a>
                                </div>
                                <div class="d-flex align-items-center me-2">
                                    <a href="favoritos.php">
                                        <button class="btn btn-success" type="button">
                                            <img class="BtnUCF" src="imgs/curtidos.svg" alt="favoritos">
                                        </button>
                                    </a>
                                </div>
                                <div class="d-flex align-items-center me-2">
                                    <a href="carrinho.php">
                                        <button class="btn btn-success" type="button" href="carrinhos.php">
                                            <img class="BtnUCF" src="imgs/carrinho.svg" alt="carrinho">
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <!-- Linha azul da divisória -->
    <hr>

    <body class="overflow-x-hidden">

        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="form-container">
                        <form method="POST" action="controller/clienteController.php?acao=inserir">

                            <!-- Campo de nome -->
                            <div class="mb-3">
                                <label for="campoNome" class="form-label">Nome<span style="color: red;"> *</span></label>
                                <input type="text" class="form-control" id="campoNome" name="campoNome">
                                <div id="descNome" class="form-text">Seu nome completo</div>
                            </div>

                            <!-- Campo de endereco -->
                            <div class="mb-3">
                                <label for="campoEndereco" class="form-label">Endereço<span style="color: red;"> *</span></label>
                                <input type="text" class="form-control" id="campoEndereco" name="campoEndereco">
                                <div id="descEndereco" class="form-text">Seu endereço</div>
                            </div>

                            <!-- Campo de cpf -->
                            <div class="mb-3">
                                <label for="campoCPF" class="form-label">CPF<span style="color: red;"> *</span></label>
                                <input type="text" class="form-control" id="campoCPF" name="campoCPF">
                                <div id="descCPF" class="form-text">Número do seu CPF</div>
                            </div>

                            <!-- Campo de data de nascimento -->
                            <div class="mb-3">
                                <label for="campoDataNascimento" class="form-label">Data de Nascimento<span style="color: red;"> *</span></label>
                                <input type="date" class="form-control" id="campoDataNascimento" name="campoDataNascimento">
                                <div id="descDataNascimento" class="form-text">Sua data de nascimento (AAAA/MM/DD)</div>
                            </div>

                            <!-- Campo de email -->
                            <div class="mb-3">
                                <label for="campoEmail" class="form-label">Endereço de email<span style="color: red;"> *</span></label>
                                <input type="email" class="form-control" id="campoEmail" aria-describedby="descEmail" name="campoEmail">
                                <div id="descEmail" class="form-text">Seu Email</div>
                            </div>

                            <!-- Campo de senha -->
                            <div class="mb-3">
                                <label for="campoSenha" class="form-label">Senha<span style="color: red;"> *</span></label>
                                <input type="password" class="form-control" id="campoSenha" maxlength="20" minlength="8" name="campoSenha">
                                <div id="descSenha" class="form-text">
                                    A senha deve ter de 8 a 20 caracteres
                                </div>

                                <br>

                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="showPassword">
                                    <label class="form-check-label" for="showPassword">Mostrar senha</label>
                                </div>
                            </div>

                            <!-- CheckBox "Lembrar-me" -->
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Lembrar campos</label>
                            </div>

                            <!-- Botão de cadastro -->
                            <!-- Contêiner para centralizar o botão -->
                            <div style="text-align: center; margin-top: 20px;">
                                <button type="submit" class="btn btn-primary">Cadastrar</button>
                            </div>

                            <!-- Link para recuperação de senha -->
                            <div class="mt-3 text-center">
                                <a href="login.php" class="link-recover" id="linkLogin">Já possui uma conta? Login</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script>
            // Função para mostrar/ocultar a senha
            document.getElementById('showPassword').addEventListener('change', function() {
                var passwordField = document.getElementById('campoSenha');
                if (this.checked) {
                    passwordField.type = 'text'; // Mostrar senha
                } else {
                    passwordField.type = 'password'; // Ocultar senha
                }
            });
        </script>

        <hr>


        <div class="row">
            <div class="col">
                <footer>
                    <div class="container" id="containerFooter">
                        <ul>
                            <h3>ECOFARMA</h3>
                            <p>Comprometidos com a saúde e bem-estar de nossos clientes, oferecemos medicamentos, produtos de higiene e beleza com atendimento de qualidade e preços acessíveis. Nossa missão é proporcionar cuidados essenciais para você e sua família</p>
                            <div class="redes-sociais">
                                <a href="https://www.instagram.com" target="_blank"><img class="cfProd" src="imgs/instagram.svg" alt="Instagram"></a>
                                <a href="https://www.youtube.com" target="_blank"><img class="cfProd" src="imgs/youtube.svg" alt="YouTube"></a>
                                <a href="https://www.linkedin.com" target="_blank"><img class="cfProd" src="imgs/linkedin.svg" alt="LinkedIn"></a>
                                <a href="https://www.x.com" target="_blank"><img class="cfProd" src="imgs/twitter-x.svg" alt="Twitter"></a>

                            </div>
                        </ul>

                        <ul>
                            <h3>Link</h3>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Precos</a></li>
                            <li><a href="#">Baixar</a></li>
                            <li><a href="#">Sobre Nos</a></li>
                            <li><a href="#">Servicos</a></li>
                        </ul>

                        <ul>
                            <h3>Suporte</h3>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Como Funciona</a></li>
                            <li><a href="#">Caracteristicas</a></li>
                            <li><a href="#">Contato</a></li>
                        </ul>

                        <ul>
                            <h3>Nos Contate</h3>
                            <li>
                                <p>+55 11 88888888</p>
                            </li>
                            <li>
                                <p>emailEcoFarma@gmail.com</p>
                            </li>
                            <li>
                                <p>Brasil</p>
                            </li>
                        </ul>
                    </div>
                </footer>
            </div>
        </div>
</div>
<script src="js/custom.js"></script>
<!-- Aqui é o import do JavaScript do Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>