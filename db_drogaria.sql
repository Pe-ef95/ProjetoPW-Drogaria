-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17-Nov-2024 às 17:36
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

-- Banco de dados: `db_drogaria`
CREATE DATABASE IF NOT EXISTS `db_drogaria`;
USE `db_drogaria`;

-- Estrutura da tabela `Fornecedor`
CREATE TABLE `Fornecedor` (
  `ID_Fornecedor` INT PRIMARY KEY,
  `Nome_Fornecedor` VARCHAR(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Estrutura da tabela `CategoriaProduto`
CREATE TABLE `CategoriaProduto` (
  `ID_Categoria` INT PRIMARY KEY,
  `Nome_Categoria` VARCHAR(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Estrutura da tabela `Cliente`
CREATE TABLE `Cliente` (
  `ID_Cliente` INT NOT NULL AUTO_INCREMENT,
  `Nome_Cliente` VARCHAR(255) NOT NULL,
  `Endereco` VARCHAR(255) NOT NULL,
  `CPF` BIGINT NOT NULL,
  `Data_nascimento` DATE NOT NULL,
  `Email` VARCHAR(255) NOT NULL,
  `Senha` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`ID_Cliente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Extraindo dados da tabela `Cliente`
INSERT INTO `Cliente` (`ID_Cliente`, `Nome_Cliente`, `Endereco`, `CPF`, `Data_nascimento`, `Email`, `Senha`) VALUES
(1, 'Felipe', 'Rua A', 12345678901, '1985-06-15', 'felipe@exemplo.com', 'senha123');

-- AUTO_INCREMENT para tabela `Cliente`
ALTER TABLE `Cliente`
MODIFY `ID_Cliente` INT(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

-- Estrutura da tabela `MetodoPgto`
CREATE TABLE `MetodoPgto` (
  `ID_metodoPgto` INT PRIMARY KEY,
  `Descricao_pag` VARCHAR(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Estrutura da tabela `Produto`
CREATE TABLE `Produto` (
  `ID_Produto` INT PRIMARY KEY,
  `ID_Categoria` INT,
  `Nome_Produto` VARCHAR(255) NOT NULL,
  `Preco` DECIMAL(10, 2) NOT NULL,
  `Qtd_Estoque` INT NOT NULL,
  FOREIGN KEY (`ID_Categoria`) REFERENCES `CategoriaProduto`(`ID_Categoria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Estrutura da tabela `cupons`
CREATE TABLE `cupons` (
  `Codigo` VARCHAR(50) PRIMARY KEY,    -- Código do cupom (ex: "DESCONTO10")
  `Desconto` DECIMAL(5,2) NOT NULL     -- Percentual de desconto (ex: 10.00 para 10%)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Inserindo dados na tabela `cupons`
INSERT INTO `cupons` (`Codigo`, `Desconto`) VALUES
('DESCONTO10', 10.00),   -- 10% de desconto
('DESCONTO20', 20.00),   -- 20% de desconto
('VIP50', 50.00),        -- 50% de desconto
('PROMO5', 5.00);        -- 5% de desconto

-- Estrutura da tabela `Telefone`
CREATE TABLE `Telefone` (
  `ID_Telefone` INT PRIMARY KEY,
  `ID_Cliente` INT,
  `Num_Telefone` BIGINT NOT NULL,
  FOREIGN KEY (`ID_Cliente`) REFERENCES `Cliente`(`ID_Cliente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Estrutura da tabela `Compra`
CREATE TABLE `Compra` (
  `ID_Compra` INT PRIMARY KEY,
  `ID_Cliente` INT,
  `Data_compra` DATE NOT NULL,
  FOREIGN KEY (`ID_Cliente`) REFERENCES `Cliente`(`ID_Cliente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Estrutura da tabela `Fornecem`
CREATE TABLE `Fornecem` (
  `ID_Produto` INT,
  `ID_Fornecedor` INT,
  PRIMARY KEY (`ID_Produto`, `ID_Fornecedor`),
  FOREIGN KEY (`ID_Produto`) REFERENCES `Produto`(`ID_Produto`),
  FOREIGN KEY (`ID_Fornecedor`) REFERENCES `Fornecedor`(`ID_Fornecedor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Estrutura da tabela `Itens_Compra`
CREATE TABLE `Itens_Compra` (
  `ID_Produto` INT,
  `ID_Compra` INT,
  `Qtd_vendida` INT NOT NULL,
  PRIMARY KEY (`ID_Produto`, `ID_Compra`),
  FOREIGN KEY (`ID_Produto`) REFERENCES `Produto`(`ID_Produto`),
  FOREIGN KEY (`ID_Compra`) REFERENCES `Compra`(`ID_Compra`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Estrutura da tabela `FormaPgto`
CREATE TABLE `FormaPgto` (
  `ID_Compra` INT,
  `ID_metodoPgto` INT,
  `Valor` DECIMAL(10, 2) NOT NULL,
  PRIMARY KEY (`ID_Compra`, `ID_metodoPgto`),
  FOREIGN KEY (`ID_Compra`) REFERENCES `Compra`(`ID_Compra`),
  FOREIGN KEY (`ID_metodoPgto`) REFERENCES `MetodoPgto`(`ID_metodoPgto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
