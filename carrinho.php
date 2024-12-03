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

    <title>Carrinho 1</title>
</head>

<body class="overflow-x-hidden">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

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

        <div id="cart-itens" class="col-8">
            <!-- Aqui os produtos serão adicionados dinamicamente -->
        </div>

        <div class="row">
            <div class="col">
                <div class="container my-1">
                    <div class="card mb-3 rounded shadow-sm" style="padding: 1.5rem;">
                        <h4 class="text-start mb-4">Carrinho - Finalizacao da compra</h4>
                        <div class="row">
                            <!-- Card do produto no carrinho -->

                            <div class="row">
                                <!-- Carrinho de compras (esquerda) -->
                                <div class="col-sm-8" id="cart-itens">
                                    <!-- Aqui ficam os itens do carrinho, que podem ser removidos -->
                                </div>

                                <!-- Resumo e Frete (direita) -->
                                <div class="col-sm-4" id="order-summary">
                                    <div class="card mb-3 rounded shadow-sm">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item bg-light">
                                                <h4>RESUMO DO PEDIDO</h4>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between">Subtotal: <span id="subtotal" style="font-family: 'Roboto';">R$00,00</span></li>
                                            <li class="list-group-item d-flex justify-content-between">Entrega: <span style="font-family: 'Roboto';">R$00,00</span></li>
                                            <li class="list-group-item d-flex justify-content-between">Total: <span id="total" style="font-weight: bold; font-family: 'Roboto';">R$00,00</span></li>
                                        </ul>
                                    </div>
                                    <div class="card mb-3 rounded shadow-sm">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item bg-light">
                                                <h4>CALCULAR FRETE</h4>
                                            </li>
                                            <li class="list-group-item"><input type="text" class="form-control" placeholder="Digite seu CEP" style="margin-top: 0.5rem; margin-bottom: 0.5rem;"></li>
                                            <li class="list-group-item bg-light">
                                                <h4>CUPOM DE DESCONTO</h4>
                                            </li>
                                            <li class="list-group-item"><input type="text" class="form-control" placeholder="Digite seu cupom" style="margin-top: 0.5rem; margin-bottom: 0.5rem;"></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            // Função para atualizar o subtotal, total e o preço do produto no card
            function updatePrices() {
                let quantity = document.getElementById("productQuantity").innerText; // Pega a quantidade do produto
                let price = 10.00; // Preço do produto (aqui pode vir da sua base de dados ou ser dinâmico)

                let productTotal = price * quantity; // Calcula o total do produto
                let deliveryFee = 5.00; // Taxa de entrega
                let total = productTotal + deliveryFee; // Calcula o total com entrega

                // Atualiza o subtotal e total no carrinho
                document.getElementById("subtotal").innerText = "R$" + productTotal.toFixed(2);
                document.getElementById("total").innerText = "R$" + total.toFixed(2);

                // Atualiza o preço do produto no card com base na quantidade
                document.getElementById("productPrice").innerText = "R$" + productTotal.toFixed(2);
            }

            // Função para aumentar a quantidade
            function increaseQuantity() {
                let quantityElem = document.getElementById("productQuantity");
                let quantity = parseInt(quantityElem.innerText);
                quantityElem.innerText = quantity + 1;
                updatePrices(); // Atualiza os preços
            }

            // Função para diminuir a quantidade
            function decreaseQuantity() {
                let quantityElem = document.getElementById("productQuantity");
                let quantity = parseInt(quantityElem.innerText);
                if (quantity > 1) {
                    quantityElem.innerText = quantity - 1;
                    updatePrices(); // Atualiza os preços
                }
            }

            // Atualiza os preços quando a página carregar
            window.onload = updatePrices;
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


    <script>
        // Função para adicionar produtos ao carrinho
        function addProductToCart(productName, productPrice) {
            // Encontre o container do carrinho onde os produtos serão listados
            const cartItemsContainer = document.getElementById("cart-itens");

            // Crie um novo card para o produto
            const productCard = document.createElement("div");
            productCard.classList.add("col-12", "mb-3");

            productCard.innerHTML = `
            <div class="card mb-3 rounded shadow-sm" style="max-width: 50rem; padding: 0.5rem;">
                <div class="row g-0">
                    <div class="col-md-3 d-flex align-items-center justify-content-center">
                        <img class="imgProdCart" src="imgs/teste.png" class="img-fluid" alt="Produto">
                    </div>
                    <div class="col-md-9">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <p class="card-text mb-0">${productName}</p> <br>
                                <p class="card-text mb-0" style="color: gray;">Laboratório XYZ</p>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-light btn-outline-dark" onclick="decreaseQuantity(event)">&lt;</button>
                                    <span class="productQuantity px-3" style="display: flex; align-items: center; color: black; background-color: #ffffff; border: 1px solid #ddd;">
                                        1
                                    </span>
                                    <button type="button" class="btn btn-light btn-outline-dark" onclick="increaseQuantity(event)">&gt;</button>
                                </div>
                                <p class="productPrice card-text mb-0" style="font-weight: bold; font-family: 'Roboto';">R$${productPrice}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        `;

            cartItemsContainer.appendChild(productCard);
            updatePrices(); // Atualize os preços ao adicionar o produto
        }
    </script>

    <script>
        // Função para aumentar a quantidade do produto
        function increaseQuantity(event) {
            const quantityElem = event.target.previousElementSibling;
            let quantity = parseInt(quantityElem.innerText);
            quantityElem.innerText = quantity + 1;
            updatePrices(); // Atualize o preço total sempre que a quantidade mudar
        }

        // Função para diminuir a quantidade do produto
        function decreaseQuantity(event) {
            const quantityElem = event.target.nextElementSibling;
            let quantity = parseInt(quantityElem.innerText);
            if (quantity > 1) {
                quantityElem.innerText = quantity - 1;
                updatePrices(); // Atualize o preço total sempre que a quantidade mudar
            }
        }
    </script>

    <script>
        // Função para atualizar o preço total e subtotal
        function updatePrices() {
            let subtotal = 0;
            const productPrices = document.querySelectorAll(".productPrice");
            const productQuantities = document.querySelectorAll(".productQuantity");

            // Somar os preços de todos os produtos no carrinho
            for (let i = 0; i < productPrices.length; i++) {
                const price = parseFloat(productPrices[i].innerText.replace('R$', ''));
                const quantity = parseInt(productQuantities[i].innerText);
                subtotal += price * quantity;
            }

            // Adicionar taxa de entrega
            let deliveryFee = 5.00;
            let total = subtotal + deliveryFee;

            // Atualizar as labels de subtotal e total
            document.getElementById("subtotal").innerText = "R$" + subtotal.toFixed(2);
            document.getElementById("total").innerText = "R$" + total.toFixed(2);
        }
    </script>

</body>

</html>