-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 17, 2020 at 12:49 PM
-- Server version: 5.7.26
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `personal`
--

-- --------------------------------------------------------

--
-- Table structure for table `tab_proy`
--

CREATE TABLE `tab_proy` (
  `ident_proy` int(11) NOT NULL,
  `nombr_proy` varchar(150) DEFAULT NULL,
  `desco_proy` varchar(150) NOT NULL,
  `descr_proy` longtext,
  `areaa_proy` varchar(45) NOT NULL,
  `fecre_proy` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `statu_proy` char(1) NOT NULL,
  `ident_usua` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tab_proy`
--
ALTER TABLE `tab_proy`
  ADD PRIMARY KEY (`ident_proy`),
  ADD KEY `fk_tab_proy_tab_usua1_idx` (`ident_usua`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tab_proy`
--
ALTER TABLE `tab_proy`
  MODIFY `ident_proy` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tab_proy`
--
ALTER TABLE `tab_proy`
  ADD CONSTRAINT `fk_tab_proy_tab_usua1` FOREIGN KEY (`ident_usua`) REFERENCES `tab_usua` (`ident_usua`) ON DELETE NO ACTION ON UPDATE NO ACTION;
