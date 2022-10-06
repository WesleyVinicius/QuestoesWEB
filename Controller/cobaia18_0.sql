-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 30-Set-2017 às 19:05
-- Versão do servidor: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cobaia18.0`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cargo`
--

DROP TABLE IF EXISTS `cargo`;
CREATE TABLE IF NOT EXISTS `cargo` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cargo`
--

INSERT INTO `cargo` (`id`, `nome`) VALUES
(3, 'Auxiliar Administrativo'),
(20, 'Contador'),
(28, 'Advogado');

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

DROP TABLE IF EXISTS `categoria`;
CREATE TABLE IF NOT EXISTS `categoria` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`id`, `nome`) VALUES
(1, 'Vestibular'),
(2, 'Concurso'),
(3, 'OAB');

-- --------------------------------------------------------

--
-- Estrutura da tabela `curso`
--

DROP TABLE IF EXISTS `curso`;
CREATE TABLE IF NOT EXISTS `curso` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `curso`
--

INSERT INTO `curso` (`id`, `nome`) VALUES
(6, 'AdministraÃ§Ã£o'),
(7, 'Geografia'),
(8, 'Tecnologia em AnÃ¡lise e Desenvolvimento de Sistemas');

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplina`
--

DROP TABLE IF EXISTS `disciplina`;
CREATE TABLE IF NOT EXISTS `disciplina` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `disciplina`
--

INSERT INTO `disciplina` (`id`, `nome`) VALUES
(6, 'Conhecimento Gerais'),
(7, 'LÃ­ngua Portuguesa'),
(8, 'Geografia');

-- --------------------------------------------------------

--
-- Estrutura da tabela `instituicao`
--

DROP TABLE IF EXISTS `instituicao`;
CREATE TABLE IF NOT EXISTS `instituicao` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `instituicao`
--

INSERT INTO `instituicao` (`id`, `nome`) VALUES
(4, 'IFPR Campus Irati'),
(7, 'Unicentro'),
(8, 'Prefeitura de Irati');

-- --------------------------------------------------------

--
-- Estrutura da tabela `organizadora`
--

DROP TABLE IF EXISTS `organizadora`;
CREATE TABLE IF NOT EXISTS `organizadora` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `organizadora`
--

INSERT INTO `organizadora` (`id`, `nome`) VALUES
(2, 'Instituto Saber'),
(3, 'FGV'),
(4, 'Fauel');

-- --------------------------------------------------------

--
-- Estrutura da tabela `prova`
--

DROP TABLE IF EXISTS `prova`;
CREATE TABLE IF NOT EXISTS `prova` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `nota_corte` bigint(20) DEFAULT NULL,
  `completa` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `prova`
--

INSERT INTO `prova` (`id`, `nome`, `nota_corte`, `completa`) VALUES
(5, 'Prova da OAB - 2017', NULL, 0),
(6, 'Concurso Prefeitura de Irati - Contador', NULL, 0),
(7, 'Processor Avaliativo - IFPR Campus Irati - 2014', 3, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `prova_resolvida`
--

DROP TABLE IF EXISTS `prova_resolvida`;
CREATE TABLE IF NOT EXISTS `prova_resolvida` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_usuario` bigint(20) UNSIGNED NOT NULL,
  `id_prova` bigint(20) UNSIGNED NOT NULL,
  `questoes_certas` int(11) DEFAULT '0',
  `questoes_erradas` int(11) DEFAULT '0',
  `pontuacao` double NOT NULL DEFAULT '0',
  `resultado` varchar(9) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `id_usuario` (`id_usuario`),
  KEY `id_prova` (`id_prova`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `prova_resolvida`
--

INSERT INTO `prova_resolvida` (`id`, `id_usuario`, `id_prova`, `questoes_certas`, `questoes_erradas`, `pontuacao`, `resultado`) VALUES
(31, 9, 7, 1, 4, 1, 'reprovado');

-- --------------------------------------------------------

--
-- Estrutura da tabela `questao`
--

DROP TABLE IF EXISTS `questao`;
CREATE TABLE IF NOT EXISTS `questao` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `descricao` varchar(2000) NOT NULL,
  `texto_associado` varchar(5000) DEFAULT NULL,
  `imagem_associada` varchar(180) DEFAULT NULL,
  `alternativa_a` varchar(300) NOT NULL,
  `alternativa_b` varchar(300) NOT NULL,
  `alternativa_c` varchar(300) NOT NULL,
  `alternativa_d` varchar(300) NOT NULL,
  `alternativa_e` varchar(300) DEFAULT NULL,
  `alternativa_correta` char(1) NOT NULL,
  `peso` int(11) NOT NULL DEFAULT '1',
  `id_categoria` bigint(20) UNSIGNED NOT NULL,
  `id_instituicao` bigint(20) UNSIGNED NOT NULL,
  `id_organizadora` bigint(20) UNSIGNED NOT NULL,
  `id_disciplina` bigint(20) UNSIGNED NOT NULL,
  `id_cargo` bigint(20) UNSIGNED NOT NULL,
  `id_curso` bigint(20) UNSIGNED NOT NULL,
  `id_prova` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `id_categoria` (`id_categoria`),
  KEY `id_instituicao` (`id_instituicao`),
  KEY `id_organizadora` (`id_organizadora`),
  KEY `id_disciplina` (`id_disciplina`),
  KEY `id_cargo` (`id_cargo`),
  KEY `id_curso` (`id_curso`),
  KEY `id_prova` (`id_prova`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `questao`
--

INSERT INTO `questao` (`id`, `descricao`, `texto_associado`, `imagem_associada`, `alternativa_a`, `alternativa_b`, `alternativa_c`, `alternativa_d`, `alternativa_e`, `alternativa_correta`, `peso`, `id_categoria`, `id_instituicao`, `id_organizadora`, `id_disciplina`, `id_cargo`, `id_curso`, `id_prova`) VALUES
(14, '01 - Assinale a alternativa que preenche corretamente as lacunas do texto: ', '1Âº Estatuto dos FuncionÃ¡rios, artigo 249: â€œO dia 28 de outubro serÃ¡ consagrado ao Servidor PÃºblico (com maiÃºsculas).  2Âº EntÃ£o Ã© feriado, raciona o escriturÃ¡rio, que, justamente, tem um â€œprogramaâ€ na pauta para essas emergÃªncias. NÃ£o, responde-lhe o governo, que tem o programa de trabalhar; Ã© consagrado, mas nÃ£o Ã© feriado.  3Âº Ã‰, nÃ£o Ã©, e o dia se passou na dureza, sem ponto facultativo. SaberÃ£o os groelandeses o que seja ponto facultativo? (Os brasileiros sabem.) Ã‰ descanso obrigatÃ³rio, no duro. JoÃ£o BrandÃ£o, o de alma virginal, nÃ£o entendia assim, e lÃ¡ um dia em que o Departamento MeteorolÃ³gico anunciava: â€œcÃ©u azul, praia, ponto facultativoâ€, nÃ£o lhe apetecendo a casa nem as atividades lÃºdicas, deliberou usar de sua â€œfaculdadeâ€ _____ assinar o ponto no Instituto Nacional da Goiaba, que, como Ã© do domÃ­nio pÃºblico, estuda as causas da inexistÃªncia dessa matÃ©ria-prima na composiÃ§Ã£o das goiabadas.  4Âº Hoje deve haver menos gente por lÃ¡, conjecturou; Ã³timo, porque assim trabalho Ã  vontade. Nossas repartiÃ§Ãµes atingiram tal grau de dinamismo e fragor, que chega a ser desejÃ¡vel o nÃ£o comparecimento de 90 por cento dos funcionÃ¡rios, para que os restante possam, _____ calma, produzir um bocadinho. E o inocente JoÃ£o via no ponto facultativo essa virtude de afastar os menos diligentes, ou os mais futebolÃ­sticos, que cediam lugar _____ turma dos â€œcaxiasâ€.  5Âº Encontrou cerradas as grandes portas de bronze, ouro e pÃ³rtico, e nenhum sinal de vida nos arredores. Nenhum â€“ a nÃ£o ser aquele gato que se lambia Ã  sombra de um tinhorÃ£o. Era, pela naturalidade da pose, dono do jardim que orna a fachada do Instituto, mas â€“ sentia-se pela Ã¡gata dos olhos â€“ nÃ£o possuÃ­a as chaves do prÃ©dio. ', 'Estilo/imagens/1.png', 'a) em â€“ na â€“ a.    ', 'b) de â€“ na â€“ Ã .', 'c) para â€“ em â€“ na', 'd) para â€“ de â€“ para a', 'e) de â€“ em â€“ na. ', 'a', 1, 1, 4, 4, 7, 28, 8, 7),
(15, '02 - Analise as afirmativas referentes ao texto: I - Segundo o texto a verdadeira lei absoluta Ã© o costume, o hÃ¡bito. II - Segundo a opiniÃ£o do autor, o rendimento do serviÃ§o nas repartiÃ§Ãµes pÃºblicas Ã© inversamente proporcional ao nÃºmero de funcionÃ¡rios. III - O autor ao criticar o serviÃ§o pÃºblico utiliza uma linguagem por vezes sarcÃ¡stica, irÃ´nica, em tom de humor. Quais afirmativas estÃ£o corretas?', '1Âº Estatuto dos FuncionÃ¡rios, artigo 249: â€œO dia 28 de outubro serÃ¡ consagrado ao Servidor PÃºblico (com maiÃºsculas).  2Âº EntÃ£o Ã© feriado, raciona o escriturÃ¡rio, que, justamente, tem um â€œprogramaâ€ na pauta para essas emergÃªncias. NÃ£o, responde-lhe o governo, que tem o programa de trabalhar; Ã© consagrado, mas nÃ£o Ã© feriado.  3Âº Ã‰, nÃ£o Ã©, e o dia se passou na dureza, sem ponto facultativo. SaberÃ£o os groelandeses o que seja ponto facultativo? (Os brasileiros sabem.) Ã‰ descanso obrigatÃ³rio, no duro. JoÃ£o BrandÃ£o, o de alma virginal, nÃ£o entendia assim, e lÃ¡ um dia em que o Departamento MeteorolÃ³gico anunciava: â€œcÃ©u azul, praia, ponto facultativoâ€, nÃ£o lhe apetecendo a casa nem as atividades lÃºdicas, deliberou usar de sua â€œfaculdadeâ€ _____ assinar o ponto no Instituto Nacional da Goiaba, que, como Ã© do domÃ­nio pÃºblico, estuda as causas da inexistÃªncia dessa matÃ©ria-prima na composiÃ§Ã£o das goiabadas.  4Âº Hoje deve haver menos gente por lÃ¡, conjecturou; Ã³timo, porque assim trabalho Ã  vontade. Nossas repartiÃ§Ãµes atingiram tal grau de dinamismo e fragor, que chega a ser desejÃ¡vel o nÃ£o comparecimento de 90 por cento dos funcionÃ¡rios, para que os restante possam, _____ calma, produzir um bocadinho. E o inocente JoÃ£o via no ponto facultativo essa virtude de afastar os menos diligentes, ou os mais futebolÃ­sticos, que cediam lugar _____ turma dos â€œcaxiasâ€.  5Âº Encontrou cerradas as grandes portas de bronze, ouro e pÃ³rtico, e nenhum sinal de vida nos arredores. Nenhum â€“ a nÃ£o ser aquele gato que se lambia Ã  sombra de um tinhorÃ£o. Era, pela naturalidade da pose, dono do jardim que orna a fachada do Instituto, mas â€“ sentia-se pela Ã¡gata dos olhos â€“ nÃ£o possuÃ­a as chaves do prÃ©dio. ', 'Estilo/imagens/2.png', 'a) em â€“ na â€“ a.', 'b) de â€“ na â€“ Ã .', 'c) para â€“ em â€“ na.', 'd) para â€“ de â€“ para a', 'e) de â€“ em â€“ na.', 'b', 1, 1, 4, 4, 7, 3, 8, 7),
(16, '03 - Assinale a alternativa que preenche corretamente as lacunas do texto:', '', 'Estilo/imagens/3.png', 'a) em â€“ na â€“ a.', 'b) de â€“ na â€“ Ã .', 'c) para â€“ em â€“ na.', 'd) para â€“ de â€“ para a', 'e) de â€“ em â€“ na.', 'c', 1, 1, 4, 4, 7, 3, 8, 7),
(17, '04 - Assinale a alternativa que preenche corretamente as lacunas do texto:', '', 'Estilo/imagens/4.png', 'a) em â€“ na â€“ a.', 'b) de â€“ na â€“ Ã .', 'c) para â€“ em â€“ na.', 'd) para â€“ de â€“ para a', 'e) de â€“ em â€“ na.', 'd', 1, 1, 4, 4, 7, 3, 8, 7),
(18, '05 - Assinale a alternativa que preenche corretamente as lacunas do texto:', '', '', 'a) em â€“ na â€“ a.', 'b) de â€“ na â€“ Ã .', 'c) para â€“ em â€“ na.', 'd) para â€“ de â€“ para a', 'e) de â€“ em â€“ na.', 'e', 1, 1, 4, 4, 7, 3, 8, 7),
(19, 'aaaa', 'fsdfdsfsdf', '', 'alternativa a', 'alternativa b', 'alternativa c', 'alternativa d', '', 'c', 3, 3, 8, 3, 6, 28, 7, 5),
(20, 'Descricao', '', '', 'alternativa a', 'alternativa b', 'alternativa c', 'alternativa d', 'alternativa e', 'e', 1, 2, 8, 2, 6, 3, 6, 6),
(21, 'Descricao 2', '', '', 'a', 'b', 'c', 'd', 'e', 'a', 1, 2, 4, 3, 6, 28, 8, 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `questao_resolvida`
--

DROP TABLE IF EXISTS `questao_resolvida`;
CREATE TABLE IF NOT EXISTS `questao_resolvida` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_usuario` bigint(20) UNSIGNED NOT NULL,
  `id_questao_certa` bigint(20) UNSIGNED DEFAULT NULL,
  `id_questao_errada` bigint(20) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `id_usuario` (`id_usuario`),
  KEY `id_questao_certa` (`id_questao_certa`),
  KEY `id_questao_errada` (`id_questao_errada`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `questao_resolvida`
--

INSERT INTO `questao_resolvida` (`id`, `id_usuario`, `id_questao_certa`, `id_questao_errada`) VALUES
(1, 9, NULL, 14),
(6, 10, NULL, 17),
(8, 10, NULL, 19),
(42, 10, NULL, 18),
(45, 10, 16, NULL),
(48, 10, 14, NULL),
(49, 10, NULL, 15);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(256) NOT NULL,
  `tipo` varchar(13) NOT NULL DEFAULT 'Comum',
  `questoes_certas` int(11) DEFAULT '0',
  `questoes_erradas` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `email`, `senha`, `tipo`, `questoes_certas`, `questoes_erradas`) VALUES
(9, 'teste1', 'teste1@gmail.com', '202cb962ac59075b964b07152d234b70', 'Administrador', 52, 49),
(10, 'teste2', 'teste2@gmail.com', '202cb962ac59075b964b07152d234b70', 'Comum', 32, 55),
(19, 'teste3', 'teste3@gmail.com', '202cb962ac59075b964b07152d234b70', 'Comum', 0, 0);

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `prova_resolvida`
--
ALTER TABLE `prova_resolvida`
  ADD CONSTRAINT `prova_resolvida_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `prova_resolvida_ibfk_2` FOREIGN KEY (`id_prova`) REFERENCES `prova` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `questao`
--
ALTER TABLE `questao`
  ADD CONSTRAINT `questao_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `questao_ibfk_2` FOREIGN KEY (`id_instituicao`) REFERENCES `instituicao` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `questao_ibfk_3` FOREIGN KEY (`id_organizadora`) REFERENCES `organizadora` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `questao_ibfk_4` FOREIGN KEY (`id_disciplina`) REFERENCES `disciplina` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `questao_ibfk_5` FOREIGN KEY (`id_cargo`) REFERENCES `cargo` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `questao_ibfk_6` FOREIGN KEY (`id_curso`) REFERENCES `curso` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `questao_ibfk_7` FOREIGN KEY (`id_prova`) REFERENCES `prova` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
