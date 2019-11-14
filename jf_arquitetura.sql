-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 14-Nov-2019 às 15:49
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jf_arquitetura`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `orcamento`
--

CREATE TABLE `orcamento` (
  `cod` int(11) NOT NULL,
  `tipo_id` int(11) NOT NULL,
  `nome_cli` varchar(255) NOT NULL,
  `nome_predio` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `andares` int(11) NOT NULL,
  `apart_salas` int(11) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `elevadores` int(11) DEFAULT NULL,
  `idade_pred` int(11) DEFAULT NULL,
  `telefone` char(12) NOT NULL,
  `cel` char(12) NOT NULL,
  `detalhes` varchar(255) DEFAULT NULL,
  `status` enum('Pendente','Feito') DEFAULT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `observacoes` varchar(900) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `orcamento`
--

INSERT INTO `orcamento` (`cod`, `tipo_id`, `nome_cli`, `nome_predio`, `email`, `andares`, `apart_salas`, `endereco`, `elevadores`, `idade_pred`, `telefone`, `cel`, `detalhes`, `status`, `data`, `observacoes`) VALUES
(1, 1, 'Pelé', 'fojdfjj', 'wellersob@oi.com', 2, 3, 'qjqofjefjehj', 3, 3, '21 45555555', '21 894789847', 'hthtrthj', 'Feito', '2019-11-14 14:47:17', 'Cléo Severo Linda'),
(2, 1, 'Igulin', 'EFWERGRE', 'ugulin@lin.com', 2, 5, 'IOSDVJFV', 2, 2, '21 22222222', '21 55555555', 'GGRHTHTRHTH', 'Pendente', '2019-11-06 00:41:07', NULL),
(3, 8, 'Marcus Vinicius Aragão', 'Condomínio Cezar Maça', 'marcustec.inf@gmail.com', 3, 2, 'Rua Maça, 78', 1, 25, '21 34566778', '21 993339243', 'Nada a declarar maça', 'Feito', '2019-11-06 00:41:07', NULL),
(4, 1, 'Victoria Marques', 'Condomínio Beatriz', 'vicck.rj@gmail.com', 5, 8, 'Rua São Bento, 23', 4, 6, '2132043385', '21979067074', 'Teste teste teste ç$5', 'Pendente', '2019-11-06 00:41:07', NULL),
(5, 1, 'wellerson', 'Condomínio Beatriz', 'beatriz@btttgeatriz.com', 4, 44, 'Beatriz, 123', 444, 44444, '2132043385', '22222222', 'wtrwete', 'Pendente', '2019-11-06 00:42:50', NULL),
(6, 6, 'teste1', 'Condomínio Beatriz', 'teste1@teste.com', 4, 2, 'Beatriz, 123', 2, 2, '2132043385', '2158748987', 'teste3333333333333333333333', 'Pendente', '2019-11-06 00:44:10', NULL),
(7, 9, 'Francisco Marcos', 'Condomínio São Paulo', 'marcos@gmail.com', 1, 1, 'São Jorge, 1230', 1, 20, '21 32058478', '21 978459874', 'teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste tes', 'Feito', '2019-11-06 18:09:31', NULL),
(8, 9, 'Marlene', 'Condomínio Botafogo', 'victoria@victoria.com', 2, 2, 'teste', 2, 2, '', '2185748987', 'teste 2 teste 2 teste 2 teste 2 teste 2 teste 2 teste 2 teste 2 teste 2 teste 2 teste 2 teste 2 teste 2 teste 2 teste 2 teste 2 teste 2 teste 2 teste 2 teste 2 teste 2 teste 2 teste 2 teste 2 teste 2 teste 2 teste 2 teste 2 teste 2 teste 2 teste 2 teste 2', 'Pendente', '2019-11-06 18:11:28', NULL),
(9, 1, 'roger', 'Casa do Roger', 'vanisher@gmail.com', 2, 2, 'rua do roger', 2, 2, '21 25555555', '21 988888888', '', 'Pendente', '2019-11-14 14:29:27', 'roger é um cara bem ruim'),
(10, 8, 'Cléo Harper', 'casa da cléo', 'cleo@harpermail.com', 2, 2, 'rua da cléo', 2, 2, '21 2565555', '21 988888888', 'testando cléo', 'Pendente', '2019-11-08 04:42:57', NULL),
(11, 9, 'seu', 'rua do cara', 'ze@gmail.com', 2, 5, 'casa', 2, 2, '21 23433454', '21 988988989', '', 'Feito', '2019-11-14 14:47:23', NULL),
(12, 1, 'roger', 'casa', 'vanisher@gmail.com', 2, 5, 'casa', 2, 2, '021798914231', '021898582355', 'vgrg', 'Feito', '2019-11-14 14:47:24', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo`
--

CREATE TABLE `tipo` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tipo`
--

INSERT INTO `tipo` (`id`, `nome`) VALUES
(1, 'Autovistoria Predial'),
(2, 'Laudo Técnico'),
(3, 'Laudo Técnico de Recebimento de Obra'),
(4, 'Laudo Técnico de Reforma'),
(5, 'Laudo Técnico de Vizinhança'),
(6, 'Laudo Técnico de Edifício em Garantia'),
(7, 'Vistoria Locativa'),
(8, 'Manutenção Predial'),
(9, 'Desenvolvimento de Projetos');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `usuario_id` int(11) NOT NULL,
  `usuario` varchar(200) NOT NULL,
  `senha` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`usuario_id`, `usuario`, `senha`) VALUES
(1, 'admin', '0192023a7bbd73250516f069df18b500');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orcamento`
--
ALTER TABLE `orcamento`
  ADD PRIMARY KEY (`cod`),
  ADD KEY `tipo_id` (`tipo_id`);

--
-- Indexes for table `tipo`
--
ALTER TABLE `tipo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usuario_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orcamento`
--
ALTER TABLE `orcamento`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tipo`
--
ALTER TABLE `tipo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `orcamento`
--
ALTER TABLE `orcamento`
  ADD CONSTRAINT `orcamento_ibfk_1` FOREIGN KEY (`tipo_id`) REFERENCES `tipo` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
