-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Tempo de geração: 24/05/2016 às 12:06
-- Versão do servidor: 10.0.15-MariaDB
-- Versão do PHP: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de dados: `anamnese`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cadastro`
--

CREATE TABLE IF NOT EXISTS `cadastro` (
  `id` int(11) NOT NULL,
  `nome` varchar(60) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `datanascimento` date NOT NULL,
  `filiacao` varchar(150) NOT NULL,
  `identidade` varchar(15) NOT NULL,
  `orgao` varchar(8) NOT NULL,
  `naturalidade` varchar(60) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `nacionalidade` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `escolaridade` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `fone` varchar(20) NOT NULL,
  `email` varchar(60) NOT NULL,
  `endereco` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `bairro` varchar(70) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `cidade` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `estadocivil` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `filhos` varchar(3) NOT NULL,
  `mora_com` varchar(15) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `ocupacao` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `empresa` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `gostadoquefaz` varchar(3) NOT NULL,
  `estabilidade` varchar(3) NOT NULL,
  `atividades` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `antecedentes` varchar(3) NOT NULL,
  `relate` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `doencagrave` varchar(3) NOT NULL,
  `qualdoenca` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `cirurgia` varchar(3) NOT NULL,
  `qualcirurgia` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `problemasaude` varchar(3) NOT NULL,
  `qualproblemasaude` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `tratamento` varchar(3) NOT NULL,
  `qualtratamento` varchar(60) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `remedio` varchar(3) NOT NULL,
  `qualremedio` varchar(60) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `bebidaalcoolica` varchar(3) NOT NULL,
  `frequenciabebida` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `drogailicita` varchar(3) NOT NULL,
  `qualdroga` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `drogapreju` varchar(3) NOT NULL,
  `qualpreju` varchar(150) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `controleuso` varchar(3) NOT NULL,
  `comentecontroleuso` varchar(150) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `maniaperseguido` varchar(3) NOT NULL,
  `comentemania` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `dificuldadeordenar` varchar(3) NOT NULL,
  `comentedificuldade` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `pensamentoacelerado` varchar(3) NOT NULL,
  `comentepensamento` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `internado` varchar(3) NOT NULL,
  `internacaomotivo` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `religiao` varchar(3) NOT NULL,
  `qualreligiao` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `praticareligiosa` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `experienciaespiritual` varchar(3) NOT NULL,
  `comofoi` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `espiritualajuda` varchar(3) NOT NULL,
  `emque` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `comosoube` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `daimeutil` varchar(3) NOT NULL,
  `porque` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `consagrou` varchar(3) NOT NULL,
  `ondecomquem` varchar(150) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `relateexperiencia` varchar(150) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=37;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTI