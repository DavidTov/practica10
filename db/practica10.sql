-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 22, 2018 at 11:09 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `practica10`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumnos`
--

CREATE TABLE `alumnos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8_bin NOT NULL,
  `paterno` varchar(255) COLLATE utf8_bin NOT NULL,
  `materno` varchar(255) COLLATE utf8_bin NOT NULL,
  `carrera` varchar(255) COLLATE utf8_bin NOT NULL,
  `maestro` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `alumnos`
--

INSERT INTO `alumnos` (`id`, `nombre`, `paterno`, `materno`, `carrera`, `maestro`) VALUES
(13, 'David', 'Tovias', 'Alanis', 'INGENIERIA EN TECNOLOGIAS DE LA INFORMACION', 'Said Polanco Martagón');

-- --------------------------------------------------------

--
-- Table structure for table `alumnos_tutorias`
--

CREATE TABLE `alumnos_tutorias` (
  `id` int(11) NOT NULL,
  `id_alumno` int(11) NOT NULL,
  `id_tutoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `carreras`
--

CREATE TABLE `carreras` (
  `id` int(11) NOT NULL,
  `nombreCarrera` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `carreras`
--

INSERT INTO `carreras` (`id`, `nombreCarrera`) VALUES
(3, 'INGENIERIA EN SISTEMAS AUTOMOTRICES'),
(1, 'INGENIERIA EN TECNOLOGIAS DE LA INFORMACION'),
(5, 'INGENIERIA EN TECNOLOGIAS DE MANUFACTURA'),
(2, 'INGENIERIA MECATRONICA');

-- --------------------------------------------------------

--
-- Table structure for table `maestros`
--

CREATE TABLE `maestros` (
  `id` int(11) NOT NULL,
  `nombreMaestro` varchar(255) COLLATE utf8_bin NOT NULL,
  `nombre` varchar(255) COLLATE utf8_bin NOT NULL,
  `paterno` varchar(255) COLLATE utf8_bin NOT NULL,
  `materno` varchar(255) COLLATE utf8_bin NOT NULL,
  `carrera` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `foto` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `maestros`
--

INSERT INTO `maestros` (`id`, `nombreMaestro`, `nombre`, `paterno`, `materno`, `carrera`, `email`, `password`, `foto`) VALUES
(17, 'Said Polanco Martagón', 'Said', 'Polanco', 'Martagón', 'INGENIERIA MECATRONICA', 'said@gmail.com', '123', 'foto'),
(18, 'Karla Esmeralda Vázquez Ortíz', 'Karla Esmeralda', 'Vázquez', 'Ortíz', 'INGENIERIA EN TECNOLOGIAS DE LA INFORMACION', 'karla@gmail.com', 'karla', 'foto');

-- --------------------------------------------------------

--
-- Table structure for table `problematica`
--

CREATE TABLE `problematica` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8_bin NOT NULL,
  `decripcion` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `problematica`
--

INSERT INTO `problematica` (`id`, `nombre`, `decripcion`) VALUES
(1, 'Noviazgo', 'El alumno tiene problemas con su pareja.'),
(2, 'Violencia intrafamiliar', 'El alumno sufre algún tipo de maltrato físico o psicológico por parte de los familiares que viven con él.');

-- --------------------------------------------------------

--
-- Table structure for table `tutoria`
--

CREATE TABLE `tutoria` (
  `id` int(11) NOT NULL,
  `id_maestro` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `hora` varchar(50) COLLATE utf8_bin NOT NULL,
  `tipoTutoria` varchar(255) COLLATE utf8_bin NOT NULL,
  `Problematica` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `tipo` varchar(255) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `email`, `tipo`, `password`) VALUES
(1, 'Mario Humberto Rodriguez Chavez', 'mario@gmail.com', 'administrator', 'mario'),
(4, 'Said Polanco Martagón', 'said@gmail.com', 'teacher', '123'),
(5, 'Karla Esmeralda Vázquez Ortíz', 'karla@gmail.com', 'teacher', 'karla');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carrera` (`carrera`),
  ADD KEY `maestro` (`maestro`);

--
-- Indexes for table `alumnos_tutorias`
--
ALTER TABLE `alumnos_tutorias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_alumno` (`id_alumno`),
  ADD KEY `id_tutoria` (`id_tutoria`);

--
-- Indexes for table `carreras`
--
ALTER TABLE `carreras`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombreCarrera` (`nombreCarrera`);

--
-- Indexes for table `maestros`
--
ALTER TABLE `maestros`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombreMaestro` (`nombreMaestro`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `carrera` (`carrera`);

--
-- Indexes for table `problematica`
--
ALTER TABLE `problematica`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre` (`nombre`);

--
-- Indexes for table `tutoria`
--
ALTER TABLE `tutoria`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_maestro` (`id_maestro`),
  ADD KEY `Problematica` (`Problematica`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nickname` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `alumnos_tutorias`
--
ALTER TABLE `alumnos_tutorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `carreras`
--
ALTER TABLE `carreras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `maestros`
--
ALTER TABLE `maestros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `problematica`
--
ALTER TABLE `problematica`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tutoria`
--
ALTER TABLE `tutoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `alumnos`
--
ALTER TABLE `alumnos`
  ADD CONSTRAINT `alumnos_ibfk_1` FOREIGN KEY (`carrera`) REFERENCES `carreras` (`nombreCarrera`),
  ADD CONSTRAINT `alumnos_ibfk_2` FOREIGN KEY (`maestro`) REFERENCES `maestros` (`nombreMaestro`);

--
-- Constraints for table `alumnos_tutorias`
--
ALTER TABLE `alumnos_tutorias`
  ADD CONSTRAINT `alumnos_tutorias_ibfk_1` FOREIGN KEY (`id_alumno`) REFERENCES `alumnos` (`id`),
  ADD CONSTRAINT `alumnos_tutorias_ibfk_2` FOREIGN KEY (`id_tutoria`) REFERENCES `tutoria` (`id`);

--
-- Constraints for table `maestros`
--
ALTER TABLE `maestros`
  ADD CONSTRAINT `maestros_ibfk_1` FOREIGN KEY (`carrera`) REFERENCES `carreras` (`nombreCarrera`);

--
-- Constraints for table `tutoria`
--
ALTER TABLE `tutoria`
  ADD CONSTRAINT `tutoria_ibfk_2` FOREIGN KEY (`id_maestro`) REFERENCES `maestros` (`id`),
  ADD CONSTRAINT `tutoria_ibfk_3` FOREIGN KEY (`Problematica`) REFERENCES `problematica` (`nombre`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
