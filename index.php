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
                                        <li><a class="dropdown-item" href="categorias/categoria1.php">CATEGORIA 1</a></li>
                                        <li><a class="dropdown-item" href="#">CATEGORIA 2</a></li>
                                        <li><a class="dropdown-item" href="#">CATEGORIA 3</a></li>
                                        <li><a class="dropdown-item" href="#">CATEGORIA 4</a></li>
                                        <li><a class="dropdown-item" href="#">CATEGORIA 5</a></li>
                                        <li><a class="dropdown-item" href="#">CATEGORIA 6</a></li>
                                        <li><a class="dropdown-item" href="#">CATEGORIA 7</a></li>
                                        <li><a class="dropdown-item" href="#">CATEGORIA 8</a></li>
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
                                        <a href="#">
                                            <button class="btn btn-success" type="button">
                                                <img class="BtnUCF" src="imgs/user.svg" alt="Usuario">
                                            </button>
                                        </a>
                                    </div>
                                    <div class="d-flex align-items-center me-2">
                                        <a href="#">
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
                        <img src="imgs/Azelan.webp" class="card-img-top" alt="teste">
                        <div class="card-body">
                            <h5 class="card-title">Azelan</h5>
                            <p class="card-text">Azelan 150mg/g Gel 30g</p>
                            <hr>
                            <p class="card-text mb-0" style="font-size: 18px; font-weight: bolder; font-family: 'Roboto';">R$62,00</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <button type="button" class="btn btn-success favoritoBtn"><img class="cfProd favoritoIcon" src="imgs/curtidos.svg"></button>
                            <button type="button" class="btn btn-success carrinhoBtn" onclick="adicionarAoCarrinho()"><img class="cfProd carrinhoIcon" src="imgs/carrinho.svg"></button>
                        </div>
                    </div>
                </div>
                <div class="col me-1">
                    <div class="card h-100" style="width: 14rem;">
                        <img src="imgs/LaRoche.webp" class="card-img-top" alt="teste">
                        <div class="card-body">
                            <h5 class="card-title">La Roche</h5>
                            <p class="card-text">Creme Multirreparador Calmante Cicaplast Baume B5+ La Roche-Posay 40ml</p>
                            <hr>
                            <p class="card-text mb-0" style="font-size: 18px; font-weight: bolder; font-family: 'Roboto';">R$58,90</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <button type="button" class="btn btn-success favoritoBtn"><img class="cfProd favoritoIcon" src="imgs/curtidos.svg"></button>
                            <button type="button" class="btn btn-success carrinhoBtn" onclick="adicionarAoCarrinho()"><img class="cfProd carrinhoIcon" src="imgs/carrinho.svg"></button>
                        </div>
                    </div>
                </div>
                <div class="col me-1">
                    <div class="card h-100" style="width: 14rem;">
                        <img src="imgs/KitSolar.webp" class="card-img-top" alt="teste">
                        <div class="card-body">
                            <h5 class="card-title">Nivea Sun</h5>
                            <p class="card-text">Kit Protetor Solar Corporal Nivea Sun Protect & Hidrata com 1 Protetor Infantil Kids FPS 60 100ml + 1 Protetor Adulto FPS 50 200ml</p>
                            <hr>
                            <p class="card-text mb-0" style="font-size: 18px; font-weight: bolder; font-family: 'Roboto';">R$45,90</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <button type="button" class="btn btn-success favoritoBtn"><img class="cfProd favoritoIcon" src="imgs/curtidos.svg"></button>
                            <button type="button" class="btn btn-success carrinhoBtn" onclick="adicionarAoCarrinho()"><img class="cfProd carrinhoIcon" src="imgs/carrinho.svg"></button>
                        </div>
                    </div>
                </div>
                <div class="col me-1">
                    <div class="card h-100" style="width: 14rem;">
                        <img src="imgs/ShampooCaspa.webp" class="card-img-top" alt="teste">
                        <div class="card-body">
                            <h5 class="card-title">Clear Men</h5>
                            <p class="card-text">Shampoo Anticaspa Clear Men Hidratação Campeã Vini Júnior 200ml</p>
                            <hr>
                            <p class="card-text mb-0" style="font-size: 18px; font-weight: bolder; font-family: 'Roboto';">R$27,99</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <button type="button" class="btn btn-success favoritoBtn"><img class="cfProd favoritoIcon" src="imgs/curtidos.svg"></button>
                            <button type="button" class="btn btn-success carrinhoBtn" onclick="adicionarAoCarrinho()"><img class="cfProd carrinhoIcon" src="imgs/carrinho.svg"></button>
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
                        <img src="imgs/Fralda.webp" class="card-img-top" alt="teste">
                        <div class="card-body">
                            <h5 class="card-title">Pampers Pants</h5>
                            <p class="card-text">Fralda Calça Pampers Pants Ajuste Total G 94 unidades</p>
                            <hr>
                            <p class="card-text mb-0" style="font-size: 18px; font-weight: bolder; font-family: 'Roboto';">R$171,90</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <button type="button" class="btn btn-success favoritoBtn"><img class="cfProd favoritoIcon" src="imgs/curtidos.svg"></button>
                            <button type="button" class="btn btn-success carrinhoBtn" onclick="adicionarAoCarrinho()"><img class="cfProd carrinhoIcon" src="imgs/carrinho.svg"></button>
                        </div>
                    </div>
                </div>
                <div class="col me-1">
                    <div class="card h-100" style="width: 14rem;">
                        <img src="imgs/Simfort.webp" class="card-img-top" alt="teste">
                        <div class="card-body">
                            <h5 class="card-title">Vitafor</h5>
                            <p class="card-text">Probiótico Vitafor Simfort em Pó 30 sachês</p>
                            <hr>
                            <p class="card-text mb-0" style="font-size: 18px; font-weight: bolder; font-family: 'Roboto';">R$109,99</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <button type="button" class="btn btn-success favoritoBtn"><img class="cfProd favoritoIcon" src="imgs/curtidos.svg"></button>
                            <button type="button" class="btn btn-success carrinhoBtn" onclick="adicionarAoCarrinho()"><img class="cfProd carrinhoIcon" src="imgs/carrinho.svg"></button>
                        </div>
                    </div>
                </div>
                <div class="col me-1">
                    <div class="card h-100" style="width: 14rem;">
                        <img src="imgs/gummmy.webp" class="card-img-top" alt="teste">
                        <div class="card-body">
                            <h5 class="card-title">Gummy Hair</h5>
                            <p class="card-text">Suplemento Alimentar Gummmy Imune Kids 30 pastilhas</p>
                            <hr>
                            <p class="card-text mb-0" style="font-size: 18px; font-weight: bolder; font-family: 'Roboto';">R$41,00</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <button type="button" class="btn btn-success favoritoBtn"><img class="cfProd favoritoIcon" src="imgs/curtidos.svg"></button>
                            <button type="button" class="btn btn-success carrinhoBtn" onclick="adicionarAoCarrinho()"><img class="cfProd carrinhoIcon" src="imgs/carrinho.svg"></button>
                        </div>
                    </div>
                </div>
                <div class="col me-1">
                    <div class="card h-100" style="width: 14rem;">
                        <img src="imgs/Colírio.webp" class="card-img-top" alt="teste">
                        <div class="card-body">
                            <h5 class="card-title">Hyabak</h5>
                            <p class="card-text">Colírio Hyabak 0,15% 10ml</p>
                            <hr>
                            <p class="card-text mb-0" style="font-size: 18px; font-weight: bolder; font-family: 'Roboto';">R$58,30</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <button type="button" class="btn btn-success favoritoBtn"><img class="cfProd favoritoIcon" src="imgs/curtidos.svg"></button>
                            <button type="button" class="btn btn-success carrinhoBtn" onclick="adicionarAoCarrinho()"><img class="cfProd carrinhoIcon" src="imgs/carrinho.svg"></button>
                        </div>
                    </div>
                </div>
                <div class="col me-1">
                    <div class="card h-100" style="width: 14rem;">
                        <img src="imgs/ÓleoLoreal.webp" class="card-img-top" alt="teste">
                        <div class="card-body">
                            <h5 class="card-title">Elseve</h5>
                            <p class="card-text">Óleo Extraordinário Tratamento Reconstrutor L'Oréal Paris Elseve 100ml</p>
                            <hr>
                            <p class="card-text mb-0" style="font-size: 18px; font-weight: bolder; font-family: 'Roboto';">R$33,65</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <button type="button" class="btn btn-success favoritoBtn"><img class="cfProd favoritoIcon" src="imgs/curtidos.svg"></button>
                            <button type="button" class="btn btn-success carrinhoBtn" onclick="adicionarAoCarrinho()"><img class="cfProd carrinhoIcon" src="imgs/carrinho.svg"></button>
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
                        <img src="imgs/Absorvente.webp" class="card-img-top" alt="teste">
                        <div class="card-body">
                            <h5 class="card-title">Tena</h5>
                            <p class="card-text">Absorvente para Incontinência Urinária Tena Lady Discreet Noturno Feminino Absorção Intensa 6 unidades</p>
                            <hr>
                            <p class="card-text mb-0" style="font-size: 18px; font-weight: bolder; font-family: 'Roboto';">R$22,99</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <button type="button" class="btn btn-success favoritoBtn"><img class="cfProd favoritoIcon" src="imgs/curtidos.svg"></button>
                            <button type="button" class="btn btn-success carrinhoBtn" onclick="adicionarAoCarrinho()"><img class="cfProd carrinhoIcon" src="imgs/carrinho.svg"></button>
                        </div>
                    </div>
                </div>
                <div class="col me-1">
                    <div class="card h-100" style="width: 14rem;">
                        <img src="imgs/ProtetorColchao.webp" class="card-img-top" alt="teste">
                        <div class="card-body">
                            <h5 class="card-title">Adultcare</h5>
                            <p class="card-text">. Protetor para Colchão Descartável Unissex Adultcare M 6 unidades</p>
                            <hr>
                            <p class="card-text mb-0" style="font-size: 18px; font-weight: bolder; font-family: 'Roboto';">R$37,99</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <button type="button" class="btn btn-success favoritoBtn"><img class="cfProd favoritoIcon" src="imgs/curtidos.svg"></button>
                            <button type="button" class="btn btn-success carrinhoBtn" onclick="adicionarAoCarrinho()"><img class="cfProd carrinhoIcon" src="imgs/carrinho.svg"></button>
                        </div>
                    </div>
                </div>
                <div class="col me-1">
                    <div class="card h-100" style="width: 14rem;">
                        <img src="imgs/ProtetorSolarNivea.webp" class="card-img-top" alt="teste">
                        <div class="card-body">
                            <h5 class="card-title">Nivea Sun</h5>
                            <p class="card-text">Protetor Solar Corporal Hidratação FPS 50 Nivea Sun 200ml</p>
                            <hr>
                            <p class="card-text mb-0" style="font-size: 18px; font-weight: bolder; font-family: 'Roboto';">R$45,90</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <button type="button" class="btn btn-success favoritoBtn"><img class="cfProd favoritoIcon" src="imgs/curtidos.svg"></button>
                            <button type="button" class="btn btn-success carrinhoBtn" onclick="adicionarAoCarrinho()"><img class="cfProd carrinhoIcon" src="imgs/carrinho.svg"></button>
                        </div>
                    </div>
                </div>
                <div class="col me-1">
                    <div class="card h-100" style="width: 14rem;">
                        <img src="imgs/FraldaConfortoSec.webp" class="card-img-top" alt="teste">
                        <div class="card-body">
                            <h5 class="card-title">Pampers Confort Sec</h5>
                            <p class="card-text">Fralda Pampers Confort Sec XG 62 unidades</p>
                            <hr>
                            <p class="card-text mb-0" style="font-size: 18px; font-weight: bolder; font-family: 'Roboto';">R$129,90</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <button type="button" class="btn btn-success favoritoBtn"><img class="cfProd favoritoIcon" src="imgs/curtidos.svg"></button>
                            <button type="button" class="btn btn-success carrinhoBtn" onclick="adicionarAoCarrinho()"><img class="cfProd carrinhoIcon" src="imgs/carrinho.svg"></button>
                        </div>
                    </div>
                </div>
                <div class="col me-1">
                    <div class="card h-100" style="width: 14rem;">
                        <img src="imgs/ProtetorSolarDarrow.webp" class="card-img-top" alt="teste">
                        <div class="card-body">
                            <h5 class="card-title">Darrow</h5>
                            <p class="card-text">Protetor Solar Facial FPS 60 Actine 40g</p>
                            <hr>
                            <p class="card-text mb-0" style="font-size: 18px; font-weight: bolder; font-family: 'Roboto';">R$50,78s</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <button type="button" class="btn btn-success favoritoBtn"><img class="cfProd favoritoIcon" src="imgs/curtidos.svg"></button>
                            <button type="button" class="btn btn-success carrinhoBtn" onclick="adicionarAoCarrinho()"><img class="cfProd carrinhoIcon" src="imgs/carrinho.svg"></button>
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