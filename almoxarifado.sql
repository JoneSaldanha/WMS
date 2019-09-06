-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06-Set-2019 às 21:57
-- Versão do servidor: 10.3.16-MariaDB
-- versão do PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `almoxarifado`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `itens_armarios`
--

CREATE TABLE `itens_armarios` (
  `id` int(120) NOT NULL,
  `nome` text NOT NULL,
  `n_armario` text NOT NULL,
  `n_andar` text NOT NULL,
  `quantidade` int(120) NOT NULL,
  `observacao` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `itens_armarios`
--

INSERT INTO `itens_armarios` (`id`, `nome`, `n_armario`, `n_andar`, `quantidade`, `observacao`) VALUES
(17, 'Rolamento', '1', '1', 90, 'Nenhuma');

-- --------------------------------------------------------

--
-- Estrutura da tabela `itens_ruas`
--

CREATE TABLE `itens_ruas` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `n_rua` int(10) NOT NULL,
  `lado` varchar(1) NOT NULL,
  `n_prateleira` int(15) NOT NULL,
  `n_andar` int(15) NOT NULL,
  `quantidade` int(100) NOT NULL,
  `observacao` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `itens_ruas`
--

INSERT INTO `itens_ruas` (`id`, `nome`, `n_rua`, `lado`, `n_prateleira`, `n_andar`, `quantidade`, `observacao`) VALUES
(5, 'Braçadeira', 1, 'A', 1, 1, 70, 'NENHUMA'),
(6, 'Parafuso', 1, 'A', 1, 1, 90, 'NENHUMA');

-- --------------------------------------------------------

--
-- Estrutura da tabela `registros`
--

CREATE TABLE `registros` (
  `id` int(120) NOT NULL,
  `area` varchar(120) NOT NULL,
  `do_setor` varchar(120) NOT NULL,
  `ao_setor` varchar(120) NOT NULL,
  `func_solicitante` varchar(40) NOT NULL,
  `func_solicitado` varchar(120) NOT NULL,
  `data_reg` varchar(100) NOT NULL,
  `observacao` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `registros`
--

INSERT INTO `registros` (`id`, `area`, `do_setor`, `ao_setor`, `func_solicitante`, `func_solicitado`, `data_reg`, `observacao`) VALUES
(1, 'Ruas', 'Informatica', 'Almoxarifado', 'Lucas de Jesus', 'Ana', '2019-09-06', 'Nenhuma'),
(2, 'Ruas', '', '', '', '', '2019-09-06', 'Nenhuma'),
(3, 'Ruas', 'Informatica', 'Almoxarifado', 'Lucas de Jesus', 'Ana', '2019-09-06', 'Nenhuma');

-- --------------------------------------------------------

--
-- Estrutura da tabela `registros_itens`
--

CREATE TABLE `registros_itens` (
  `id` int(120) NOT NULL,
  `tipo` text NOT NULL,
  `id_registro` int(100) NOT NULL,
  `produto` varchar(100) NOT NULL,
  `nome` varchar(120) NOT NULL,
  `quantidade` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `registros_itens`
--

INSERT INTO `registros_itens` (`id`, `tipo`, `id_registro`, `produto`, `nome`, `quantidade`) VALUES
(1, 'Saida', 1, '5', 'Braçadeira', 10),
(2, 'Entrada', 2, '5', 'Braçadeira', 10),
(3, 'Saida', 3, '5', 'Braçadeira', 10),
(4, 'Saida', 3, '6', 'Parafuso', 10);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `itens_armarios`
--
ALTER TABLE `itens_armarios`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `itens_ruas`
--
ALTER TABLE `itens_ruas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `registros`
--
ALTER TABLE `registros`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `registros_itens`
--
ALTER TABLE `registros_itens`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `itens_armarios`
--
ALTER TABLE `itens_armarios`
  MODIFY `id` int(120) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `itens_ruas`
--
ALTER TABLE `itens_ruas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `registros`
--
ALTER TABLE `registros`
  MODIFY `id` int(120) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `registros_itens`
--
ALTER TABLE `registros_itens`
  MODIFY `id` int(120) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
