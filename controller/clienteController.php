<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/ProjetoPW-Drogaria/model/cliente.php';

// classe que controla os dados da classe cliente
class ClienteController
{
    private $cliente;

    public function __construct()
    {
        $this->cliente = new Cliente();

        // Verificar a ação passada pela URL
        if (isset($_GET['acao'])) {
            $acao = $_GET['acao'];
            if ($acao === 'inserir') {
                $this->inserir();
            } elseif ($acao === 'atualizar') {
                $this->atualizar($_GET['ID_Cliente']);
            } elseif ($acao === 'excluir') {
                $this->excluir($_GET['ID_Cliente']);
            }
        }
    }

    public function inserir()
    {
        $this->cliente->setNome_Cliente($_POST['nome']);
        $this->cliente->setEndereco($_POST['endereco']);
        $this->cliente->setCPF($_POST['cpf']);
        $this->cliente->setData_nascimento($_POST['data_nascimento']);
        $this->cliente->setEmail($_POST['email']);
        $this->cliente->setSenha($_POST['senha']);

        $this->cliente->inserir();
    }

    public function listar()
    {
        return $this->cliente->listar();
    }

    public function buscarPorID_Cliente($ID_Cliente)
    {
        return $this->cliente->buscarPorID_Cliente($ID_Cliente);
    }

    public function atualizar($ID_Cliente)
    {
        $this->cliente->setNome_Cliente($_POST['nome']);
        $this->cliente->setEndereco($_POST['endereco']);
        $this->cliente->setCPF($_POST['cpf']);
        $this->cliente->setData_nascimento($_POST['data_nascimento']);
        $this->cliente->setEmail($_POST['email']);
        $this->cliente->setSenha($_POST['senha']);

        $this->cliente->atualizar($ID_Cliente);
    }

    public function excluir($ID_Cliente)
    {
        $this->cliente->excluir($ID_Cliente);
    }
}

// Inicializa o controlador
new ClienteController();
