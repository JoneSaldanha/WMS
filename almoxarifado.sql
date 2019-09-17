-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17-Set-2019 às 15:54
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
-- Estrutura da tabela `enderecos`
--

CREATE TABLE `enderecos` (
  `id` int(120) NOT NULL,
  `identificador` enum('Ruas','Armarios','Gaveteiros') NOT NULL,
  `rua` int(100) NOT NULL,
  `lado` text NOT NULL,
  `armario` int(100) NOT NULL,
  `prateleira` int(100) NOT NULL,
  `andar` int(100) NOT NULL,
  `gaveteiro` int(100) NOT NULL,
  `container` int(100) NOT NULL,
  `observacao` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `enderecos`
--

INSERT INTO `enderecos` (`id`, `identificador`, `rua`, `lado`, `armario`, `prateleira`, `andar`, `gaveteiro`, `container`, `observacao`) VALUES
(17, 'Ruas', 1, 'A', 0, 1, 1, 0, 0, 'Nenhum'),
(18, 'Ruas', 2, 'B', 0, 2, 3, 0, 0, 'teste'),
(19, 'Armarios', 0, 'A', 1, 0, 3, 0, 0, 'Nenhua'),
(20, 'Ruas', 1, 'A', 0, 0, 3, 0, 0, 'Nenhuma'),
(21, 'Gaveteiros', 0, '', 0, 0, 3, 1, 20, 'Nenhuma');

-- --------------------------------------------------------

--
-- Estrutura da tabela `itens`
--

CREATE TABLE `itens` (
  `id` int(120) NOT NULL,
  `cod_end` varchar(120) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `referencia` varchar(120) NOT NULL,
  `quantidade` int(120) NOT NULL,
  `observacao` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `itens`
--

INSERT INTO `itens` (`id`, `cod_end`, `nome`, `referencia`, `quantidade`, `observacao`) VALUES
(1, '17', 'Prego', '022', 110, 'Nada'),
(2, '', 'Rolamento', 'RFE-E2', 0, 'Nada');

-- --------------------------------------------------------

--
-- Estrutura da tabela `registros`
--

CREATE TABLE `registros` (
  `id` int(120) NOT NULL,
  `tipo_reg` text NOT NULL,
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

INSERT INTO `registros` (`id`, `tipo_reg`, `do_setor`, `ao_setor`, `func_solicitante`, `func_solicitado`, `data_reg`, `observacao`) VALUES
(8, 'Saida', 'Informatica', 'Almoxarifado', 'Lucas de Jesus', 'Ana', '2019-09-10', 'Nenhuma'),
(9, 'Entrada', '', '', '', '', '2019-09-11', 'Nenhuma'),
(10, 'Saida', 'Teste 0', 'Teste 0', 'Teste 0', 'Teste 0', '2019-09-11', 'Nenhuma'),
(11, 'Saida', 'Informatica', 'Almoxarifado', 'Lucas de Jesus', 'Ana', '2019-09-11', 'Nenhuma'),
(12, 'Saida', 'Informatica', 'Almoxarifado', 'Lucas de Jesus', 'Ana', '2019-09-12', 'teste 02 lucas'),
(13, 'Saida', 'Informatica', 'Almoxarifado', 'Lucas de Jesus', 'Ana', '2019-09-12', 'teste 3'),
(14, 'Entrada', '', '', '', '', '2019-09-12', 'teste 4'),
(15, 'Entrada', '', '', '', '', '2019-09-12', 'note 02'),
(16, 'Entrada', '', '', '', '', '2019-09-12', 'Nenhuma'),
(17, 'Entrada', '', '', '', '', '2019-09-12', 'Nenhuma'),
(18, 'Entrada', '', '', '', '', '2019-09-12', 'Nenhuma'),
(19, 'Entrada', '', '', '', '', '2019-09-16', 'Nenhuma'),
(20, 'Entrada', '', '', '', '', '2019-09-16', 'Nenhuma'),
(21, 'Entrada', '', '', '', '', '2019-09-16', 'Nenhuma');

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
(4, 'Saida', 3, '6', 'Parafuso', 10),
(5, 'Saida', 4, '5', 'Braçadeira', 10),
(6, 'Saida', 4, '6', 'Parafuso', 10),
(7, 'Entrada', 7, '2', 'Parafuso', 20),
(8, 'Saida', 8, '2', 'Parafuso', 10),
(9, 'Entrada', 9, '2', 'Parafuso', 10),
(10, 'Saida', 10, '2', 'Parafuso', 50),
(11, 'Saida', 11, '2', 'Parafuso', 5),
(12, 'Saida', 12, '10', 'calculadora', 4),
(13, 'Saida', 13, '10', 'calculadora', 1),
(14, 'Entrada', 14, '10', 'calculadora', 15),
(15, 'Entrada', 15, '11', 'notebook', 10),
(16, 'Entrada', 16, '15', 'Prego', 10),
(17, 'Entrada', 17, '15', 'Prego', 100),
(18, 'Entrada', 18, '16', 'Gabinete', 1000000),
(19, 'Entrada', 19, '159', 'Prego', 1),
(20, 'Entrada', 20, '1', 'Prego', 100),
(21, 'Entrada', 21, '1', 'Prego', 10);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(200) NOT NULL,
  `login` varchar(120) NOT NULL,
  `senha` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `login`, `senha`) VALUES
(1, 'ana.lecia', '$argon2i$v=19$m=1024,t=2,p=2$SkJYTGgvbm9tdzUzaFVCMQ$RWseu2b9yK1YVPjWp8LEME/lcNmgUM6frbx5Ym/ooRA');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `enderecos`
--
ALTER TABLE `enderecos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `itens`
--
ALTER TABLE `itens`
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
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `enderecos`
--
ALTER TABLE `enderecos`
  MODIFY `id` int(120) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de tabela `itens`
--
ALTER TABLE `itens`
  MODIFY `id` int(120) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `registros`
--
ALTER TABLE `registros`
  MODIFY `id` int(120) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de tabela `registros_itens`
--
ALTER TABLE `registros_itens`
  MODIFY `id` int(120) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
