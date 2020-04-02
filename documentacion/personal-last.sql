-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 02, 2020 at 05:50 PM
-- Server version: 5.7.26
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `personal`
--

-- --------------------------------------------------------

--
-- Table structure for table `tab_imag`
--

CREATE TABLE `tab_imag` (
  `ident_imag` int(11) NOT NULL,
  `nombr_imag` varchar(100) NOT NULL,
  `descr_imag` varchar(100) NOT NULL,
  `categ_imag` varchar(50) NOT NULL,
  `image_imag` varchar(250) NOT NULL,
  `fecre_imag` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `statu_imag` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tab_imag`
--

INSERT INTO `tab_imag` (`ident_imag`, `nombr_imag`, `descr_imag`, `categ_imag`, `image_imag`, `fecre_imag`, `statu_imag`) VALUES
(1, 'Agustin Pensando', 'Agustin Pensando', 'RETRATOS', 'imagen/portafolio/Agustin.jpg', '2020-04-02 20:01:00', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tab_proy`
--

CREATE TABLE `tab_proy` (
  `ident_proy` int(11) NOT NULL,
  `nombr_proy` varchar(150) DEFAULT NULL,
  `desco_proy` varchar(150) NOT NULL,
  `descr_proy` longtext,
  `image_proy` varchar(250) NOT NULL,
  `areaa_proy` varchar(45) NOT NULL,
  `fecre_proy` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `statu_proy` char(1) NOT NULL,
  `ident_usua` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tab_proy`
--

INSERT INTO `tab_proy` (`ident_proy`, `nombr_proy`, `desco_proy`, `descr_proy`, `image_proy`, `areaa_proy`, `fecre_proy`, `statu_proy`, `ident_usua`) VALUES
(1, 'CRUD CON HTML Y CSS', 'Registra, Edita, Actualiza, Elimina y Lista tus Registros utilizando una Base de Datos', '<p style=\"text-align:center\"><strong>Registra, Edita, Actualiza, Elimina y Lista tus Registros utilizando una Base de Datos</strong></p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><a href=\"http://mega.nz\"><strong>Descargar Archivo (.zip)</strong></a></p>\r\n', 'imagen/publicaciones/default.jpg', 'DESARROLLO WEB', '2020-04-02 19:21:42', '1', 1),
(2, 'CRUD CON PAGINACION UTILIZANDO BOOTSTRAP 4', 'Listado con Paginacion utilizando Bootstrap', '<p style=\"text-align:center\"><strong>CRUD CON PAGINACION UTILIZANDO BOOTSTRAP 4</strong></p>\r\n', 'imagen/publicaciones/code4.jpg', 'DESARROLLO WEB', '2020-04-02 19:54:26', '1', 1),
(3, 'SISTEMA WEB DE COMERCIO ELECTRONICO', 'SISTEMA WEB DE COMERCIO ELECTRONICO', '<p>SISTEMA WEB DE COMERCIO ELECTRONICO</p>\r\n', 'imagen/publicaciones/code2.jpg', 'DESARROLLO WEB', '2020-04-02 19:57:10', '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tab_usua`
--

CREATE TABLE `tab_usua` (
  `ident_usua` int(11) NOT NULL,
  `nombr_usua` varchar(45) DEFAULT NULL,
  `apeli_usua` varchar(45) DEFAULT NULL,
  `usuar_usua` varchar(45) DEFAULT NULL,
  `contr_usua` varchar(45) DEFAULT NULL,
  `statu_usua` char(1) NOT NULL,
  `ident_tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tab_usua`
--

INSERT INTO `tab_usua` (`ident_usua`, `nombr_usua`, `apeli_usua`, `usuar_usua`, `contr_usua`, `statu_usua`, `ident_tipo`) VALUES
(1, 'CARLOS AGUSTIN', 'GUANIPA ALVAREZ', 'AGUSTIN', '0571cc59b67e07e9637a45a7d4cd7d12', '1', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tab_imag`
--
ALTER TABLE `tab_imag`
  ADD PRIMARY KEY (`ident_imag`);

--
-- Indexes for table `tab_proy`
--
ALTER TABLE `tab_proy`
  ADD PRIMARY KEY (`ident_proy`),
  ADD KEY `fk_tab_proy_tab_usua1_idx` (`ident_usua`);

--
-- Indexes for table `tab_usua`
--
ALTER TABLE `tab_usua`
  ADD PRIMARY KEY (`ident_usua`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tab_imag`
--
ALTER TABLE `tab_imag`
  MODIFY `ident_imag` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tab_proy`
--
ALTER TABLE `tab_proy`
  MODIFY `ident_proy` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tab_usua`
--
ALTER TABLE `tab_usua`
  MODIFY `ident_usua` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tab_proy`
--
ALTER TABLE `tab_proy`
  ADD CONSTRAINT `fk_tab_proy_tab_usua1` FOREIGN KEY (`ident_usua`) REFERENCES `tab_usua` (`ident_usua`) ON DELETE NO ACTION ON UPDATE NO ACTION;
