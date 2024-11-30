<?php
session_start(); // Inicia a sessão

// Verifica se há uma mensagem de login bem-sucedido
if (isset($_SESSION['login_sucesso'])) {
    $mensagem = $_SESSION['login_sucesso']; // Armazena a mensagem da sessão
    unset($_SESSION['login_sucesso']); // Remove a mensagem da sessão após exibi-la
}

// Verifica se o usuário está logado
//$isUserLoggedIn = isset($_SESSION['ID_Cliente']); // Verifique se a sessão de login está ativa
?>

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

    <style>
        /* Personalizando o estilo do Toast */
        .toast {
            background-color: #29D2C2;
            position: fixed;
            top: 20px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 1050;
            border-radius: 12px;
            width: 300px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }
    </style>

    <title>Projeto PW - Definitivo</title>
</head>

<body class="overflow-x-hidden">

    <?php
    // Verifica se o usuário está logado e define a variável JavaScript
    $isUserLoggedIn = isset($_SESSION['ID_Cliente']); // Verifique se a sessão de login está ativa
    ?>

    <!-- Toast de login bem-sucedido -->
    <?php if (isset($mensagem)): ?>
        <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-body">
                <?= $mensagem; ?>
            </div>
        </div>
    <?php endif; ?>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var toastElement = document.querySelector('.toast');
            if (toastElement) {
                var toast = new bootstrap.Toast(toastElement, {
                    delay: 1500 // Configura o tempo para desaparecer (3 segundos)
                });
                toast.show();
            }
        });
    </script>


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
                                        <li><a class="dropdown-item" href=" categoria_remédios.php">Remédios</a></li>
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

        <!-- Carousel com os cartazes de promoção -->
        <div class="row text-center">
            <div class="col">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="imgs/cartazes.png" class="d-block w-100" alt="cartaz1">
                        </div>
                        <div class="carousel-item">
                            <img src="imgs/cartazes (1).png" class="d-block w-100" alt="cartaz2">
                        </div>
                        <div class="carousel-item">
                            <img src="imgs/cartazes (2).png" class="d-block w-100" alt="cartaz3">
                        </div>
                        <div class="carousel-item">
                            <img src="imgs/cartazes (3).png" class="d-block w-100" alt="cartaz4">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>

        <hr>

        <!-- Primeiro container: contém os cards da seção de "Ofertas" -->
        <div class="container">
            <div class="row">
                <div class="col">
                    <h4>Ofertas</h4>
                </div>
            </div>
            <div class="row text-center">
                <div class="col me-1">
                    <div class="card h-100" style="width: 14rem;">
                        <img src="imgs/Dipirona.webp" class="card-img-top" alt="teste">
                        <div class="card-body">
                            <h5 class="card-title">Dipirona Sodica</h5>
                            <p class="card-text">Dipirona Monoidratada 500mg 10 comprimidos EMS Genérico</p>
                            <hr>
                            <p class="card-text mb-0" style="font-size: 18px; font-weight: bolder; font-family: 'Roboto';">R$4,99</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <button type="button" class="btn btn-success favoritoBtn"><img class="cfProd favoritoIcon" src="imgs/curtidos.svg"></button>
                            <button type="button" class="btn btn-success carrinhoBtn" onclick="adicionarAoCarrinho()">
                                <img class="cfProd carrinhoIcon" src="imgs/carrinho.svg">
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col me-1">
                    <div class="card h-100" style="width: 14rem;">
                        <img src="imgs/alegra.webp" class="card-img-top" alt="teste">
                        <div class="card-body">
                            <h5 class="card-title">Allegra</h5>
                            <p class="card-text">Antialérgico Allegra Pediátrico Cloridrato de Fexofenadina 6mg/ml Suspensão Oral 60ml com Seringa</p>
                            <hr>
                            <p class="card-text mb-0" style="font-size: 18px; font-weight: bolder; font-family: 'Roboto';">R$38,81</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <button type="button" class="btn btn-success favoritoBtn"><img class="cfProd favoritoIcon" src="imgs/curtidos.svg"></button>
                            <button type="button" class="btn btn-success carrinhoBtn" onclick="adicionarAoCarrinho()">
                                <img class="cfProd carrinhoIcon" src="imgs/carrinho.svg">
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col me-1">
                    <div class="card h-100" style="width: 14rem;">
                        <img src="imgs/azitromicina.webp" class="card-img-top" alt="teste">
                        <div class="card-body">
                            <h5 class="card-title">Prati Donaduzzi</h5>
                            <p class="card-text">Azitromicina Di-Hidratada 500mg 5 comprimidos Farmaco Prati Genérico</p>
                            <hr>
                            <p class="card-text mb-0" style="font-size: 18px; font-weight: bolder; font-family: 'Roboto';">R15,19</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <button type="button" class="btn btn-success favoritoBtn"><img class="cfProd favoritoIcon" src="imgs/curtidos.svg"></button>
                            <button type="button" class="btn btn-success carrinhoBtn" onclick="adicionarAoCarrinho()">
                                <img class="cfProd carrinhoIcon" src="imgs/carrinho.svg">
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col me-1">
                    <div class="card h-100" style="width: 14rem;">
                        <img src="imgs/evra.webp" class="card-img-top" alt="teste">
                        <div class="card-body">
                            <h5 class="card-title">Evra</h5>
                            <p class="card-text">Evra 6mg + 0,6mg 3 Adesivos Transdérmicos</p>
                            <hr>
                            <p class="card-text mb-0" style="font-size: 18px; font-weight: bolder; font-family: 'Roboto';">R$104,50</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <button type="button" class="btn btn-success favoritoBtn"><img class="cfProd favoritoIcon" src="imgs/curtidos.svg"></button>
                            <button type="button" class="btn btn-success carrinhoBtn" onclick="adicionarAoCarrinho()">
                                <img class="cfProd carrinhoIcon" src="imgs/carrinho.svg">
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col me-1">
                    <div class="card h-100" style="width: 14rem;">
                        <img src="imgs/nimesulida.webp" class="card-img-top" alt="teste">
                        <div class="card-body">
                            <h5 class="card-title">Eurofarma</h5>
                            <p class="card-text">Nimesulida 100mg 12 comprimidos Eurofarma Genérico</p>
                            <hr>
                            <p class="card-text mb-0" style="font-size: 18px; font-weight: bolder; font-family: 'Roboto';">R$5,49</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <button type="button" class="btn btn-success favoritoBtn"><img class="cfProd favoritoIcon" src="imgs/curtidos.svg"></button>
                            <button type="button" class="btn btn-success carrinhoBtn" onclick="adicionarAoCarrinho()">
                                <img class="cfProd carrinhoIcon" src="imgs/carrinho.svg">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br>
        <br>

        <!-- Segundo container: contém os cards da seção de "Novidades" -->
        <div class="container">
            <div class="row">
                <div class="col">
                    <h4 style="font-family: 'Koulen';">Novidades</h4>
                </div>
            </div>
            <div class="row text-center">
                <div class="col me-1">
                    <div class="card h-100" style="width: 14rem;">
                        <img src="imgs/nicorette.webp" class="card-img-top" alt="teste">
                        <div class="card-body">
                            <h5 class="card-title">Nicorette</h5>
                            <p class="card-text">Nicorette Icemint 2mg Goma Mastigável para Parar de Fumar 30 unidades</p>
                            <hr>
                            <p class="card-text mb-0" style="font-size: 18px; font-weight: bolder; font-family: 'Roboto';">R$89,69</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <button type="button" class="btn btn-success favoritoBtn"><img class="cfProd favoritoIcon" src="imgs/curtidos.svg"></button>
                            <button type="button" class="btn btn-success carrinhoBtn" onclick="adicionarAoCarrinho()">
                                <img class="cfProd carrinhoIcon" src="imgs/carrinho.svg">
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col me-1">
                    <div class="card h-100" style="width: 14rem;">
                        <img src="imgs/rinosoro.webp" class="card-img-top" alt="teste">
                        <div class="card-body">
                            <h5 class="card-title">Rinosoro</h5>
                            <p class="card-text">Rinosoro Jet 0,9% Descongestionante Spray Jato Contínuo 100ml</p>
                            <hr>
                            <p class="card-text mb-0" style="font-size: 18px; font-weight: bolder; font-family: 'Roboto';">R$44,59</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <button type="button" class="btn btn-success favoritoBtn"><img class="cfProd favoritoIcon" src="imgs/curtidos.svg"></button>
                            <button type="button" class="btn btn-success carrinhoBtn" onclick="adicionarAoCarrinho()">
                                <img class="cfProd carrinhoIcon" src="imgs/carrinho.svg">
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col me-1">
                    <div class="card h-100" style="width: 14rem;">
                        <img src="imgs/paracetamol.webp" class="card-img-top" alt="teste">
                        <div class="card-body">
                            <h5 class="card-title">Medley</h5>
                            <p class="card-text">Cloridrato de Venlafaxina 150mg 30 cápsulas Medley Genérico</p>
                            <hr>
                            <p class="card-text mb-0" style="font-size: 18px; font-weight: bolder; font-family: 'Roboto';">R$48,48</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <button type="button" class="btn btn-success favoritoBtn"><img class="cfProd favoritoIcon" src="imgs/curtidos.svg"></button>
                            <button type="button" class="btn btn-success carrinhoBtn" onclick="adicionarAoCarrinho()">
                                <img class="cfProd carrinhoIcon" src="imgs/carrinho.svg">
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col me-1">
                    <div class="card h-100" style="width: 14rem;">
                        <img src="imgs/ozempic.webp" class="card-img-top" alt="teste">
                        <div class="card-body">
                            <h5 class="card-title">Ozempic</h5>
                            <p class="card-text">Ozempic 1mg Solução Injetável 3ml + 4 agulhas - Geladeira</p>
                            <hr>
                            <p class="card-text mb-0" style="font-size: 18px; font-weight: bolder; font-family: 'Roboto';">R$1063,05</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <button type="button" class="btn btn-success favoritoBtn"><img class="cfProd favoritoIcon" src="imgs/curtidos.svg"></button>
                            <button type="button" class="btn btn-success carrinhoBtn" onclick="adicionarAoCarrinho()">
                                <img class="cfProd carrinhoIcon" src="imgs/carrinho.svg">
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col me-1">
                    <div class="card h-100" style="width: 14rem;">
                        <img src="imgs/aerolin.webp" class="card-img-top" alt="teste">
                        <div class="card-body">
                            <h5 class="card-title">Aerolin</h5>
                            <p class="card-text">Aerolin Sulfato de Salbutamol 100mcg Spray 200 Doses</p>
                            <hr>
                            <p class="card-text mb-0" style="font-size: 18px; font-weight: bolder; font-family: 'Roboto';">R$17,72</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <button type="button" class="btn btn-success favoritoBtn"><img class="cfProd favoritoIcon" src="imgs/curtidos.svg"></button>
                            <button type="button" class="btn btn-success carrinhoBtn" onclick="adicionarAoCarrinho()">
                                <img class="cfProd carrinhoIcon" src="imgs/carrinho.svg">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br>
        <br>

        <!-- Terceiro container: contém os cards da seção de "Mais Vendidos" -->
        <div class="container">
            <div class="row">
                <div class="col">
                    <h4>Mais Vendidos</h4>
                </div>
            </div>
            <div class="row text-center">
                <div class="col me-1">
                    <div class="card h-100" style="width: 14rem;">
                        <img src="imgs/dexaneurin.webp" class="card-img-top" alt="teste">
                        <div class="card-body">
                            <h5 class="card-title">Dexaneurin</h5>
                            <p class="card-text">Dexaneurin Cianocobalamina 0,53mg + Piridoxina 100mg + Tiamina 100mg 3 ampolas</p>
                            <hr>
                            <p class="card-text mb-0" style="font-size: 18px; font-weight: bolder; font-family: 'Roboto';">R$43,59</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <button type="button" class="btn btn-success favoritoBtn"><img class="cfProd favoritoIcon" src="imgs/curtidos.svg"></button>
                            <button type="button" class="btn btn-success carrinhoBtn" onclick="adicionarAoCarrinho()">
                                <img class="cfProd carrinhoIcon" src="imgs/carrinho.svg">
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col me-1">
                    <div class="card h-100" style="width: 14rem;">
                        <img src="imgs/Dipirona.webp" class="card-img-top" alt="teste">
                        <div class="card-body">
                            <h5 class="card-title">Dipirona Sodica</h5>
                            <p class="card-text">Dipirona Monoidratada 500mg 10 comprimidos EMS Genérico</p>
                            <hr>
                            <p class="card-text mb-0" style="font-size: 18px; font-weight: bolder; font-family: 'Roboto';">R$4,99</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <button type="button" class="btn btn-success favoritoBtn"><img class="cfProd favoritoIcon" src="imgs/curtidos.svg"></button>
                            <button type="button" class="btn btn-success carrinhoBtn" onclick="adicionarAoCarrinho()">
                                <img class="cfProd carrinhoIcon" src="imgs/carrinho.svg">
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col me-1">
                    <div class="card h-100" style="width: 14rem;">
                        <img src="imgs/trezete.webp" class="card-img-top" alt="teste">
                        <div class="card-body">
                            <h5 class="card-title">Trezete</h5>
                            <p class="card-text">Trezete Rosuvastatina Cálcica 10mg + Ezetimiba 10mg 60 Comprimidos</p>
                            <hr>
                            <p class="card-text mb-0" style="font-size: 18px; font-weight: bolder; font-family: 'Roboto';">R$140,00</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <button type="button" class="btn btn-success favoritoBtn"><img class="cfProd favoritoIcon" src="imgs/curtidos.svg"></button>
                            <button type="button" class="btn btn-success carrinhoBtn" onclick="adicionarAoCarrinho()">
                                <img class="cfProd carrinhoIcon" src="imgs/carrinho.svg">
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col me-1">
                    <div class="card h-100" style="width: 14rem;">
                        <img src="imgs/cimegripe.webp" class="card-img-top" alt="teste">
                        <div class="card-body">
                            <h5 class="card-title">Cimegripe</h5>
                            <p class="card-text">Cimegripe Cloridrato Fenillefrina 4mg + Paracetamol 400mg + Maleato de Clorfeniramina 4mg 20 cápsulas</p>
                            <hr>
                            <p class="card-text mb-0" style="font-size: 18px; font-weight: bolder; font-family: 'Roboto';">R$12,90</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <button type="button" class="btn btn-success favoritoBtn"><img class="cfProd favoritoIcon" src="imgs/curtidos.svg"></button>
                            <button type="button" class="btn btn-success carrinhoBtn" onclick="adicionarAoCarrinho()">
                                <img class="cfProd carrinhoIcon" src="imgs/carrinho.svg">
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col me-1">
                    <div class="card h-100" style="width: 14rem;">
                        <img src="imgs/doralgina.webp" class="card-img-top" alt="teste">
                        <div class="card-body">
                            <h5 class="card-title">Doralgina</h5>
                            <p class="card-text">Doralgina Dipirona Sódica 300mg + Isometepteno 30mg + Cafeína 30mg 20 comprimidos</p>
                            <hr>
                            <p class="card-text mb-0" style="font-size: 18px; font-weight: bolder; font-family: 'Roboto';">R$4,99</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <button type="button" class="btn btn-success favoritoBtn"><img class="cfProd favoritoIcon" src="imgs/curtidos.svg"></button>
                            <button type="button" class="btn btn-success carrinhoBtn" onclick="adicionarAoCarrinho()">
                                <img class="cfProd carrinhoIcon" src="imgs/carrinho.svg">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Toast de erro caso o usuario nao esteja logado e tente adicionar produtos ao carrinho -->
        <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
            <div id="loginToast" class="toast align-items-center text-bg-danger" role="alert" aria-live="assertive" aria-atomic="true" style="display: none;">
                <div class="d-flex">
                    <div class="toast-body text-danger">
                        Por favor, faça login para adicionar produtos ao carrinho.
                    </div>
                    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
            </div>
        </div>

        <!-- Toast de sucesso (verde) -->
        <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
            <div id="successToast" class="toast align-items-center text-bg-success" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="d-flex">
                    <div class="toast-body text-sucess">
                        Produto adicionado ao carrinho!
                    </div>
                    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
            </div>
        </div>

        <!-- Toast para quando o produto for removido do carrinho -->
        <div class="toast" id="removeToast" role="alert" aria-live="assertive" aria-atomic="true">

            <div class="toast-body">
                Produto removido do carrinho.
            </div>
        </div>



        <script>
            // Define a variável `isUserLoggedIn` com o valor de PHP
            const isUserLoggedIn = <?php echo json_encode($isUserLoggedIn); ?>;

            // Função para adicionar/remover produto do carrinho
            function toggleCarrinho(btn) {
                if (!isUserLoggedIn) {
                    // Exibe o toast de erro (vermelho)
                    const loginToast = document.getElementById('loginToast');
                    const toast = new bootstrap.Toast(loginToast);
                    toast.show();
                    return; // Não faz nada se não estiver logado
                }

                // Encontra o ícone do carrinho no botão
                const carrinhoIcon = btn.querySelector('.carrinhoIcon');

                // Verifica se o produto está no carrinho (se o botão contém a classe 'noCarrinho')
                const isProductInCart = btn.classList.contains('noCarrinho');

                if (isProductInCart) {
                    // Produto já está no carrinho, então removemos
                    btn.classList.remove('noCarrinho');

                    // Exibe o toast de remoção (vermelho)
                    const removeToast = document.getElementById('removeToast');
                    const toast = new bootstrap.Toast(removeToast);
                    toast.show();

                    // Troca o ícone para refletir a remoção
                    setTimeout(function() {
                        carrinhoIcon.src = 'imgs/carrinho.svg'; // Substitua com o caminho correto
                    }, 300); // Atraso para animação
                } else {
                    // Produto não está no carrinho, então adicionamos
                    btn.classList.add('noCarrinho');

                    // Exibe o toast de sucesso (verde)
                    const successToast = document.getElementById('successToast');
                    const toast = new bootstrap.Toast(successToast);
                    toast.show();

                    // Troca o ícone para refletir a adição
                    setTimeout(function() {
                        carrinhoIcon.src = 'imgs/carrinhoClicado.svg'; // Substitua com o caminho correto
                    }, 300); // Atraso para animação
                }
            }

            // Testar o comportamento do botão de carrinho
            const carrinhoBtns = document.querySelectorAll('.carrinhoBtn');
            carrinhoBtns.forEach(function(btn) {
                btn.addEventListener('click', function() {
                    toggleCarrinho(btn);
                });
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