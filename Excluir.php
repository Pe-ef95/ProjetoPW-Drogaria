<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/ProjetoPW-Drogaria/controller/clienteController.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Excluir Cliente</title>
</head>

<body>
    <div class="container">
        <h2>Excluir Cliente</h2>
        <?php
        $clienteController = new ClienteController();
        $cliente = $clienteController->buscarPorID_Cliente($_GET['ID_Cliente']);
        ?>
        <form method="POST" action="controller/clienteController.php?acao=excluir&ID_Cliente=<?php echo $cliente['ID_Cliente']; ?>">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $cliente['Nome_Cliente']; ?>" readonly>
            </div>
            <br>
            <div class="form-group">
                <label for="endereco">Endereço:</label>
                <input type="text" class="form-control" id="endereco" name="endereco" value="<?php echo $cliente['Endereco']; ?>" readonly>
            </div>
            <br>
            <div class="form-group">
                <label for="cpf">CPF:</label>
                <input type="text" class="form-control" id="cpf" name="cpf" value="<?php echo $cliente['CPF']; ?>" readonly>
            </div>
            <br>
            <div class="form-group">
                <label for="data_nascimento">Data de Nascimento:</label>
                <input type="text" class="form-control" id="data_nascimento" name="data_nascimento" value="<?php echo $cliente['Data_nascimento']; ?>" readonly>
            </div>
            <br>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" id="email" name="email" value="<?php echo $cliente['Email']; ?>" readonly>
            </div>
            <br>
            <div class="form-group">
                <label for="senha">Senha:</label>
                <input type="text" class="form-control" id="senha" name="senha" value="<?php echo $cliente['Senha']; ?>" readonly>
            </div>
            <br>
            <button type="submit" class="btn btn-danger">Excluir</button>
        </form>
    </div>
</body>

</html>