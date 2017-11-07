-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 24-Out-2016 às 15:55
-- Versão do servidor: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grade`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplina`
--

CREATE TABLE `disciplina` (
  `cod_disc` int(5) NOT NULL,
  `nome_disc` varchar(150) COLLATE utf8_bin NOT NULL,
  `curso_disc` varchar(150) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `disciplina`
--

INSERT INTO `disciplina` (`cod_disc`, `nome_disc`, `curso_disc`) VALUES
(1, 'rteyteyty', 'AnÃ¡lise e Desenvolvimento de Sistemas'),
(2, 'LaboratÃ³rio de Redes', 'AnÃ¡lise e Desenvolvimento de Sistemas'),
(3, 'Linguagem de ProgramaÃ§ao', 'AnÃ¡lise e Desenvolvimento de Sistemas'),
(4, 'Logica e ProgramaÃ§ao', 'AnÃ¡lise e Desenvolvimento de Sistemas'),
(5, 'Matematica Discreta', 'AnÃ¡lise e Desenvolvimento de Sistemas'),
(6, 'Calculo I', 'Biocombustiveis'),
(7, 'FinanÃ§as', 'EAD GestÃ£o Empresarial'),
(8, 'Empreendedorismo', 'EAD GestÃ£o Empresarial'),
(9, 'CÃ¡lculo II', 'Biocombustiveis'),
(10, 'Engenharia de Software I', 'AnÃ¡lise e Desenvolvimento de Sistemas');

-- --------------------------------------------------------

--
-- Estrutura da tabela `grade`
--

CREATE TABLE `grade` (
  `cod_grade` int(5) NOT NULL,
  `cod_prof` int(5) NOT NULL,
  `semestre` varchar(10) COLLATE utf8_bin NOT NULL,
  `ano` int(4) NOT NULL,
  `validade` varchar(20) COLLATE utf8_bin NOT NULL,
  `categoria` varchar(100) COLLATE utf8_bin NOT NULL,
  `regime` varchar(100) COLLATE utf8_bin NOT NULL,
  `curso` varchar(150) COLLATE utf8_bin NOT NULL,
  `observacoes` text COLLATE utf8_bin
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `grade`
--

INSERT INTO `grade` (`cod_grade`, `cod_prof`, `semestre`, `ano`, `validade`, `categoria`, `regime`, `curso`, `observacoes`) VALUES
(1, 2, '1Âº', 2018, 'RJI', 'er', '2016-08-26', 'AnÃ¡lise e Desenvolvimento de Sistemas', NULL),
(2, 2, '2 Semestre', 2017, 'Hora-Aula', 'er', '2016-08-27', 'AnÃ¡lise e Desenvolvimento de Sistemas', NULL),
(3, 4, '1 Semestre', 2017, 'Hora-Aula', 'Associado I', '2017-01-01', 'AnÃ¡lise e Desenvolvimento de Sistemas', NULL),
(4, 5, '1 Semestre', 2017, 'Hora-Aula', 'Associado I', '2017-01-01', 'AnÃ¡lise e Desenvolvimento de Sistemas', NULL),
(5, 2, '1 Semestre', 2016, '2016-08-21', 'Associado I', 'Jornada', 'EAD - GestÃ£o Empresarial', NULL),
(6, 5, '2 Semestre', 2016, '2016-09-01', 'Associado I', 'Hora-Aula', 'AnÃ¡lise e Desenvolvimento de Sistemas', NULL),
(7, 3, '2 Semestre', 2021, '2016-08-23', '55555', 'Jornada', 'Biocombustiveis', NULL),
(8, 4, '1 Semestre', 2019, '2016-08-24', 'opop', 'Hora-Aula', 'AnÃ¡lise e Desenvolvimento de Sistemas', NULL),
(9, 9, '2 Semestre', 2016, '2016-08-24', 'Aluno', 'Hora-Aula', 'AnÃ¡lise e Desenvolvimento de Sistemas', NULL),
(10, 5, '2 Semestre', 2016, '2016-08-24', '55555', 'RJI', 'Biocombustiveis', NULL),
(11, 8, '2 Semestre', 2017, '2016-10-05', 'i', 'Hora-Aula', 'EAD - GestÃ£o Empresarial', NULL),
(12, 4, '2 Semestre', 2016, '2016-10-05', 'xxxxxx', 'Hora-Aula', 'AnÃ¡lise e Desenvolvimento de Sistemas', NULL),
(13, 11, '1 Semestre', 2017, '2017-01-01', 'Receitas', 'Hora-Aula', 'Biocombustiveis', NULL),
(14, 11, '2 Semestre', 2016, '2016-10-05', 'Receitas', 'RJI', 'AnÃ¡lise e Desenvolvimento de Sistemas', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `horario`
--

CREATE TABLE `horario` (
  `cod_horario` int(5) NOT NULL,
  `hora_inicio` time NOT NULL,
  `hora_termino` time NOT NULL,
  `turno` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `horario`
--

INSERT INTO `horario` (`cod_horario`, `hora_inicio`, `hora_termino`, `turno`) VALUES
(7, '11:10:00', '13:00:00', 'ManhÃ£'),
(2, '07:00:00', '08:00:00', 'ManhÃ£'),
(3, '07:30:00', '08:20:00', 'ManhÃ£'),
(4, '08:20:00', '09:10:00', 'ManhÃ£'),
(5, '09:20:00', '10:10:00', 'ManhÃ£'),
(6, '10:10:00', '11:00:00', 'ManhÃ£'),
(8, '00:10:00', '01:50:00', 'Noite'),
(9, '01:10:00', '02:00:00', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `hora_aula`
--

CREATE TABLE `hora_aula` (
  `cod_hora_aula` int(5) NOT NULL,
  `cod_grade` int(5) NOT NULL,
  `cod_disc` int(5) NOT NULL,
  `cod_horario` int(5) NOT NULL,
  `turno` varchar(10) COLLATE utf8_bin NOT NULL,
  `dia_semana` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `hora_aula`
--

INSERT INTO `hora_aula` (`cod_hora_aula`, `cod_grade`, `cod_disc`, `cod_horario`, `turno`, `dia_semana`) VALUES
(1, 1, 1, 0, 'Manhã', ''),
(2, 1, 1, 0, 'Manhã', ''),
(3, 3, 5, 0, 'Manhã', 'Segunda-Feira'),
(4, 1, 4, 0, 'Noite', 'Sexta-Feira'),
(5, 3, 9, 0, 'Noite', 'SÃ¡bado'),
(6, 3, 9, 0, 'Noite', 'SÃ¡bado'),
(7, 3, 10, 0, 'ManhÃ£', 'TerÃ§a-Feira'),
(8, 1, 2, 0, 'Manhã', 'Segunda-Feira'),
(9, 1, 5, 0, 'Tarde', 'Segunda-Feira'),
(10, 1, 9, 0, 'Manhã', 'Sexta-Feira'),
(11, 1, 5, 0, 'Manhã', 'Segunda-Feira'),
(12, 1, 6, 0, 'Manhã', 'Terça-Feira'),
(13, 1, 6, 0, 'Tarde', 'Terça-Feira'),
(14, 1, 6, 0, 'Tarde', 'Quinta-Feira'),
(15, 9, 4, 0, 'ManhÃ£', 'Segunda-Feira'),
(16, 9, 7, 0, 'Tarde', 'Sexta-Feira'),
(17, 9, 2, 0, 'Noite', 'Quinta-Feira'),
(18, 10, 7, 0, 'ManhÃ£', 'Sexta-Feira'),
(19, 7, 7, 5, 'Noite', 'SÃ¡bado'),
(20, 11, 6, 7, 'ManhÃ£', 'SÃ¡bado'),
(21, 11, 2, 2, 'Tarde', 'Quinta-Feira'),
(22, 11, 7, 8, 'Noite', 'Segunda-Feira'),
(23, 3, 2, 2, 'ManhÃ£', 'Segunda-Feira'),
(24, 3, 2, 4, 'ManhÃ£', 'Segunda-Feira'),
(25, 12, 2, 3, 'ManhÃ£', 'TerÃ§a-Feira'),
(26, 13, 7, 8, 'Noite', 'TerÃ§a-Feira'),
(27, 13, 7, 8, 'Noite', 'Quarta-Feira'),
(28, 12, 7, 6, 'ManhÃ£', 'Quarta-Feira'),
(29, 12, 5, 6, 'Tarde', 'TerÃ§a-Feira'),
(30, 12, 4, 4, 'Tarde', 'TerÃ§a-Feira'),
(31, 14, 10, 7, 'Noite', 'SÃ¡bado'),
(32, 14, 5, 5, 'ManhÃ£', 'SÃ¡bado'),
(33, 13, 1, 5, 'Noite', 'SÃ¡bado'),
(34, 14, 7, 5, 'Noite', 'SÃ¡bado'),
(35, 14, 5, 5, 'Tarde', 'Sexta-Feira'),
(36, 14, 2, 5, 'Noite', 'SÃ¡bado'),
(37, 12, 4, 6, 'ManhÃ£', 'Quinta-Feira'),
(38, 12, 1, 7, 'ManhÃ£', 'Sexta-Feira'),
(39, 12, 1, 6, 'Noite', 'SÃ¡bado'),
(40, 9, 3, 5, 'Noite', 'SÃ¡bado'),
(41, 9, 8, 6, 'Noite', 'Sabado'),
(42, 9, 10, 3, 'Noite', 'Sexta-Feira'),
(43, 9, 2, 4, 'Tarde', 'Sabado');

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor`
--

CREATE TABLE `professor` (
  `cod_prof` int(5) NOT NULL,
  `nome_prof` varchar(150) COLLATE utf8_bin NOT NULL,
  `fone_prof` varchar(11) COLLATE utf8_bin NOT NULL,
  `email_prof` varchar(150) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `professor`
--

INSERT INTO `professor` (`cod_prof`, `nome_prof`, `fone_prof`, `email_prof`) VALUES
(9, 'Edson AsÃªncio Leal', '18991114346', 'edsonasencioleal@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `disciplina`
--
ALTER TABLE `disciplina`
  ADD PRIMARY KEY (`cod_disc`);

--
-- Indexes for table `grade`
--
ALTER TABLE `grade`
  ADD PRIMARY KEY (`cod_grade`);

--
-- Indexes for table `horario`
--
ALTER TABLE `horario`
  ADD PRIMARY KEY (`cod_horario`);

--
-- Indexes for table `hora_aula`
--
ALTER TABLE `hora_aula`
  ADD PRIMARY KEY (`cod_hora_aula`);

--
-- Indexes for table `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`cod_prof`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `disciplina`
--
ALTER TABLE `disciplina`
  MODIFY `cod_disc` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `grade`
--
ALTER TABLE `grade`
  MODIFY `cod_grade` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `horario`
--
ALTER TABLE `horario`
  MODIFY `cod_horario` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `hora_aula`
--
ALTER TABLE `hora_aula`
  MODIFY `cod_hora_aula` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `professor`
--
ALTER TABLE `professor`
  MODIFY `cod_prof` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
