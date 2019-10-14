-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 14-Out-2019 às 23:41
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

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`id`, `nome`, `sobrenome`, `email`, `usuario`, `senha`, `fk_Curiosidades`, `imagem`) VALUES
(43, 'Bruno Victor', 'Graciano', 'victorbruno221@gmail.com', 'Bruno', '202cb962ac59075b964b07152d234b70', NULL, 'uploads / 15710764145da4b93e1928e.png'),
(44, 'admin', 'admin', 'admin@gmail.com', 'admin', '202cb962ac59075b964b07152d234b70', NULL, '/musiclly/www/galeria/user.png'),
(45, 'teste', 'teste', 'teste@gmail.com', 'teste', '202cb962ac59075b964b07152d234b70', NULL, 'uploads/15710880905da4e6da4bbc1.png'),
(46, 'testea', 'testea', 'teste@teste.com', 'testea', '698dc19d489c4e4db73e28a713eab07b', NULL, 'uploads/15710865485da4e0d4c0349.png'),
(47, 'josi', 'ferreira', 'josi@gmail.com', 'josi', '202cb962ac59075b964b07152d234b70', NULL, 'uploads/15710867355da4e18f4771c.png');

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

--
-- Extraindo dados da tabela `comentarios`
--

INSERT INTO `comentarios` (`id`, `titulo`, `descricao`, `dataEnviada`, `hora`, `avaliacao`, `sessao`, `id_cad`) VALUES
(1, 'teste', 'teste', '14-10-2019 18:26:53', '0', 3, 2, 45),
(2, 'abc', 'bascas\r\n', '14-10-2019 18:27:23', '0', 3, 2, 45),
(3, 'abc', '123\r\n', '14-10-2019 18:27:39', '0', 3, 1, 45),
(4, 'abc', '456\r\n', '14-10-2019 18:27:54', '0', 3, 1, 43),
(5, 'etste', '123\r\n', '14-10-2019 18:28:05', '0', 3, 2, 43),
(6, 'testedeComentario', 'testedeComentrario\r\n', '14-10-2019 18:38:42', '0', 3, 2, 43),
(7, 'test', 'testeetettete\r\n', '14-10-2019 18:39:12', '0', 3, 2, 43);

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
-- Estrutura da tabela `tbl_cad_curso`
--

CREATE TABLE `tbl_cad_curso` (
  `id_Cad` int(11) DEFAULT NULL,
  `id_Curso` int(11) DEFAULT NULL,
  `nota` int(11) DEFAULT 0,
  `progresso` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tbl_cad_curso`
--

INSERT INTO `tbl_cad_curso` (`id_Cad`, `id_Curso`, `nota`, `progresso`) VALUES
(43, 1, 10, 100),
(43, 2, 30, 100),
(43, 3, 20, 100),
(43, 4, 0, 0),
(43, 5, 0, 0),
(44, 1, 0, 17),
(45, 1, 0, 34);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT de tabela `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `curiosidades`
--
ALTER TABLE `curiosidades`
  MODIFY `id_Curiosidades` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `tbl_curso`
--
ALTER TABLE `tbl_curso`
  MODIFY `id_Curso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
