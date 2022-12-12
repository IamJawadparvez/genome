-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2022 at 08:55 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `genome`
--

-- --------------------------------------------------------

--
-- Table structure for table `genome_data`
--

CREATE TABLE `genome_data` (
  `id` int(11) NOT NULL,
  `locus_type` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `hgnc_id` varchar(255) DEFAULT NULL,
  `alias_symbol` varchar(255) DEFAULT NULL,
  `symbol` varchar(255) DEFAULT NULL,
  `omim_id` varchar(255) DEFAULT NULL,
  `entrez_id` varchar(255) DEFAULT NULL,
  `locus_group` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `_version_` varchar(255) DEFAULT NULL,
  `location_sortable` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `uuid` varchar(255) DEFAULT NULL,
  `pubmed_id` varchar(255) DEFAULT NULL,
  `date_modified` varchar(255) DEFAULT NULL,
  `date_approved_reserved` varchar(255) DEFAULT NULL,
  `date_name_changed` varchar(255) DEFAULT NULL,
  `refseq_accession` varchar(255) DEFAULT NULL,
  `prev_symbol` varchar(255) DEFAULT NULL,
  `mgd_id` varchar(255) DEFAULT NULL,
  `ccds_id` varchar(255) DEFAULT NULL,
  `date_symbol_changed` varchar(255) DEFAULT NULL,
  `prev_name` varchar(255) DEFAULT NULL,
  `ensembl_gene_id` varchar(255) DEFAULT NULL,
  `vega_id` varchar(255) DEFAULT NULL,
  `agr` varchar(255) DEFAULT NULL,
  `ucsc_id` varchar(255) DEFAULT NULL,
  `curator_notes` varchar(255) DEFAULT NULL,
  `uniprot_ids` varchar(255) DEFAULT NULL,
  `rgd_id` varchar(255) DEFAULT NULL,
  `gene_group` varchar(255) DEFAULT NULL,
  `gene_group_id` varchar(255) DEFAULT NULL,
  `iuphar` varchar(255) DEFAULT NULL,
  `symbol_report_tag` varchar(255) DEFAULT NULL,
  `alias_name` varchar(255) DEFAULT NULL,
  `mane_select` varchar(255) DEFAULT NULL,
  `ena` varchar(255) DEFAULT NULL,
  `lsdb` varchar(255) DEFAULT NULL,
  `enzyme_id` varchar(255) DEFAULT NULL,
  `imgt` varchar(255) DEFAULT NULL,
  `orphanet` varchar(255) DEFAULT NULL,
  `gencc` varchar(255) DEFAULT NULL,
  `lncipedia` varchar(255) DEFAULT NULL,
  `lncrnadb` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `genome_data`
--
ALTER TABLE `genome_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `genome_data`
--
ALTER TABLE `genome_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
