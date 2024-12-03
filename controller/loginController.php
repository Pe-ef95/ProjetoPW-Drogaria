<?php
// Iniciar a sessão para armazenar dados do usuário logado
session_start();

// Incluir o arquivo da classe Conexao
include $_SERVER['DOCUMENT_ROOT'] . '/ProjetoPW-Drogaria/controller/conexao.php';

// Criar uma instância da classe Conexao
$conexao = new Conexao();
$conn = $conexao->getConexao(); // Obter a conexão

// Verificar se os campos de e-mail e senha foram preenchidos
if (isset($_POST['campoEmail']) && isset($_POST['campoSenha'])) {
    $Email = $_POST['campoEmail'];
    $Senha = $_POST['campoSenha'];

    // Preparar a consulta SQL usando a conexão
    $stmt = $conn->prepare("SELECT * FROM Cliente WHERE Email = ? AND Senha = ?");
    $stmt->bind_param("ss", $Email, $Senha);
    $stmt->execute();
    $result = $stmt->get_result();

    // Verificar se o usuário foi encontrado
    if ($result->num_rows == 1) {
        $usuario = $result->fetch_assoc();

        // Definir as variáveis de sessão após o login bem-sucedido
        $_SESSION['ID_Cliente'] = $usuario['ID_Cliente'];  // Armazenar ID do cliente na sessão
        $_SESSION['usuario_nome'] = $usuario['Nome_Cliente'];  // Armazenar o nome do cliente na sessão
        $_SESSION['login_sucesso'] = "Login bem-sucedido!";  // Mensagem de login bem-sucedido

        // Redirecionar para a página principal ou painel do usuário
        header("Location: /ProjetoPW-Drogaria/usuario.php");
        exit();
    } else {
        // Login falhou, redireciona para a página de login com mensagem de erro
        $_SESSION['erro'] = "E-mail ou senha incorretos!";
        header("Location: /ProjetoPW-Drogaria/login.php");
        exit();
    }
} else {
    // Se os campos não foram preenchidos corretamente, redireciona para o login
    header("Location: /ProjetoPW-Drogaria/login.php");
    exit();
}
?>
