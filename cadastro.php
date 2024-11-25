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
    <title>Cadastro</title>
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

</body>

</html>