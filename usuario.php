<!DOCTYPE html>
<html lang="en">

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

    <!-- Acima tem os imports do Bootstrap assim como o import pelo google fonts da fonte 'Koulen' que estou usando em quase todo o site -->

    <title>Projeto PW - Definitivo</title>
</head>

<body class="overflow-x-hidden">
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

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-md-12">
                    <h4>Minha Conta</h4>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10 col-md-12">
                    <div class="card p-5 shadow-lg" style="min-height: 450px; border-radius: 15px;">
                        <div class="d-flex flex-column flex-lg-row align-items-center align-items-lg-start h-100">
                            <!-- Foto do usuário -->
                            <div class="me-lg-4 text-center mb-4 mb-lg-0">
                                <img src="imgs/foto_usuario.png" class="img-thumbnail rounded-circle"
                                    alt="Foto do usuário" style="width: 180px; height: 180px;">
                            </div>

                            <!-- Linha vertical separadora (visível apenas em telas grandes) -->
                            <div class="vr d-none d-lg-block"
                                style="height: auto; width: 2px; background-color: #29c2d2;"></div>

                            <!-- Informações do usuário -->
                            <div class="flex-grow-1 ms-lg-4">

                                <form>
                                    <!-- Nome completo -->
                                    <div class="mb-3">
                                        <label for="nomeUsuario" class="form-label"><strong>Nome
                                                completo:</strong></label>
                                        <input type="text" class="form-control" id="nomeUsuario" value="Pedro Silva"
                                            disabled>
                                    </div>

                                    <!-- Endereço -->
                                    <div class="mb-3">
                                        <label for="enderecoUsuario"
                                            class="form-label"><strong>Endereço:</strong></label>
                                        <input type="endereco" class="form-control" id="enderecoUsuario"
                                            value="rua dos carvalhos 203" disabled>
                                    </div>

                                    <!-- CPF -->
                                    <div class="mb-3">
                                        <label for="cpfUsuario" class="form-label"><strong>CPF:</strong></label>
                                        <input type="cpf" class="form-control" id="cpfUsuario" value="###.456.789-##"
                                            disabled>
                                    </div>

                                    <!-- Data de nascimento -->
                                    <div class="mb-3">
                                        <label for="dataUsuario" class="form-label"><strong>Data de
                                                Nascimento:</strong></label>
                                        <input type="dataUsuario" class="form-control" id="dataUsuario"
                                            value="23/01/1980" disabled>
                                    </div>

                                    <!-- Email -->
                                    <div class="mb-3">
                                        <label for="emailUsuario" class="form-label"><strong>Email:</strong></label>
                                        <input type="emailUsuario" class="form-control" id="emailUsuario"
                                            value="PedroSilva@gmail.com" disabled>
                                    </div>

                                </form>

                                <!-- Contêiner para os botões -->
                                <div class="d-flex justify-content-end gap-2 mt-3">

                                    <!-- Botão para logar-->
                                    <a href="login.php">
                                        <button type="button" href="login.php" class="btn btn-success">Login</button>
                                    </a>

                                    <!-- Botão para cadastrar -->
                                    <a href="cadastro.php">
                                        <button type="button" href="cadastro.php" class="btn btn-success">Cadastro</button>
                                    </a>

                                    <!-- Botão para excluir a conta -->
                                    <a href="Excluir.php">
                                        <button type="button" class="btn btn-danger">Excluir</button>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr>


        <!-- Aqui tem o rodapé, a única coisa que falta nele é adicionar o ícone do twitter na seção de redes sociais e trocar o texto
            sobre tráfico -->

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