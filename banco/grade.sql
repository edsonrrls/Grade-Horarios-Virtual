-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 02-Nov-2017 às 13:46
-- Versão do servidor: 5.7.17
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
-- Estrutura da tabela `admin`
--

CREATE TABLE `admin` (
  `cod_admin` int(11) NOT NULL,
  `nome_admin` varchar(150) COLLATE utf8_bin NOT NULL,
  `usuario` varchar(10) COLLATE utf8_bin NOT NULL,
  `senha` int(8) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

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
(18, 'InglÃªs I', 'AnÃ¡lise e Desenvolvimento de Sistemas'),
(17, 'MatemÃ¡tica Discreta', 'AnÃ¡lise e Desenvolvimento de Sistemas'),
(16, 'AdministraÃ§Ã£o Geral', 'AnÃ¡lise e Desenvolvimento de Sistemas'),
(15, 'Arquitetura e OrganizaÃ§Ã£o de Computadores', 'AnÃ¡lise e Desenvolvimento de Sistemas'),
(14, 'LaboratÃ³rio de Hardware', 'AnÃ¡lise e Desenvolvimento de Sistemas'),
(12, 'ProgramaÃ§Ã£o em MicroinformÃ¡tica', 'AnÃ¡lise e Desenvolvimento de Sistemas'),
(13, 'Algoritmos e LÃ³gica de ProgramaÃ§Ã£o', 'AnÃ¡lise e Desenvolvimento de Sistemas'),
(19, 'Engenharia de Software I', 'AnÃ¡lise e Desenvolvimento de Sistemas'),
(20, 'Linguagem de ProgramaÃ§Ã£o', 'AnÃ¡lise e Desenvolvimento de Sistemas'),
(21, 'Sistemas de InformaÃ§Ã£o', 'AnÃ¡lise e Desenvolvimento de Sistemas'),
(22, 'Contabilidade', 'AnÃ¡lise e Desenvolvimento de Sistemas'),
(23, 'CÃ¡lculo', 'AnÃ¡lise e Desenvolvimento de Sistemas'),
(24, 'ComunicaÃ§Ã£o e ExpressÃ£o', 'AnÃ¡lise e Desenvolvimento de Sistemas'),
(25, 'InglÃªs II', 'AnÃ¡lise e Desenvolvimento de Sistemas'),
(26, 'Engenharia de Software II', 'AnÃ¡lise e Desenvolvimento de Sistemas'),
(27, 'InteraÃ§Ã£o Humano Computador', 'AnÃ¡lise e Desenvolvimento de Sistemas'),
(28, 'Estruturas de Dados', 'AnÃ¡lise e Desenvolvimento de Sistemas'),
(29, 'Sistemas Operacionais I', 'AnÃ¡lise e Desenvolvimento de Sistemas'),
(30, 'Economia e FinanÃ§as', 'AnÃ¡lise e Desenvolvimento de Sistemas'),
(31, 'EstatÃ­stica aplicada', 'AnÃ¡lise e Desenvolvimento de Sistemas'),
(32, 'Sociedade e Tecnologia', 'AnÃ¡lise e Desenvolvimento de Sistemas'),
(33, 'InglÃªs III', 'AnÃ¡lise e Desenvolvimento de Sistemas'),
(34, 'Engenharia de Software III', 'AnÃ¡lise e Desenvolvimento de Sistemas'),
(35, 'ProgramaÃ§Ã£o Orientada a Objetos', 'AnÃ¡lise e Desenvolvimento de Sistemas'),
(36, 'Banco de dados', 'AnÃ¡lise e Desenvolvimento de Sistemas'),
(37, 'Sistemas Operacionais II', 'AnÃ¡lise e Desenvolvimento de Sistemas'),
(38, 'Metodologia da Pesquisa CientÃ­fico-tecnolÃ³gica', 'AnÃ¡lise e Desenvolvimento de Sistemas'),
(39, 'InglÃªs IV', 'AnÃ¡lise e Desenvolvimento de Sistemas'),
(40, 'LaboratÃ³rio de Engenharia de Software', 'AnÃ¡lise e Desenvolvimento de Sistemas'),
(41, 'SeguranÃ§a da InformaÃ§Ã£o', 'AnÃ¡lise e Desenvolvimento de Sistemas'),
(42, 'Redes de computadores', 'AnÃ¡lise e Desenvolvimento de Sistemas'),
(43, 'LaboratÃ³rio de Banco de Dados', 'AnÃ¡lise e Desenvolvimento de Sistemas'),
(44, 'Sistemas distribuÃ­dos', 'AnÃ¡lise e Desenvolvimento de Sistemas'),
(45, 'ProgramaÃ§Ã£o Linear e AplicaÃ§Ãµes', 'AnÃ¡lise e Desenvolvimento de Sistemas'),
(46, 'InglÃªs V', 'AnÃ¡lise e Desenvolvimento de Sistemas'),
(47, 'GestÃ£o de Projetos', 'AnÃ¡lise e Desenvolvimento de Sistemas'),
(48, 'GestÃ£o e GovernanÃ§a deTecnologia da InformaÃ§Ã£o', 'AnÃ¡lise e Desenvolvimento de Sistemas'),
(49, 'TÃ³picos Especiais em InformÃ¡tica', 'AnÃ¡lise e Desenvolvimento de Sistemas'),
(50, 'LaboratÃ³rio de Redes', 'AnÃ¡lise e Desenvolvimento de Sistemas'),
(51, 'InteligÃªncia Artificial', 'AnÃ¡lise e Desenvolvimento de Sistemas'),
(52, 'Auditoria de Sistemas', 'AnÃ¡lise e Desenvolvimento de Sistemas'),
(53, 'GestÃ£o de Equipes', 'AnÃ¡lise e Desenvolvimento de Sistemas'),
(54, 'Empreendedorismo', 'AnÃ¡lise e Desenvolvimento de Sistemas'),
(55, 'Ã‰tica e Responsabilidade Profissional', 'AnÃ¡lise e Desenvolvimento de Sistemas'),
(56, 'InglÃªs VI', 'AnÃ¡lise e Desenvolvimento de Sistemas');

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
(16, 20, '2 Semestre', 2017, '2017-08-18', 'A3', 'RJI', 'AnÃ¡lise e Desenvolvimento de Sistemas', NULL),
(17, 17, '1 Semestre', 2022, '2017-08-28', 'A3', 'Jornada', 'GestÃ£o Empresarial', NULL),
(18, 18, '1 Semestre', 2019, '2017-08-31', 'AL', 'Hora Aula', 'AnÃ¡lise e Desenvolvimento de Sistemas', NULL),
(19, 36, '1 Semestre', 2018, '2018-01-08', '-', 'Hora Aula', 'AnÃ¡lise e Desenvolvimento de Sistemas', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `horario`
--

CREATE TABLE `horario` (
  `cod_horario` int(5) NOT NULL,
  `hora_inicio` varchar(5) COLLATE utf8_bin NOT NULL,
  `hora_termino` varchar(5) COLLATE utf8_bin NOT NULL,
  `turno` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `horario`
--

INSERT INTO `horario` (`cod_horario`, `hora_inicio`, `hora_termino`, `turno`) VALUES
(12, '08:20', '09:10', 'ManhÃ£'),
(14, '10:10', '11:00', 'ManhÃ£'),
(13, '09:20', '10:10', 'ManhÃ£'),
(11, '07:30', '08:20', 'ManhÃ£'),
(15, '11:10', '12:00', 'ManhÃ£'),
(16, '12:00', '12:50', 'ManhÃ£'),
(17, '12:55', '13:40', 'Tarde');

-- --------------------------------------------------------

--
-- Estrutura da tabela `hora_aula`
--

CREATE TABLE `hora_aula` (
  `cod_hora_aula` int(5) NOT NULL,
  `cod_grade` int(5) NOT NULL,
  `cod_disc` int(5) NOT NULL,
  `cod_horario` int(5) NOT NULL,
  `dia_semana` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `hora_aula`
--

INSERT INTO `hora_aula` (`cod_hora_aula`, `cod_grade`, `cod_disc`, `cod_horario`, `dia_semana`) VALUES
(54, 19, 15, 15, 'TerÃ§a-feira'),
(55, 19, 15, 16, 'TerÃ§a-feira'),
(56, 19, 15, 13, 'Quinta-feira'),
(57, 19, 15, 14, 'Quinta-feira'),
(58, 19, 19, 13, 'Quarta-feira'),
(59, 19, 19, 14, 'Quarta-feira'),
(60, 19, 19, 11, 'Quinta-feira'),
(61, 19, 19, 12, 'Quinta-feira'),
(62, 19, 26, 11, 'TerÃ§a-feira'),
(63, 19, 26, 12, 'TerÃ§a-feira'),
(64, 19, 26, 11, 'Quarta-feira'),
(65, 19, 26, 12, 'Quarta-feira'),
(66, 19, 48, 13, 'TerÃ§a-feira'),
(67, 19, 48, 14, 'TerÃ§a-feira'),
(68, 19, 48, 15, 'Quarta-feira'),
(69, 19, 48, 16, 'Quarta-feira'),
(70, 19, 14, 11, 'Segunda-feira'),
(71, 19, 14, 12, 'Segunda-feira');

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
(32, 'Fernando Parra dos Anjos Lima, Dr', '6533118500', 'fernando@hotmail.com'),
(33, 'Gabriela Cristiane Mendes Rahal, Me', '1836365252', 'gabriela@hotmail.com'),
(31, 'Euclides Teixeira Neto, Esp', '1836249914', 'euclides@hotmail.com'),
(30, 'CÃ©lia Regina Nugoli Estevam, Dra', '1836259914', 'celia@hotmail.com'),
(29, 'Alexandre Marcelino da Silva, Me', '1836365252', 'alexandre@hotmail.com'),
(34, 'Luciana Passos Marcondes Scarsiotta, Dra', '1836259917', 'luciana@hotmail.com'),
(35, 'Luciane Berti Ribeiro, Esp', '1800001111', 'luciane@hotmai.com'),
(36, 'Lucilena de Lima, Me', '1836259917', 'luma.delima@gmail.com'),
(37, 'Renata de Freitas GÃ³is Comparoni, Dra', '1833739366', 'renata@hotmail.com'),
(38, 'Ronnie Marcos Rillo, Me', '1836259914', 'ronnie.alunos@gmail.com'),
(39, 'Rafael Marcelino de Jesus, Me', '1836365252', 'rafael@hotmail.com'),
(40, 'Samuel StÃ¡bile, Me', '1836492200', 'samuel@hotmail.com'),
(41, 'Saulo FelÃ­cio Fernandes Zambotti, Me', '1836259914', 'saulo@hotmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `prof_disc`
--

CREATE TABLE `prof_disc` (
  `cod_prof_disc` int(5) NOT NULL,
  `cod_prof` int(5) NOT NULL,
  `cod_disc` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `prof_disc`
--

INSERT INTO `prof_disc` (`cod_prof_disc`, `cod_prof`, `cod_disc`) VALUES
(1, 18, 2),
(4, 17, 6),
(3, 20, 2),
(6, 18, 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`cod_admin`);

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
-- Indexes for table `prof_disc`
--
ALTER TABLE `prof_disc`
  ADD PRIMARY KEY (`cod_prof_disc`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `cod_admin` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `disciplina`
--
ALTER TABLE `disciplina`
  MODIFY `cod_disc` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
--
-- AUTO_INCREMENT for table `grade`
--
ALTER TABLE `grade`
  MODIFY `cod_grade` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `horario`
--
ALTER TABLE `horario`
  MODIFY `cod_horario` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `hora_aula`
--
ALTER TABLE `hora_aula`
  MODIFY `cod_hora_aula` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
--
-- AUTO_INCREMENT for table `professor`
--
ALTER TABLE `professor`
  MODIFY `cod_prof` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `prof_disc`
--
ALTER TABLE `prof_disc`
  MODIFY `cod_prof_disc` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
