-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 18-Mar-2019 às 02:13
-- Versão do servidor: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projeto`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `id` int(10) NOT NULL,
  `nome` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `sobrenome` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `nome_usu` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(130) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `conf_senha` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `cpf` varchar(22) COLLATE utf8_unicode_ci NOT NULL,
  `sexo` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`id`, `nome`, `sobrenome`, `nome_usu`, `email`, `senha`, `conf_senha`, `cpf`, `sexo`) VALUES
(20, 'Vitor', 'Rodrigues', 'Yung buda', 'SoundFoodGang@gmail.com', '3899dcbab79f92af727c2190bbd8abc5', '3899dcbab79f92af727c2190bbd8abc5', '12345678988', 'Masculino'),
(21, 'Joao', 'Vitor', 'cjgamesbr', 'cjgames@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'e10adc3949ba59abbe56e057f20f883e', '9987456123', 'Masculino'),
(28, 'Yung', 'Buda', '7k', 'Rejeite@gmail.com', '8c8780ad655032d6e4653c4de9193932', '8c8780ad655032d6e4653c4de9193932', '77777777778', 'Masculino');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
