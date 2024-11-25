<?php
session_start(); // Inicia a sessão para acessar a variável de erro
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="css/custom.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Koulen&display=swap" rel="stylesheet">
    <title>Login</title>

    <style>
        /* Estilo personalizado para o toast */
        .toast-custom {
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
</head>

<body class="overflow-x-hidden">

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="form-container">
                    <form method="POST" action="controller/loginController.php">

                        <!-- Toast de erro, exibido se houver uma mensagem de erro na sessão -->
                        <?php if (isset($_SESSION['erro'])): ?>
                            <div class="toast toast-custom align-items-center text-white bg-danger show" role="alert">
                                <div class="d-flex">
                                    <div class="toast-body">
                                        <?= $_SESSION['erro']; ?>
                                    </div>
                                    <button type="button" class="btn-close btn-close-white me-2 m-auto"
                                        data-bs-dismiss="toast" aria-label="Close"></button>
                                </div>
                            </div>
                            <?php unset($_SESSION['erro']); // Remove a mensagem após exibi-la 
                            ?>
                        <?php endif; ?>


                        <!-- Campo de email -->
                        <div class="mb-3">
                            <label for="campoEmail" class="form-label">Endereço de email<span style="color: red;">*</span></label>
                            <input type="email" class="form-control" id="campoEmail" name="campoEmail" aria-describedby="descEmail">
                            <div id="descEmail" class="form-text">Seu Email</div>
                        </div>

                        <!-- Campo de senha -->
                        <div class="mb-3">
                            <label for="campoSenha" class="form-label">Senha<span style="color: red;">*</span></label>
                            <input type="password" class="form-control" id="campoSenha" name="campoSenha" maxlength="20"
                                minlength="8">
                            <br>

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
                            <button type="submit" class="btn btn-primary">Fazer Login</button>
                        </div>

                        <!-- Link para recuperação de senha -->
                        <div class="mt-3 text-center">
                            <a href="cadastro.php" class="link-recover" id="recoverPasswordLink">Ainda não possui uma conta? Cadastre-se</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts do Bootstrap e inicialização do toast -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
    <script>
        // Inicializa o toast e define o tempo para desaparecer (3 segundos)
        document.addEventListener('DOMContentLoaded', function() {
            var toastEl = document.querySelector('.toast');
            if (toastEl) {
                var toast = new bootstrap.Toast(toastEl, {
                    delay: 3000
                });
                toast.show();
            }
        });
    </script>

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

</body>

</html>