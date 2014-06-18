-- phpMyAdmin SQL Dump
-- version 4.0.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 17, 2014 at 10:54 PM
-- Server version: 5.5.33
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `inter`
--

-- --------------------------------------------------------

--
-- Table structure for table `libros`
--

CREATE TABLE `libros` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(60) NOT NULL,
  `editorial` varchar(25) NOT NULL,
  `autor` varchar(25) NOT NULL,
  `genero` varchar(25) NOT NULL,
  `precio` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `libros`
--

INSERT INTO `libros` (`id`, `nombre`, `editorial`, `autor`, `genero`, `precio`) VALUES
(1, 'Casi el paraiso', 'Alfaguara', 'Luis Spota', 'drama', 120),
(2, 'El Principe', 'MacGraw Hill', 'Maquiavelo', 'manual', 120),
(3, 'El señor de los anillos', 'Princeton', 'JRR Tolkien', 'ficcion', 300);

-- --------------------------------------------------------

--
-- Table structure for table `prestamos`
--

CREATE TABLE `prestamos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_libro` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `fechasal` date NOT NULL,
  `diasprest` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_libro` (`id_libro`,`id_usuario`),
  KEY `id_libro_2` (`id_libro`),
  KEY `id_usuario` (`id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `prestamos`
--

INSERT INTO `prestamos` (`id`, `id_libro`, `id_usuario`, `fechasal`, `diasprest`) VALUES
(1, 2, 3, '2025-02-13', 5);

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(11) NOT NULL,
  `apellido` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`) VALUES
(1, 'Arturo', 'Cadena'),
(2, 'Alejandro', 'Zepeda'),
(3, 'Fernando', 'Godinez'),
(4, 'Jonathan', 'Salinas'),
(5, 'Alejandro', 'Chapa'),
(6, 'Marco', 'Munoz');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `prestamos`
--
ALTER TABLE `prestamos`
  ADD CONSTRAINT `prestamos_ibfk_1` FOREIGN KEY (`id_libro`) REFERENCES `libros` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `prestamos_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;