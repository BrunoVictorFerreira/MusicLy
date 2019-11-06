-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 06-Nov-2019 às 14:16
-- Versão do servidor: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbmusiclly`
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
  `imagem` varchar(255) DEFAULT '/musiclly/www/galeria/user.png',
  `status` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`id`, `nome`, `sobrenome`, `email`, `usuario`, `senha`, `fk_Curiosidades`, `imagem`, `status`) VALUES
(1, 'teste', 'teste', 'teste@gmail.com', 'teste', '202cb962ac59075b964b07152d234b70', NULL, '/musiclly/www/galeria/user.png', 0),
(2, 'admin', 'admin', 'admin@gmail.com', 'admin', '202cb962ac59075b964b07152d234b70', NULL, '/musiclly/uploads/15724419325db98f4cc5ce2.jpeg', 1),
(3, 'teste', 'testeSobrenome', 'teste1@gmail.com', 'teste1', '202cb962ac59075b964b07152d234b70', NULL, '/musiclly/www/galeria/user.png', 0),
(4, 'teste', 'testeSobrenome', 'teste2@gmail.com', 'teste2', '202cb962ac59075b964b07152d234b70', NULL, '/musiclly/www/galeria/user.png', 0),
(5, 'teste', 'testeSobrenome', 'teste3@gmail.com', 'teste3', '202cb962ac59075b964b07152d234b70', NULL, '/musiclly/www/galeria/user.png', 0),
(6, 'teste', 'testeSobrenome', 'teste4@gmail.com', 'teste4', '202cb962ac59075b964b07152d234b70', NULL, '/musiclly/www/galeria/user.png', 0),
(7, 'teste', 'testeSobrenome', 'teste5@gmail.com', 'teste5', '202cb962ac59075b964b07152d234b70', NULL, '/musiclly/www/galeria/user.png', 0),
(8, 'teste', 'testeSobrenome', 'teste6@gmail.com', 'teste6', '202cb962ac59075b964b07152d234b70', NULL, '/musiclly/www/galeria/user.png', 0),
(9, 'teste', 'testeSobrenome', 'teste7@gmail.com', 'teste7', '202cb962ac59075b964b07152d234b70', NULL, '/musiclly/www/galeria/user.png', 0),
(10, 'teste', 'testeSobrenome', 'teste1@gmail.com', 'teste1', '202cb962ac59075b964b07152d234b70', NULL, '/musiclly/www/galeria/user.png', 0),
(11, 'teste', 'testeSobrenome', 'teste2@gmail.com', 'teste2', '202cb962ac59075b964b07152d234b70', NULL, '/musiclly/www/galeria/user.png', 0),
(12, 'teste', 'testeSobrenome', 'teste3@gmail.com', 'teste3', '202cb962ac59075b964b07152d234b70', NULL, '/musiclly/www/galeria/user.png', 0),
(13, 'teste', 'testeSobrenome', 'teste4@gmail.com', 'teste4', '202cb962ac59075b964b07152d234b70', NULL, '/musiclly/www/galeria/user.png', 0),
(14, 'teste', 'testeSobrenome', 'teste5@gmail.com', 'teste5', '202cb962ac59075b964b07152d234b70', NULL, '/musiclly/www/galeria/user.png', 0),
(15, 'teste', 'testeSobrenome', 'teste6@gmail.com', 'teste6', '202cb962ac59075b964b07152d234b70', NULL, '/musiclly/www/galeria/user.png', 0),
(16, 'teste', 'testeSobrenome', 'teste7@gmail.com', 'teste7', '202cb962ac59075b964b07152d234b70', NULL, '/musiclly/www/galeria/user.png', 0),
(17, 'teste', 'testeSobrenome', 'teste1@gmail.com', 'teste1', '202cb962ac59075b964b07152d234b70', NULL, '/musiclly/www/galeria/user.png', 0),
(18, 'teste', 'testeSobrenome', 'teste2@gmail.com', 'teste2', '202cb962ac59075b964b07152d234b70', NULL, '/musiclly/www/galeria/user.png', 0),
(19, 'teste', 'testeSobrenome', 'teste3@gmail.com', 'teste3', '202cb962ac59075b964b07152d234b70', NULL, '/musiclly/www/galeria/user.png', 0),
(20, 'teste', 'testeSobrenome', 'teste4@gmail.com', 'teste4', '202cb962ac59075b964b07152d234b70', NULL, '/musiclly/www/galeria/user.png', 0),
(21, 'teste', 'testeSobrenome', 'teste5@gmail.com', 'teste5', '202cb962ac59075b964b07152d234b70', NULL, '/musiclly/www/galeria/user.png', 0),
(22, 'teste', 'testeSobrenome', 'teste6@gmail.com', 'teste6', '202cb962ac59075b964b07152d234b70', NULL, '/musiclly/www/galeria/user.png', 0),
(23, 'teste', 'testeSobrenome', 'teste7@gmail.com', 'teste7', '202cb962ac59075b964b07152d234b70', NULL, '/musiclly/www/galeria/user.png', 0),
(24, 'asjkhd', 'sldkjf', 'lasjkkldjas@gmail.com', 'testeparaletrasgrandescas', '202cb962ac59075b964b07152d234b70', NULL, '/musiclly/www/galeria/user.png', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `id_de` varchar(255) DEFAULT NULL,
  `id_para` varchar(255) DEFAULT NULL,
  `mensagem` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `chat`
--



-- --------------------------------------------------------

--
-- Estrutura da tabela `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `descricao` text,
  `dataEnviada` varchar(255) DEFAULT NULL,
  `hora` varchar(255) DEFAULT NULL,
  `avaliacao` int(11) DEFAULT NULL,
  `sessao` int(11) DEFAULT NULL,
  `id_cad` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `comentarios`
--



-- --------------------------------------------------------

--
-- Estrutura da tabela `curiosidades`
--

CREATE TABLE `curiosidades` (
  `id_Curiosidades` int(11) NOT NULL,
  `descricao` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `curiosidades`
--

INSERT INTO `curiosidades` (`id_Curiosidades`, `descricao`) VALUES
(1, 'Não gostamos da versão original de uma música porque ela é melhor, mas sim porque foi a primeira que escutamos'),
(2, 'Sua música favorita possivelmente só ocupa esse lugar porque você a associou com algum evento emocional da sua vida'),
(3, 'As batidas do seu coração costumam seguir o ritmo da música que você ouve'),
(4, 'Flores crescem mais rapidamente quando são expostas à música'),
(5, 'Elvis Presley não escreveu nenhuma de suas músicas'),
(6, 'O tipo de música que você ouve afeta diretamente a forma como você enxerga o mundo'),
(7, 'Os Beatles se chamavam Johnny and the Moondogs'),
(8, 'O instrumento musical mais caro do mundo, um violino Stradivarius, foi vendido em 2011 por US$ 15,9 milhões');

-- --------------------------------------------------------

--
-- Estrutura da tabela `favoritos`
--

CREATE TABLE `favoritos` (
  `id` int(11) NOT NULL,
  `id_Cad` int(11) DEFAULT NULL,
  `id_Favoritado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `favoritos`
--



-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_cad_curso`
--

CREATE TABLE `tbl_cad_curso` (
  `id_Cad` int(11) DEFAULT NULL,
  `id_Curso` int(11) DEFAULT NULL,
  `nota` int(11) DEFAULT '0',
  `progresso` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tbl_cad_curso`
--



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
-- Extraindo dados da tabela `tbl_curso`
--

INSERT INTO `tbl_curso` (`id_Curso`, `nome`, `valor`) VALUES
(1, 'Modulo 1', 20),
(2, 'Modulo 2', 20),
(3, 'Modulo 3', 20),
(4, 'Modulo 4', 20),
(5, 'Modulo 5', 20);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_Curiosidades` (`fk_Curiosidades`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cad` (`id_cad`);

--
-- Indexes for table `curiosidades`
--
ALTER TABLE `curiosidades`
  ADD PRIMARY KEY (`id_Curiosidades`);

--
-- Indexes for table `favoritos`
--
ALTER TABLE `favoritos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_Cad` (`id_Cad`);

--
-- Indexes for table `tbl_cad_curso`
--
ALTER TABLE `tbl_cad_curso`
  ADD KEY `id_Curso` (`id_Curso`),
  ADD KEY `id_Cad` (`id_Cad`);

--
-- Indexes for table `tbl_curso`
--
ALTER TABLE `tbl_curso`
  ADD PRIMARY KEY (`id_Curso`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `curiosidades`
--
ALTER TABLE `curiosidades`
  MODIFY `id_Curiosidades` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `favoritos`
--
ALTER TABLE `favoritos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tbl_curso`
--
ALTER TABLE `tbl_curso`
  MODIFY `id_Curso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
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
-- Limitadores para a tabela `favoritos`
--
ALTER TABLE `favoritos`
  ADD CONSTRAINT `favoritos_ibfk_1` FOREIGN KEY (`id_Cad`) REFERENCES `cadastro` (`id`);

--
-- Limitadores para a tabela `tbl_cad_curso`
--
ALTER TABLE `tbl_cad_curso`
  ADD CONSTRAINT `tbl_cad_curso_ibfk_1` FOREIGN KEY (`id_Curso`) REFERENCES `tbl_curso` (`id_Curso`) ON DELETE CASCADE,
  ADD CONSTRAINT `tbl_cad_curso_ibfk_2` FOREIGN KEY (`id_Cad`) REFERENCES `cadastro` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
