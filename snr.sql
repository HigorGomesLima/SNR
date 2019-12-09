-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09-Dez-2019 às 01:42
-- Versão do servidor: 10.4.10-MariaDB
-- versão do PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `snr`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `codigo` bigint(20) NOT NULL,
  `matricula` varchar(8) NOT NULL,
  `turma` bigint(20) NOT NULL,
  `nome` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`codigo`, `matricula`, `turma`, `nome`) VALUES
(1, '953394', 1, 'ANA CAROLINA CARVALHO MOREIRA'),
(2, '952641', 1, 'ANY GABRIELLY ZUQUETE CARVALHO'),
(3, '958243', 1, 'BARBARA MARTINS DE OLIVEIRA CHAGAS'),
(4, '958239', 1, 'CAMILA ALVES DA SILVA'),
(5, '952476', 1, 'DANIELY SOUSA RODRIGUES'),
(6, '957882', 1, 'DÉBORA ESTANISLAU ALVES'),
(7, '949529', 1, 'DHYELS DOS SANTOS ALEX'),
(8, '949874', 1, 'ELOÍSA BRITO DE MOURA'),
(9, '951917', 1, 'GABRIEL DUARTE SANTOS'),
(10, '958224', 1, 'GABRIEL MARSAL DIAS'),
(11, '993071', 1, 'GABRIEL MONTEIRO DA SILVA'),
(12, '958056', 1, 'GABRIELLY FERREIRA MENDES'),
(13, '949596', 1, 'GEOVANA VERISSIMO PINTO BARBOSA'),
(14, '953287', 1, 'HEMILY CARLA ALVES DE LIMA'),
(15, '958155', 1, 'ISABELLA  ALVES OLIVEIRA'),
(16, '958220', 1, 'JHULLYE TOMÉ SILVA'),
(17, '1009331', 1, 'JOÃO MATEUS LIMA GONÇALVES'),
(18, '958261', 1, 'JOÃO VICTOR GONÇALVES'),
(19, '946403', 1, 'JULIA BUHRER DE FARIA MENDONCA'),
(20, '948004', 1, 'KAMILA FARIAS RAMOS'),
(21, '969028', 1, 'LEONARDO FILGUEIRA MACHADO'),
(22, '958075', 1, 'LUAN MARCOS DE ANDRADE SILVA'),
(23, '952053', 1, 'MARCOS DINIZ DA COSTA BARBOSA'),
(24, '991912', 1, 'MARIANA DOS SANTOS COELHO'),
(25, '957927', 1, 'MURILO SILVA CRUVINEL'),
(26, '958111', 1, 'NICOLAS GABRIEL RODRIGUES MARTINS'),
(27, '958237', 1, 'RAFAEL LOPES MENDES'),
(28, '993069', 1, 'RAFAEL SIQUEIRA PADILHA'),
(29, '958014', 1, 'SOPHIA ARAUJO FALEIRO DOS SANTOS'),
(30, '948483', 1, 'THAIS PEREIRA DA SILVA'),
(31, '947774', 1, 'THIAGO SOUSA SANTANA'),
(32, '957626', 1, 'VICTOR VITAL ARAUJO'),
(33, '992239', 1, 'VITORIA SANTOS COSTA'),
(34, '951838', 1, 'YASMIN ABBAS AWALE');

-- --------------------------------------------------------

--
-- Estrutura da tabela `bimestre`
--

CREATE TABLE `bimestre` (
  `codigo` bigint(20) NOT NULL,
  `nome` int(11) NOT NULL,
  `aluno` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `bimestre`
--

INSERT INTO `bimestre` (`codigo`, `nome`, `aluno`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 4, 1),
(5, 1, 2),
(6, 2, 2),
(7, 3, 2),
(8, 4, 2),
(9, 1, 3),
(10, 2, 3),
(11, 3, 3),
(12, 4, 3),
(13, 1, 4),
(14, 2, 4),
(15, 3, 4),
(16, 4, 4),
(17, 1, 5),
(18, 2, 5),
(19, 3, 5),
(20, 4, 5),
(21, 1, 6),
(22, 2, 6),
(23, 3, 6),
(24, 4, 6),
(25, 1, 7),
(26, 2, 7),
(27, 3, 7),
(28, 4, 7),
(29, 1, 8),
(30, 2, 8),
(31, 3, 8),
(32, 4, 8),
(33, 1, 9),
(34, 2, 9),
(35, 3, 9),
(36, 4, 9),
(37, 1, 10),
(38, 2, 10),
(39, 3, 10),
(40, 4, 10),
(41, 1, 11),
(42, 2, 11),
(43, 3, 11),
(44, 4, 11),
(45, 1, 12),
(46, 2, 12),
(47, 3, 12),
(48, 4, 12),
(49, 1, 13),
(50, 2, 13),
(51, 3, 13),
(52, 4, 13),
(53, 1, 14),
(54, 2, 14),
(55, 3, 14),
(56, 4, 14),
(57, 1, 15),
(58, 2, 15),
(59, 3, 15),
(60, 4, 15),
(61, 1, 16),
(62, 2, 16),
(63, 3, 16),
(64, 4, 16),
(65, 1, 17),
(66, 2, 17),
(67, 3, 17),
(68, 4, 17),
(69, 1, 18),
(70, 2, 18),
(71, 3, 18),
(72, 4, 18),
(73, 1, 19),
(74, 2, 19),
(75, 3, 19),
(76, 4, 19),
(77, 1, 20),
(78, 2, 20),
(79, 3, 20),
(80, 4, 20),
(81, 1, 21),
(82, 2, 21),
(83, 3, 21),
(84, 4, 21),
(85, 1, 22),
(86, 2, 22),
(87, 3, 22),
(88, 4, 22),
(89, 1, 23),
(90, 2, 23),
(91, 3, 23),
(92, 4, 23),
(93, 1, 24),
(94, 2, 24),
(95, 3, 24),
(96, 4, 24),
(97, 1, 25),
(98, 2, 25),
(99, 3, 25),
(100, 4, 25),
(101, 1, 26),
(102, 2, 26),
(103, 3, 26),
(104, 4, 26),
(105, 1, 27),
(106, 2, 27),
(107, 3, 27),
(108, 4, 27),
(109, 1, 28),
(110, 2, 28),
(111, 3, 28),
(112, 4, 28),
(113, 1, 29),
(114, 2, 29),
(115, 3, 29),
(116, 4, 29),
(117, 1, 30),
(118, 2, 30),
(119, 3, 30),
(120, 4, 30),
(121, 1, 31),
(122, 2, 31),
(123, 3, 31),
(124, 4, 31),
(125, 1, 32),
(126, 2, 32),
(127, 3, 32),
(128, 4, 32),
(129, 1, 33),
(130, 2, 33),
(131, 3, 33),
(132, 4, 33),
(133, 1, 34),
(134, 2, 34),
(135, 3, 34),
(136, 4, 34);

-- --------------------------------------------------------

--
-- Estrutura da tabela `nota`
--

CREATE TABLE `nota` (
  `codigo` bigint(20) NOT NULL,
  `bimestre` bigint(20) NOT NULL,
  `disciplina` varchar(30) NOT NULL,
  `docente` varchar(50) NOT NULL,
  `nota` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `turma`
--

CREATE TABLE `turma` (
  `codigo` bigint(20) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `ano` varchar(2) NOT NULL,
  `turma` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `turma`
--

INSERT INTO `turma` (`codigo`, `nome`, `ano`, `turma`) VALUES
(1, '6-001', '6', '1'),
(2, '6-002', '6', '1'),
(5, '6-003', '6', '3');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `turma` (`turma`);

--
-- Índices para tabela `bimestre`
--
ALTER TABLE `bimestre`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `aluno` (`aluno`);

--
-- Índices para tabela `nota`
--
ALTER TABLE `nota`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `bimestre` (`bimestre`);

--
-- Índices para tabela `turma`
--
ALTER TABLE `turma`
  ADD PRIMARY KEY (`codigo`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `aluno`
--
ALTER TABLE `aluno`
  MODIFY `codigo` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de tabela `bimestre`
--
ALTER TABLE `bimestre`
  MODIFY `codigo` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- AUTO_INCREMENT de tabela `nota`
--
ALTER TABLE `nota`
  MODIFY `codigo` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `turma`
--
ALTER TABLE `turma`
  MODIFY `codigo` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `aluno`
--
ALTER TABLE `aluno`
  ADD CONSTRAINT `aluno_ibfk_1` FOREIGN KEY (`turma`) REFERENCES `turma` (`codigo`);

--
-- Limitadores para a tabela `bimestre`
--
ALTER TABLE `bimestre`
  ADD CONSTRAINT `bimestre_ibfk_1` FOREIGN KEY (`aluno`) REFERENCES `aluno` (`codigo`);

--
-- Limitadores para a tabela `nota`
--
ALTER TABLE `nota`
  ADD CONSTRAINT `nota_ibfk_1` FOREIGN KEY (`bimestre`) REFERENCES `bimestre` (`codigo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
