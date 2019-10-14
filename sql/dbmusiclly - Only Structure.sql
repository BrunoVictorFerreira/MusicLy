-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 14-Out-2019 às 23:42
-- Versão do servidor: 10.4.6-MariaDB
-- versão do PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dbmusiclly`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `sobrenome` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `usuario` varchar(255) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL,
  `fk_Curiosidades` int(11) DEFAULT NULL,
  `imagem` varchar(255) DEFAULT '/musiclly/www/galeria/user.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `descricao` text DEFAULT NULL,
  `dataEnviada` varchar(255) DEFAULT NULL,
  `hora` varchar(255) DEFAULT NULL,
  `avaliacao` int(11) DEFAULT NULL,
  `sessao` int(11) DEFAULT NULL,
  `id_cad` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `curiosidades`
--

CREATE TABLE `curiosidades` (
  `id_Curiosidades` int(11) NOT NULL,
  `descricao` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_cad_curso`
--

CREATE TABLE `tbl_cad_curso` (
  `id_Cad` int(11) DEFAULT NULL,
  `id_Curso` int(11) DEFAULT NULL,
  `nota` int(11) DEFAULT 0,
  `progresso` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_curso`
--

CREATE TABLE `tbl_curso` (
  `id_Curso` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `valor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_Curiosidades` (`fk_Curiosidades`);

--
-- Índices para tabela `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cad` (`id_cad`);

--
-- Índices para tabela `curiosidades`
--
ALTER TABLE `curiosidades`
  ADD PRIMARY KEY (`id_Curiosidades`);

--
-- Índices para tabela `tbl_cad_curso`
--
ALTER TABLE `tbl_cad_curso`
  ADD KEY `id_Curso` (`id_Curso`),
  ADD KEY `id_Cad` (`id_Cad`);

--
-- Índices para tabela `tbl_curso`
--
ALTER TABLE `tbl_curso`
  ADD PRIMARY KEY (`id_Curso`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `curiosidades`
--
ALTER TABLE `curiosidades`
  MODIFY `id_Curiosidades` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbl_curso`
--
ALTER TABLE `tbl_curso`
  MODIFY `id_Curso` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `cadastro`
--
ALTER TABLE `cadastro`
  ADD CONSTRAINT `cadastro_ibfk_1` FOREIGN KEY (`fk_Curiosidades`) REFERENCES `curiosidades` (`id_Curiosidades`);

--
-- Limitadores para a tabela `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `comentarios_ibfk_1` FOREIGN KEY (`id_cad`) REFERENCES `cadastro` (`id`);

--
-- Limitadores para a tabela `tbl_cad_curso`
--
ALTER TABLE `tbl_cad_curso`
  ADD CONSTRAINT `tbl_cad_curso_ibfk_1` FOREIGN KEY (`id_Curso`) REFERENCES `tbl_curso` (`id_Curso`) ON DELETE CASCADE,
  ADD CONSTRAINT `tbl_cad_curso_ibfk_2` FOREIGN KEY (`id_Cad`) REFERENCES `cadastro` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
