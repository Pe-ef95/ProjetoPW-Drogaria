<?php

class Conexao
{
    /* Variáveis da classe conexão, host serve para demonstrar em qual servidor será executado, 
    * usuario que está igual a root demonstra que é um servidor local, banco é o nome do banco de dados, 
    * senha serve para colocar alguma proteção com senha, conexao serve para retornar depois a 
    * conexao com o banco de dados
    */
    private $host = "localhost";
    private $usuario = "root";
    private $senha = "";
    private $banco = "db_drogaria";
    private $conexao;

    // Método construtor para setarmos a variáveis da classe Conexao
    public function __construct()
    {
        // conexao vira um objeto que recebe as outras variaveis da classe conexao
        $this->conexao = new mysqli($this->host, $this->usuario, $this->senha, $this->banco);

        // Caso ele não consiga conectar com o banco de dados, criamos um if para realizar este tratamento
        if ($this->conexao->connect_error) {
            // O método die serve para demonstrar que não ocorreu a conexão com o banco de dados, e retorna a falha da conexão
            die("Falha na conexão: " . $this->conexao->connect_error);
        }
    }

    // Função que retorna a conexão com o banco de dados
    public function getConexao()
    {
        // Retorno para a conexão com o banco de dados
        return $this->conexao;
    }
}
