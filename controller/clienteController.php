<?php

// require_once serve para conectarmos os arquivos do projeto entre  eles, está sendo conectada com pessoa.php
require_once $_SERVER['DOCUMENT_ROOT'] . '/ProjetoPW-Drogaria/model/cliente.php';

// classe que controla os dados da classe pessoa que está no diretório model
class clienteController
{
    // a varíavel cliente irá servir depois para definirmos os dados nela
    private $cliente;

    // método construtor
    public function __construct()
    {
        // cliente vira objeto, recebe a classe cliente, que tem a estrutura de dados para receber o que o usuário digitar
        $this->cliente = new cliente();
        // if para verificar a url do site para ver se é possível realizar a ação de inserir os dados
        if ($_GET['acao'] == 'inserir') {
            // irá executar a função inserir
            $this->inserir();
        } else if ($_GET['acao'] == 'atualizar') {
            $this->atualizar($_GET['ID_Cliente']);
        } else if ($_GET['acao'] == 'excluir') {
            $this->excluir($_GET['ID_Cliente']);
        }
    }
    // função para definirmos os valores do formulário que o usuário irá digitar
    public function inserir()
    {
        // definindo os dados recebidos do usuário
        $this->cliente->setNome_Cliente($_POST['campoNome']);
        $this->cliente->setEndereco($_POST['campoEndereco']);
        $this->cliente->setCPF($_POST['campoCPF']);
        $this->cliente->setData_nascimento($_POST['campoDataNascimento']);
        $this->cliente->setEmail($_POST['campoEmail']);
        $this->cliente->setSenha($_POST['campoSenha']);

        // cliente recebe o método inserir que possui os dados
        $this->cliente->inserir();
    }

    // essa função exibe os dados do cliente
    public function listar()
    {
        return $this->cliente->listar();
    }

    // busca a id do usuário
    public function buscarPorID_Cliente($ID_Cliente)
    {
        return $this->cliente->buscarPorID_Cliente($ID_Cliente);
    }

    // função para definir as atualizações de informação
    public function atualizar($ID_Cliente)
    {
        $this->cliente->setNome_Cliente($_POST['Nome_Cliente']);
        $this->cliente->setEndereco($_POST['Endereco']);
        $this->cliente->setCPF($_POST['CPF']);
        $this->cliente->setData_nascimento($_POST['Data_nascimento']);
        $this->cliente->setEmail($_POST['Email']);
        $this->cliente->setSenha($_POST['Senha']);

        $this->cliente->atualizar($ID_Cliente);
    }

    public function excluir($ID_Cliente)
    {
        $this->cliente->excluir($ID_Cliente);
    }
}

// serve para executar a própria classe PessoaController
new clienteController();
