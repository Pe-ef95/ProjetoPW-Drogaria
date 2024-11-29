<?php

// O require_once serve para conectarmos os arquivos do projeto entre eles, está sendo conectada com conexao.php
require_once $_SERVER['DOCUMENT_ROOT'] . '/ProjetoPW-Drogaria/controller/conexao.php';

// cria a classe Pessoa para estruturar as funções
class cliente
{
    // declaração das variáveis que recebem o que o usuário digitar
    private $ID_Cliente;
    private $Nome_Cliente;
    private $Endereco;
    private $CPF;
    private $Data_nascimento;
    private $Email;
    private $Senha;
    private $conexao;

    // pega a id do cliente
    public function getID_Cliente()
    {
        return $this->ID_Cliente;
    }

    // define a id do cliente
    public function setID_Cliente($ID_Cliente)
    {
        $this->ID_Cliente = $ID_Cliente;
    }

    // pega o nome do usuário
    public function getNome_Cliente()
    {
        return $this->Nome_Cliente;
    }

    // define o nome
    public function setNome_Cliente($Nome_Cliente)
    {
        $this->Nome_Cliente = $Nome_Cliente;
    }

    // pega o endereço do usuário
    public function getEndereco()
    {
        return $this->Endereco;
    }

    // define o endereço
    public function setEndereco($Endereco)
    {
        $this->Endereco = $Endereco;
    }

    // pega o cpf 
    public function getCPF()
    {
        return $this->CPF;
    }

    // define o cpf
    public function setCPF($CPF)
    {
        $this->CPF = $CPF;
    }

    // pega a data de nascimento
    public function getData_nascimento()
    {
        return $this->Data_nascimento;
    }

    // define a data de nascimento
    public function setData_nascimento($Data_nascimento)
    {
        $this->Data_nascimento = $Data_nascimento;
    }

    // pega o email
    public function getEmail()
    {
        return $this->Email;
    }

    // define o email
    public function setEmail($Email)
    {
        $this->Email = $Email;
    }

    // pega a senha do cliente
    public function getSenha()
    {
        return $this->Senha;
    }

    // define a senha
    public function setSenha($Senha)
    {
        $this->Senha = $Senha;
    }


    // método construtor
    public function __construct()
    {
        // a variável conexão se torna um objeto que recebe a classe conexão
        $this->conexao = new Conexao();
    }


    // função para inserir os dados digitados pelo usuário
    public function inserir()
    {

        // aqui ocorre a inserção de dados para o banco de dados
        $sql = "INSERT INTO Cliente (`Nome_Cliente`, `Endereco`, `CPF`, `Data_nascimento`, `Email`, `Senha`) VALUES (?,?,?,?,?,?)";
        // Aqui prepara a conexão com o banco de dados para executar a linha de código acima
        $stmt = $this->conexao->getConexao()->prepare($sql);
        // aqui prepara os tipos de dados que o banco irá receber
        $stmt->bind_param('ssssss', $this->Nome_Cliente, $this->Endereco, $this->CPF, $this->Data_nascimento, $this->Email, $this->Senha);
        // serve para executar a linha acima
        return $stmt->execute();
    }

    // função que serve para listar os dados da pessoa que estão guardados no banco de dados
    public function listar()
    {
        // chama a tabela com os dados
        $sql = "SELECT * FROM Cliente";
        // aqui prepara a conexão com o banco de dados para executar a linha de código acima
        $stmt = $this->conexao->getConexao()->prepare($sql);
        // executa a linha de código acima
        $stmt->execute();
        // o result receberá o resultado da consulta do stmt
        $result = $stmt->get_result();
        // cria a array pessoas
        $cliente = [];
        // o while servirá para buscar os dados do result
        while ($cliente = $result->fetch_assoc()) {
            // a array pessoas recebe o que está em pessoa
            $clientes[] = $cliente;
        }
        // retorna a array pessoas
        return $clientes;
    }

    public function buscarPorID_Cliente($ID_Cliente)
    {
        // chama a tabela com os dados
        $sql = "SELECT * FROM Cliente WHERE ID_Cliente = ?";
        // aqui prepara a conexão com o banco de dados para executar o comando acima
        $stmt = $this->conexao->getConexao()->prepare($sql);
        $stmt->bind_param('i', $ID_Cliente);
        // executa a linha de código acima
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }

    // função que atualiza as informações do cadastro
    public function atualizar($ID_Cliente)
    {
        // comando SQL para atualizar as informações
        $sql = "UPDATE Cliente SET Nome_Cliente = ?, Endereco = ?, CPF = ?, Data_nascimento = ?, Email = ?, Senha = ? WHERE ID_Cliente = ?";
        // prepara a conexão com o banco de dados para executar o código acima
        $stmt = $this->conexao->getConexao()->prepare($sql);
        // faz o preparo dos tipos de dados q o banco receberá
        $stmt->bind_param('sssssss', $this->Nome_Cliente, $this->Endereco, $this->CPF, $this->Data_nascimento, $this->Email, $this->Senha, $ID_Cliente);
        // executa a linha de codigo acima
        return $stmt->execute();
    }
    public function excluir($ID_Cliente)
    {
        $sql = "DELETE FROM Cliente WHERE ID_Cliente = ?";
        $stmt = $this->conexao->getConexao()->prepare($sql);
        $stmt->bind_param('i', $ID_Cliente);
        return $stmt->execute();
    }
}
