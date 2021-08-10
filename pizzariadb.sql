-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 10, 2021 at 08:31 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pizzariadb`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorias`
--

CREATE TABLE `categorias` (
  `id_categorias` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categorias`
--

INSERT INTO `categorias` (`id_categorias`, `name`) VALUES
(1, 'Pão de Alho'),
(2, 'Saladas'),
(3, 'Massas'),
(4, 'Lasanhas'),
(5, 'Kebab'),
(6, 'Calzones'),
(7, 'Pizzas');

-- --------------------------------------------------------

--
-- Table structure for table `encomendas`
--

CREATE TABLE `encomendas` (
  `id_encomendas` int(11) NOT NULL,
  `id_utilizador` int(11) DEFAULT NULL,
  `id_encomendas_produtos` int(11) DEFAULT NULL,
  `dataHora` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `morada` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `valorTotal` decimal(4,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `encomendas_produtos`
--

CREATE TABLE `encomendas_produtos` (
  `id_encomendas_produtos` int(11) NOT NULL,
  `id_produtos` int(11) DEFAULT NULL,
  `quantidade` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `produtos`
--

CREATE TABLE `produtos` (
  `id_produtos` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_categorias` int(11) DEFAULT NULL,
  `tamanho` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `preco` decimal(4,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `produtos`
--

INSERT INTO `produtos` (`id_produtos`, `name`, `description`, `id_categorias`, `tamanho`, `preco`) VALUES
(1, 'PÃ£o de Alho Simples', '2 unidades de pÃ£o de alho simples', 1, 'nÃ£o aplicÃ¡vel', '1.00'),
(2, 'PÃ£o de Alho Com Queijo Mozzarella', '2 unidades', 1, 'nÃ£o aplicÃ¡vel', '1.40'),
(3, 'PÃ£o de Alho com Queijo Mozzarella e Molho de Tomate', '2 unidades', 1, 'nÃ£o aplicÃ¡vel', '1.45');

-- --------------------------------------------------------

--
-- Table structure for table `tipoUtilizador`
--

CREATE TABLE `tipoUtilizador` (
  `id_tipo_utilizador` int(11) NOT NULL,
  `descricao` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tipoUtilizador`
--

INSERT INTO `tipoUtilizador` (`id_tipo_utilizador`, `descricao`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `utilizador`
--

CREATE TABLE `utilizador` (
  `id_utilizador` int(11) NOT NULL,
  `id_tipo_utilizador` int(11) NOT NULL DEFAULT 2,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `firstname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contact` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `utilizador`
--

INSERT INTO `utilizador` (`id_utilizador`, `id_tipo_utilizador`, `password`, `firstname`, `lastname`, `email`, `contact`) VALUES
(1, 1, 'admin', 'Tixa', 'Cesae', 'phpteste@sapo.pt', 912345678),
(2, 2, '123', 'TomÃ¡s', 'Ferreira', 'ferreira@sapo.pt', 123456);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categorias`);

--
-- Indexes for table `encomendas`
--
ALTER TABLE `encomendas`
  ADD PRIMARY KEY (`id_encomendas`),
  ADD KEY `id_utilizador` (`id_utilizador`),
  ADD KEY `id_encomendas_produtos` (`id_encomendas_produtos`);

--
-- Indexes for table `encomendas_produtos`
--
ALTER TABLE `encomendas_produtos`
  ADD PRIMARY KEY (`id_encomendas_produtos`),
  ADD KEY `id_produtos` (`id_produtos`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id_produtos`),
  ADD KEY `id_categorias` (`id_categorias`);

--
-- Indexes for table `tipoUtilizador`
--
ALTER TABLE `tipoUtilizador`
  ADD PRIMARY KEY (`id_tipo_utilizador`);

--
-- Indexes for table `utilizador`
--
ALTER TABLE `utilizador`
  ADD PRIMARY KEY (`id_utilizador`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `id_tipo_utilizador` (`id_tipo_utilizador`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categorias` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `encomendas`
--
ALTER TABLE `encomendas`
  MODIFY `id_encomendas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `encomendas_produtos`
--
ALTER TABLE `encomendas_produtos`
  MODIFY `id_encomendas_produtos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id_produtos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `utilizador`
--
ALTER TABLE `utilizador`
  MODIFY `id_utilizador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `encomendas`
--
ALTER TABLE `encomendas`
  ADD CONSTRAINT `encomendas_ibfk_1` FOREIGN KEY (`id_utilizador`) REFERENCES `utilizador` (`id_utilizador`),
  ADD CONSTRAINT `encomendas_ibfk_2` FOREIGN KEY (`id_encomendas_produtos`) REFERENCES `encomendas_produtos` (`id_encomendas_produtos`);

--
-- Constraints for table `encomendas_produtos`
--
ALTER TABLE `encomendas_produtos`
  ADD CONSTRAINT `encomendas_produtos_ibfk_1` FOREIGN KEY (`id_produtos`) REFERENCES `produtos` (`id_produtos`);

--
-- Constraints for table `produtos`
--
ALTER TABLE `produtos`
  ADD CONSTRAINT `produtos_ibfk_1` FOREIGN KEY (`id_categorias`) REFERENCES `categorias` (`id_categorias`);

--
-- Constraints for table `utilizador`
--
ALTER TABLE `utilizador`
  ADD CONSTRAINT `utilizador_ibfk_1` FOREIGN KEY (`id_tipo_utilizador`) REFERENCES `tipoUtilizador` (`id_tipo_utilizador`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
