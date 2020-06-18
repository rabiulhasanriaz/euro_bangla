-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 18, 2020 at 11:10 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `euro_bangla_expo`
--

-- --------------------------------------------------------

--
-- Table structure for table `area_category`
--

CREATE TABLE `area_category` (
  `id` int(10) NOT NULL,
  `area_cat_name` varchar(100) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `area_category`
--

INSERT INTO `area_category` (`id`, `area_cat_name`, `created_at`, `updated_at`) VALUES
(1, 'General Medicine', '2020-02-02', '2020-02-02'),
(2, 'Internal Medicine Specialties', '2020-02-02', '2020-02-02'),
(3, 'Diagnostic Specialties', '2020-02-02', '2020-02-02'),
(4, 'Interdisciplinary Medicine', '2020-02-02', '2020-02-02'),
(5, 'Public Health', '2020-02-02', '2020-02-02'),
(6, 'Surgery', '2020-02-02', '2020-02-02'),
(7, 'Agricultural Sciences', '2020-02-02', '2020-02-02'),
(8, 'Biochemistry', '2020-02-02', '2020-02-02'),
(9, 'Cell Biology', '2020-02-02', '2020-02-02'),
(10, 'Environment & Ecology', '2020-02-02', '2020-02-02'),
(11, 'Evolutionary & Developmental Biology', '2020-02-02', '2020-02-02'),
(12, 'Interdisciplinary Biology', '2020-02-02', '2020-02-02'),
(13, 'Microbiology', '2020-02-02', '2020-02-02'),
(14, 'Molecular Biology & Genetics', '2020-02-02', '2020-02-02'),
(15, 'Neuroscience', '2020-02-02', '2020-02-02'),
(16, 'Pharmacology & Toxicology', '2020-02-02', '2020-02-02'),
(17, 'Zoology & Plant Biology', '2020-02-02', '2020-02-02'),
(18, 'Veterinary Medicine', '2020-02-02', '2020-02-02'),
(19, 'Communication', '2020-02-02', '2020-02-02'),
(20, 'Education', '2020-02-02', '2020-02-02'),
(21, 'Arts & Humanities', '2020-02-02', '2020-02-02'),
(22, 'Public Policy', '2020-02-02', '2020-02-02'),
(23, 'Economics', '2020-02-02', '2020-02-02'),
(24, 'Political Science', '2020-02-02', '2020-02-02'),
(25, 'Information Management', '2020-02-02', '2020-02-02'),
(26, 'Social & Behavioral Sciences', '2020-02-02', '2020-02-02'),
(27, 'Business', '2020-02-02', '2020-02-02'),
(28, 'Law', '2020-02-02', '2020-02-02'),
(29, 'Chemistry', '2020-02-02', '2020-02-02'),
(30, 'Physics', '2020-02-02', '2020-02-02'),
(31, 'Space Science', '2020-02-02', '2020-02-02'),
(32, 'Earth Science', '2020-02-02', '2020-02-02'),
(33, 'Paleontology', '2020-02-02', '2020-02-02'),
(34, 'Engineering', '2020-02-02', '2020-02-02'),
(35, 'Materials Science', '2020-02-02', '2020-02-02'),
(36, 'Computer Science', '2020-02-02', '2020-02-02'),
(37, 'Mathematics', '2020-02-02', '2020-02-02'),
(38, 'Statistics', '2020-02-02', '2020-02-02');

-- --------------------------------------------------------

--
-- Table structure for table `area_of_studies`
--

CREATE TABLE `area_of_studies` (
  `id` int(10) NOT NULL,
  `area_cat` varchar(10) DEFAULT NULL,
  `area_name` varchar(100) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `area_of_studies`
--

INSERT INTO `area_of_studies` (`id`, `area_cat`, `area_name`, `created_at`, `updated_at`) VALUES
(1, '1', 'Allergy & Immune Disorders', '2020-02-02', '2020-02-02'),
(2, '1', 'Dermatology', '2020-02-02', '2020-02-02'),
(3, '1', 'Medical Genetics', '2020-02-02', '2020-02-02'),
(4, '1', 'Ophthalmology', '2020-02-02', '2020-02-02'),
(5, '1', 'Physiology', '2020-02-02', '2020-02-02'),
(6, '1', 'Sports Medicine and Kinesiology', '2020-02-02', '2020-02-02'),
(7, '1', 'Critical Care & Emergency Medicine', '2020-02-02', '2020-02-02'),
(8, '1', 'General Practice', '2020-02-02', '2020-02-02'),
(9, '1', 'Nutrition & Dietetics', '2020-02-02', '2020-02-02'),
(10, '1', 'Pediatrics', '2020-02-02', '2020-02-02'),
(11, '1', 'Psychiatry', '2020-02-02', '2020-02-02'),
(12, '1', 'Dentistry', '2020-02-02', '2020-02-02'),
(13, '1', 'Hospital Medicine', '2020-02-02', '2020-02-02'),
(14, '1', 'Obstetrics & Gynecology', '2020-02-02', '2020-02-02'),
(15, '1', 'Physical Medicine & Rehab', '2020-02-02', '2020-02-02'),
(16, '1', 'Psychology', '2020-02-02', '2020-02-02'),
(17, '2', 'Anesthesiology & Pain Medicine', '2020-02-02', '2020-02-02'),
(18, '2', 'Gastroenterology & Hepatology', '2020-02-02', '2020-02-02'),
(19, '2', 'Infectious Diseases', '2020-02-02', '2020-02-02'),
(20, '2', 'Nuclear Medicine & Medical Imaging', '2020-02-02', '2020-02-02'),
(21, '2', 'Otorhinolaryngology', '2020-02-02', '2020-02-02'),
(22, '2', 'Sexual & Reproductive Medicine', '2020-02-02', '2020-02-02'),
(23, '2', 'Cardiac & Cardiovascular Systems', '2020-02-02', '2020-02-02'),
(24, '2', 'Geriatrics & Gerontology', '2020-02-02', '2020-02-02'),
(25, '2', 'Maternal & Fetal Medicine', '2020-02-02', '2020-02-02'),
(26, '2', 'Oncology', '2020-02-02', '2020-02-02'),
(27, '2', 'Pulmonology', '2020-02-02', '2020-02-02'),
(28, '2', 'Urology & Nephrology', '2020-02-02', '2020-02-02'),
(29, '2', 'Endocrinology & Metabolism', '2020-02-02', '2020-02-02'),
(30, '2', 'Hematology', '2020-02-02', '2020-02-02'),
(31, '2', 'Neurology', '2020-02-02', '2020-02-02'),
(32, '2', 'Orthopedics', '2020-02-02', '2020-02-02'),
(33, '2', 'Rheumatology', '2020-02-02', '2020-02-02'),
(34, '2', 'Vascular Medicine', '2020-02-02', '2020-02-02'),
(35, '3', 'Audiology & Speech-Language Pathology', '2020-02-02', '2020-02-02'),
(36, '3', 'Pathology', '2020-02-02', '2020-02-02'),
(37, '3', 'Laboratory Diagnostics', '2020-02-02', '2020-02-02'),
(38, '3', 'Physiology', '2020-02-02', '2020-02-02'),
(39, '3', 'Nuclear Medicine & Medical Imaging', '2020-02-02', '2020-02-02'),
(40, '4', 'Anesthesiology & Pain Medicine', '2020-02-02', '2020-02-02'),
(41, '4', 'Forensic Medicine', '2020-02-02', '2020-02-02'),
(42, '4', 'Medical Informatics', '2020-02-02', '2020-02-02'),
(43, '4', 'Nursing', '2020-02-02', '2020-02-02'),
(44, '4', 'Translational Medicine', '2020-02-02', '2020-02-02'),
(45, '4', 'Biomedical Engineering', '2020-02-02', '2020-02-02'),
(46, '4', 'Integrative & Complementary Medicine', '2020-02-02', '2020-02-02'),
(47, '4', 'Medical Physics', '2020-02-02', '2020-02-02'),
(48, '4', 'Nutrition & Dietetics', '2020-02-02', '2020-02-02'),
(49, '4', 'Clinical Pharmacology', '2020-02-02', '2020-02-02'),
(50, '4', 'Medical Ethics', '2020-02-02', '2020-02-02'),
(51, '4', 'Nuclear Medicine & Medical Imaging', '2020-02-02', '2020-02-02'),
(52, '4', 'Personalized Medicine', '2020-02-02', '2020-02-02'),
(53, '5', 'Epidemiology', '2020-02-02', '2020-02-02'),
(54, '5', 'Health Economics & Outcomes Research', '2020-02-02', '2020-02-02'),
(55, '5', 'Tropical Medicine', '2020-02-02', '2020-02-02'),
(56, '5', 'Preventive Medicine', '2020-02-02', '2020-02-02'),
(57, '5', 'Occupational Medicine', '2020-02-02', '2020-02-02'),
(58, '5', 'Statistical Epidemiology', '2020-02-02', '2020-02-02'),
(59, '6', 'Cardiothoracic Surgery', '2020-02-02', '2020-02-02'),
(60, '6', 'Head & Neck Surgery', '2020-02-02', '2020-02-02'),
(61, '6', 'Orthopedic Surgery', '2020-02-02', '2020-02-02'),
(62, '6', 'Gastrointestinal Surgery', '2020-02-02', '2020-02-02'),
(63, '6', 'Hepatobiliary & Transplant Surgery', '2020-02-02', '2020-02-02'),
(64, '6', 'Plastic & Reconstructive Surgery', '2020-02-02', '2020-02-02'),
(65, '6', 'General Surgery', '2020-02-02', '2020-02-02'),
(66, '6', 'Neurosurgery', '2020-02-02', '2020-02-02'),
(67, '6', 'Surgical Obstetrics & Gynecology', '2020-02-02', '2020-02-02'),
(68, '7', 'Agricultural Economics & Policy', '2020-02-02', '2020-02-02'),
(69, '7', 'Agronomy', '2020-02-02', '2020-02-02'),
(70, '7', 'Food Science & Technology', '2020-02-02', '2020-02-02'),
(71, '7', 'Agricultural Engineering', '2020-02-02', '2020-02-02'),
(72, '7', 'Animal Science', '2020-02-02', '2020-02-02'),
(73, '7', 'Forestry', '2020-02-02', '2020-02-02'),
(74, '7', 'Agroecology', '2020-02-02', '2020-02-02'),
(75, '7', 'Aquaculture and Mariculture', '2020-02-02', '2020-02-02'),
(76, '7', 'Horticulture', '2020-02-02', '2020-02-02'),
(77, '8', 'Analytical Biochemistry', '2020-02-02', '2020-02-02'),
(78, '8', 'Biophysics', '2020-02-02', '2020-02-02'),
(79, '8', 'Applied Biochemistry', '2020-02-02', '2020-02-02'),
(80, '8', 'General Biochemistry', '2020-02-02', '2020-02-02'),
(81, '8', 'Biochemical Research Methods', '2020-02-02', '2020-02-02'),
(82, '8', 'Structural Biology', '2020-02-02', '2020-02-02'),
(83, '9', 'Cell & Tissue Engineering', '2020-02-02', '2020-02-02'),
(84, '9', 'Cell Migration and Cell Adhesion', '2020-02-02', '2020-02-02'),
(85, '9', 'General Cell Biology & Physiology', '2020-02-02', '2020-02-02'),
(86, '9', 'Stem Cell & Developmental Cell Biology', '2020-02-02', '2020-02-02'),
(87, '9', 'Cell Communication and Signaling', '2020-02-02', '2020-02-02'),
(88, '9', 'Cell Survival and Cell Death', '2020-02-02', '2020-02-02'),
(89, '9', 'Immunology', '2020-02-02', '2020-02-02'),
(90, '9', 'Cell Cycle & Proliferation', '2020-02-02', '2020-02-02'),
(91, '9', 'Cellular Metabolism', '2020-02-02', '2020-02-02'),
(92, '9', 'Matrix Biology', '2020-02-02', '2020-02-02'),
(93, '10', 'Agroecology', '2020-02-02', '2020-02-02'),
(94, '10', 'Conservation Biology', '2020-02-02', '2020-02-02'),
(95, '10', 'Environmental Policy', '2020-02-02', '2020-02-02'),
(96, '10', 'Population Biology', '2020-02-02', '2020-02-02'),
(97, '10', 'Wildlife Biology', '2020-02-02', '2020-02-02'),
(98, '10', 'Behavioral Ecology', '2020-02-02', '2020-02-02'),
(99, '10', 'Ecological Modeling', '2020-02-02', '2020-02-02'),
(100, '10', 'Forestry', '2020-02-02', '2020-02-02'),
(101, '10', 'Renewable Resources', '2020-02-02', '2020-02-02'),
(102, '10', 'Biogeography', '2020-02-02', '2020-02-02'),
(103, '10', 'Environmental Engineering', '2020-02-02', '2020-02-02'),
(104, '10', 'Marine and Freshwater Ecology', '2020-02-02', '2020-02-02'),
(105, '10', 'Terrestrial Ecology', '2020-02-02', '2020-02-02'),
(106, '11', 'Developmental Biology', '2020-02-02', '2020-02-02'),
(107, '11', 'Stem Cell & Developmental Cell Biology', '2020-02-02', '2020-02-02'),
(108, '11', 'Evolutionary Biology', '2020-02-02', '2020-02-02'),
(109, '11', 'Evolutionary Developmental Biology', '2020-02-02', '2020-02-02'),
(110, '12', 'Mathematical and Theoretical Biology', '2020-02-02', '2020-02-02'),
(111, '12', 'Biophysics', '2020-02-02', '2020-02-02'),
(112, '12', 'Biotechnology and Bioengineering', '2020-02-02', '2020-02-02'),
(113, '12', 'Computational Biology', '2020-02-02', '2020-02-02'),
(114, '12', 'Bioinformatics', '2020-02-02', '2020-02-02'),
(115, '12', 'Biopolymers', '2020-02-02', '2020-02-02'),
(116, '12', 'Cancer Biology', '2020-02-02', '2020-02-02'),
(117, '12', 'Systems Biology', '2020-02-02', '2020-02-02'),
(118, '12', 'Biomedical Engineering', '2020-02-02', '2020-02-02'),
(119, '12', 'Biostatistics', '2020-02-02', '2020-02-02'),
(120, '12', 'Chemical Biology', '2020-02-02', '2020-02-02'),
(121, '13', 'Applied & Industrial Microbiology', '2020-02-02', '2020-02-02'),
(122, '13', 'Mycology', '2020-02-02', '2020-02-02'),
(123, '13', 'Bacteriology', '2020-02-02', '2020-02-02'),
(124, '13', 'Parasitology', '2020-02-02', '2020-02-02'),
(125, '13', 'General Microbiology', '2020-02-02', '2020-02-02'),
(126, '13', 'Virology', '2020-02-02', '2020-02-02'),
(127, '14', 'Cell Communication and Signaling', '2020-02-02', '2020-02-02'),
(128, '14', 'Medical Genetics', '2020-02-02', '2020-02-02'),
(129, '14', 'Molecular Genetics', '2020-02-02', '2020-02-02'),
(130, '14', 'Epigenetics & Genomics', '2020-02-02', '2020-02-02'),
(131, '14', 'Molecular Biology', '2020-02-02', '2020-02-02'),
(132, '14', 'Population Genetics', '2020-02-02', '2020-02-02'),
(133, '14', 'Evolutionary Genetics', '2020-02-02', '2020-02-02'),
(134, '14', 'Molecular Epidemiology', '2020-02-02', '2020-02-02'),
(135, '15', 'Cellular & Molecular Neuroscience', '2020-02-02', '2020-02-02'),
(136, '15', 'Developmental Neuroscience', '2020-02-02', '2020-02-02'),
(137, '15', 'Cognitive Neuroscience', '2020-02-02', '2020-02-02'),
(138, '15', 'Neurobiology of Disease', '2020-02-02', '2020-02-02'),
(139, '15', 'Computational Neuroscience', '2020-02-02', '2020-02-02'),
(140, '16', 'Clinical Pharmacology', '2020-02-02', '2020-02-02'),
(141, '16', 'Pharmacodynamics', '2020-02-02', '2020-02-02'),
(142, '16', 'Vaccine Development', '2020-02-02', '2020-02-02'),
(143, '16', 'Drug Delivery', '2020-02-02', '2020-02-02'),
(144, '16', 'Pharmacokinetics', '2020-02-02', '2020-02-02'),
(145, '16', 'Drug Discovery, Design, & Development', '2020-02-02', '2020-02-02'),
(146, '16', 'Toxicology', '2020-02-02', '2020-02-02'),
(147, '17', 'Animal Behavior', '2020-02-02', '2020-02-02'),
(148, '17', 'Entomology', '2020-02-02', '2020-02-02'),
(149, '17', 'Plant Physiology and Morphology', '2020-02-02', '2020-02-02'),
(150, '17', 'Animal Physiology', '2020-02-02', '2020-02-02'),
(151, '17', 'Marine and Freshwater Biology', '2020-02-02', '2020-02-02'),
(152, '17', 'Taxonomy', '2020-02-02', '2020-02-02'),
(153, '17', 'Botany', '2020-02-02', '2020-02-02'),
(154, '17', 'Plant Molecular Biology and Genetics', '2020-02-02', '2020-02-02'),
(155, '17', 'Wildlife Biology', '2020-02-02', '2020-02-02'),
(156, '18', 'Internal Medicine', '2020-02-02', '2020-02-02'),
(157, '18', 'Surgery', '2020-02-02', '2020-02-02'),
(158, '18', 'Large Animal Medicine', '2020-02-02', '2020-02-02'),
(159, '18', 'Veterinary Epidemiology', '2020-02-02', '2020-02-02'),
(160, '18', 'Small Animal Medicine', '2020-02-02', '2020-02-02'),
(161, '18', 'Zoonoses', '2020-02-02', '2020-02-02'),
(162, '19', 'Cultural Studies', '2020-02-02', '2020-02-02'),
(163, '19', 'Public Relations', '2020-02-02', '2020-02-02'),
(164, '19', 'Technical Communication', '2020-02-02', '2020-02-02'),
(165, '19', 'Journalism', '2020-02-02', '2020-02-02'),
(166, '19', 'Publishing/Media', '2020-02-02', '2020-02-02'),
(167, '19', 'Media Studies', '2020-02-02', '2020-02-02'),
(168, '19', 'Scientific Communication', '2020-02-02', '2020-02-02'),
(169, '20', 'Educational Philosophy and Theory', '2020-02-02', '2020-02-02'),
(170, '20', 'Special Education', '2020-02-02', '2020-02-02'),
(171, '20', 'Educational Psychology', '2020-02-02', '2020-02-02'),
(172, '20', 'School Counseling', '2020-02-02', '2020-02-02'),
(173, '21', 'Architecture, Design and Planning', '2020-02-02', '2020-02-02'),
(174, '21', 'Classical Studies', '2020-02-02', '2020-02-02'),
(175, '21', 'History', '2020-02-02', '2020-02-02'),
(176, '21', 'Music', '2020-02-02', '2020-02-02'),
(177, '21', 'Theatre Studies', '2020-02-02', '2020-02-02'),
(178, '21', 'Art History', '2020-02-02', '2020-02-02'),
(179, '21', 'Cultural Studies', '2020-02-02', '2020-02-02'),
(180, '21', 'Linguistics', '2020-02-02', '2020-02-02'),
(181, '21', 'Philosophy', '2020-02-02', '2020-02-02'),
(182, '21', 'Women’s studies', '2020-02-02', '2020-02-02'),
(183, '21', 'Behavioral Geography', '2020-02-02', '2020-02-02'),
(184, '21', 'Gender Studies', '2020-02-02', '2020-02-02'),
(185, '21', 'Literature', '2020-02-02', '2020-02-02'),
(186, '21', 'Religious Studies', '2020-02-02', '2020-02-02'),
(187, '21', 'Agricultural Economics and Policy', '2020-02-02', '2020-02-02'),
(188, '21', 'Health Policy', '2020-02-02', '2020-02-02'),
(189, '21', 'Public Administration', '2020-02-02', '2020-02-02'),
(190, '21', 'City Management and Urban Policy', '2020-02-02', '2020-02-02'),
(191, '21', 'International Relations', '2020-02-02', '2020-02-02'),
(192, '21', 'Social Policy', '2020-02-02', '2020-02-02'),
(193, '21', 'Environmental Policy', '2020-02-02', '2020-02-02'),
(194, '21', 'Other Public Policy', '2020-02-02', '2020-02-02'),
(195, '22', 'Agricultural Economics and Policy', '2020-02-02', '2020-02-02'),
(196, '22', 'Health Policy', '2020-02-02', '2020-02-02'),
(197, '22', 'Public Administration', '2020-02-02', '2020-02-02'),
(198, '22', 'City Management and Urban Policy', '2020-02-02', '2020-02-02'),
(199, '22', 'International Relations', '2020-02-02', '2020-02-02'),
(200, '22', 'Social Policy', '2020-02-02', '2020-02-02'),
(201, '22', 'Environmental Policy', '2020-02-02', '2020-02-02'),
(202, '22', 'Other Public Policy', '2020-02-02', '2020-02-02'),
(203, '23', 'Agricultural Economics and Policy', '2020-02-02', '2020-02-02'),
(204, '23', 'Econometrics', '2020-02-02', '2020-02-02'),
(205, '23', 'Health Economics and Outcomes Research', '2020-02-02', '2020-02-02'),
(206, '23', 'Microeconomics', '2020-02-02', '2020-02-02'),
(207, '23', 'Behavioral Economics', '2020-02-02', '2020-02-02'),
(208, '23', 'Economic Theory', '2020-02-02', '2020-02-02'),
(209, '23', 'International Economics', '2020-02-02', '2020-02-02'),
(210, '23', 'Other Economics', '2020-02-02', '2020-02-02'),
(211, '23', 'Development Economics', '2020-02-02', '2020-02-02'),
(212, '23', 'Environmental Economics', '2020-02-02', '2020-02-02'),
(213, '23', 'Macroeconomics', '2020-02-02', '2020-02-02'),
(214, '24', 'American Political Science', '2020-02-02', '2020-02-02'),
(215, '24', 'Other Political Science', '2020-02-02', '2020-02-02'),
(216, '24', 'Comparative Political Science', '2020-02-02', '2020-02-02'),
(217, '24', 'Political Theory', '2020-02-02', '2020-02-02'),
(218, '24', 'International Relations', '2020-02-02', '2020-02-02'),
(219, '25', 'Information Retrieval and Management', '2020-02-02', '2020-02-02'),
(220, '25', 'Library Science', '2020-02-02', '2020-02-02'),
(221, '26', 'Anthropology', '2020-02-02', '2020-02-02'),
(222, '26', 'Behavioral Economics', '2020-02-02', '2020-02-02'),
(223, '26', 'Nursing', '2020-02-02', '2020-02-02'),
(224, '26', 'Sociology', '2020-02-02', '2020-02-02'),
(225, '26', 'Archaeology', '2020-02-02', '2020-02-02'),
(226, '26', 'Criminology', '2020-02-02', '2020-02-02'),
(227, '26', 'Psychology', '2020-02-02', '2020-02-02'),
(228, '26', 'Urban Studies', '2020-02-02', '2020-02-02'),
(229, '26', 'Behavioral Geography', '2020-02-02', '2020-02-02'),
(230, '26', 'Marketing', '2020-02-02', '2020-02-02'),
(231, '26', 'Social Work', '2020-02-02', '2020-02-02'),
(232, '27', 'Accounting', '2020-02-02', '2020-02-02'),
(233, '27', 'Hospitality and Tourism', '2020-02-02', '2020-02-02'),
(234, '27', 'Management', '2020-02-02', '2020-02-02'),
(235, '27', 'Public Relations', '2020-02-02', '2020-02-02'),
(236, '27', 'Entrepreneurship', '2020-02-02', '2020-02-02'),
(237, '27', 'International Business', '2020-02-02', '2020-02-02'),
(238, '27', 'Marketing', '2020-02-02', '2020-02-02'),
(239, '27', 'Finance', '2020-02-02', '2020-02-02'),
(240, '27', 'Leadership and Ethics', '2020-02-02', '2020-02-02'),
(241, '27', 'Other Business', '2020-02-02', '2020-02-02'),
(242, '28', 'Administrative Law', '2020-02-02', '2020-02-02'),
(243, '28', 'Civil Rights Law', '2020-02-02', '2020-02-02'),
(244, '28', 'Environmental Law', '2020-02-02', '2020-02-02'),
(245, '28', 'Immigration Law', '2020-02-02', '2020-02-02'),
(246, '28', 'Tax Law', '2020-02-02', '2020-02-02'),
(247, '28', 'Banking Law', '2020-02-02', '2020-02-02'),
(248, '28', 'Constitutional Law', '2020-02-02', '2020-02-02'),
(249, '28', 'Family Law', '2020-02-02', '2020-02-02'),
(250, '28', 'Intellectual Property Law', '2020-02-02', '2020-02-02'),
(251, '28', 'Business Law', '2020-02-02', '2020-02-02'),
(252, '28', 'Criminal Law', '2020-02-02', '2020-02-02'),
(253, '28', 'Health Law', '2020-02-02', '2020-02-02'),
(254, '28', 'International and Comparative Law', '2020-02-02', '2020-02-02'),
(255, '29', 'Agrochemicals', '2020-02-02', '2020-02-02'),
(256, '29', 'Biological Chemistry', '2020-02-02', '2020-02-02'),
(257, '29', 'Cement Chemistry', '2020-02-02', '2020-02-02'),
(258, '29', 'Electrochemistry', '2020-02-02', '2020-02-02'),
(259, '29', 'Inorganic Chemistry', '2020-02-02', '2020-02-02'),
(260, '29', 'Medicinal Chemistry', '2020-02-02', '2020-02-02'),
(261, '29', 'Nuclear Chemistry', '2020-02-02', '2020-02-02'),
(262, '29', 'Physical Chemistry', '2020-02-02', '2020-02-02'),
(263, '29', 'Surface chemistry', '2020-02-02', '2020-02-02'),
(264, '29', 'Analytical Chemistry', '2020-02-02', '2020-02-02'),
(265, '29', 'Biopolymers', '2020-02-02', '2020-02-02'),
(266, '29', 'Computational Chemistry', '2020-02-02', '2020-02-02'),
(267, '29', 'Environmental Chemistry', '2020-02-02', '2020-02-02'),
(268, '29', 'Mass Spectrometry', '2020-02-02', '2020-02-02'),
(269, '29', 'Nanoscience', '2020-02-02', '2020-02-02'),
(270, '29', 'Organic Chemistry', '2020-02-02', '2020-02-02'),
(271, '29', 'Polymer Science', '2020-02-02', '2020-02-02'),
(272, '29', 'Bioinorganic chemistry', '2020-02-02', '2020-02-02'),
(273, '29', 'Catalysis', '2020-02-02', '2020-02-02'),
(274, '29', 'Crystallography', '2020-02-02', '2020-02-02'),
(275, '29', 'Food Chemistry', '2020-02-02', '2020-02-02'),
(276, '29', 'Materials Chemistry', '2020-02-02', '2020-02-02'),
(277, '29', 'Natural Product Chemistry', '2020-02-02', '2020-02-02'),
(278, '29', 'Photonics/optics', '2020-02-02', '2020-02-02'),
(279, '29', 'Spectroscopy', '2020-02-02', '2020-02-02'),
(280, '30', 'Atomic and Molecular Physics', '2020-02-02', '2020-02-02'),
(281, '30', 'Electrophysics', '2020-02-02', '2020-02-02'),
(282, '30', 'Magnetism', '2020-02-02', '2020-02-02'),
(283, '30', 'Optics/Lasers', '2020-02-02', '2020-02-02'),
(284, '30', 'Soft Condensed-matter Physics', '2020-02-02', '2020-02-02'),
(285, '30', 'Mathematical Physics', '2020-02-02', '2020-02-02'),
(286, '30', 'Biophysics', '2020-02-02', '2020-02-02'),
(287, '30', 'Hard Condensed-matter Physics', '2020-02-02', '2020-02-02'),
(288, '30', 'Nanoscience', '2020-02-02', '2020-02-02'),
(289, '30', 'Plasma and Fluids', '2020-02-02', '2020-02-02'),
(290, '30', 'Theoretical Physics', '2020-02-02', '2020-02-02'),
(291, '30', 'Computational Physics', '2020-02-02', '2020-02-02'),
(292, '30', 'High Energy and Particle Physics', '2020-02-02', '2020-02-02'),
(293, '30', 'Nuclear Physics', '2020-02-02', '2020-02-02'),
(294, '30', 'Scattering', '2020-02-02', '2020-02-02'),
(295, '30', 'Thermodynamics and statistical mechanics', '2020-02-02', '2020-02-02'),
(296, '31', 'Astrobiology', '2020-02-02', '2020-02-02'),
(297, '31', 'Astrophysics and Cosmology', '2020-02-02', '2020-02-02'),
(298, '31', 'Planetary Science', '2020-02-02', '2020-02-02'),
(299, '31', 'Astrochemistry', '2020-02-02', '2020-02-02'),
(300, '31', 'Space Exploration', '2020-02-02', '2020-02-02'),
(301, '31', 'Comet Research', '2020-02-02', '2020-02-02'),
(302, '31', 'Astronomy', '2020-02-02', '2020-02-02'),
(303, '31', 'Meteoritics', '2020-02-02', '2020-02-02'),
(304, '31', 'Theoretical Astrophysics', '2020-02-02', '2020-02-02'),
(305, '32', 'Atmospheric Sciences', '2020-02-02', '2020-02-02'),
(306, '32', 'Economic Geology', '2020-02-02', '2020-02-02'),
(307, '32', 'Geology', '2020-02-02', '2020-02-02'),
(308, '32', 'Glaciology', '2020-02-02', '2020-02-02'),
(309, '32', 'Meteorology', '2020-02-02', '2020-02-02'),
(310, '32', 'Petrology', '2020-02-02', '2020-02-02'),
(311, '32', 'Seismology', '2020-02-02', '2020-02-02'),
(312, '32', 'Climate Analysis and Modeling', '2020-02-02', '2020-02-02'),
(313, '32', 'Geochemistry', '2020-02-02', '2020-02-02'),
(314, '32', 'Geomorphology', '2020-02-02', '2020-02-02'),
(315, '32', 'Historical Geology and Stratigraphy', '2020-02-02', '2020-02-02'),
(316, '32', 'Oceanography', '2020-02-02', '2020-02-02'),
(317, '32', 'Physical Geography', '2020-02-02', '2020-02-02'),
(318, '32', 'Volcanology', '2020-02-02', '2020-02-02'),
(319, '32', 'Climatology', '2020-02-02', '2020-02-02'),
(320, '32', 'Geographic Information Systems', '2020-02-02', '2020-02-02'),
(321, '32', 'Geophysics', '2020-02-02', '2020-02-02'),
(322, '32', 'Hydrology', '2020-02-02', '2020-02-02'),
(323, '32', 'Petroleum Geology', '2020-02-02', '2020-02-02'),
(324, '32', 'Planetary Geology', '2020-02-02', '2020-02-02'),
(325, '33', 'Paleobotany', '2020-02-02', '2020-02-02'),
(326, '33', 'Taphonomy', '2020-02-02', '2020-02-02'),
(327, '33', 'Paleoecology', '2020-02-02', '2020-02-02'),
(328, '33', 'Paleozoology', '2020-02-02', '2020-02-02'),
(329, '34', 'Acoustics', '2020-02-02', '2020-02-02'),
(330, '34', 'Biomedical Engineering', '2020-02-02', '2020-02-02'),
(331, '34', 'Chemical Engineering', '2020-02-02', '2020-02-02'),
(332, '34', 'Electrical Engineering', '2020-02-02', '2020-02-02'),
(333, '34', 'Industrial Engineering', '2020-02-02', '2020-02-02'),
(334, '34', 'Nuclear Engineering', '2020-02-02', '2020-02-02'),
(335, '34', 'Robotics', '2020-02-02', '2020-02-02'),
(336, '34', 'Aeronautics and Astronautics', '2020-02-02', '2020-02-02'),
(337, '34', 'Biotechnology and Bioengineering', '2020-02-02', '2020-02-02'),
(338, '34', 'Civil Engineering', '2020-02-02', '2020-02-02'),
(339, '34', 'Energy Engineering', '2020-02-02', '2020-02-02'),
(340, '34', 'Materials Engineering', '2020-02-02', '2020-02-02'),
(341, '34', 'Ocean Engineering', '2020-02-02', '2020-02-02'),
(342, '34', 'Software Engineering', '2020-02-02', '2020-02-02'),
(343, '34', 'Agricultural Engineering', '2020-02-02', '2020-02-02'),
(344, '34', 'Cell & Tissue Engineering', '2020-02-02', '2020-02-02'),
(345, '34', 'Computer Architecture and Engineering', '2020-02-02', '2020-02-02'),
(346, '34', 'Environmental Engineering', '2020-02-02', '2020-02-02'),
(347, '34', 'Mechanical Engineering', '2020-02-02', '2020-02-02'),
(348, '34', 'Petroleum Engineering', '2020-02-02', '2020-02-02'),
(349, '34', 'Systems Engineering', '2020-02-02', '2020-02-02'),
(350, '35', 'Biomaterials', '2020-02-02', '2020-02-02'),
(351, '35', 'Magnetics Materials and Devices', '2020-02-02', '2020-02-02'),
(352, '35', 'Materials Theory and Modeling', '2020-02-02', '2020-02-02'),
(353, '35', 'Optical Materials and Devices', '2020-02-02', '2020-02-02'),
(354, '35', 'Ceramics', '2020-02-02', '2020-02-02'),
(355, '35', 'Materials Chemistry', '2020-02-02', '2020-02-02'),
(356, '35', 'Metallurgy', '2020-02-02', '2020-02-02'),
(357, '35', 'Polymer Science', '2020-02-02', '2020-02-02'),
(358, '35', 'Electronic Materials and Devices', '2020-02-02', '2020-02-02'),
(359, '35', 'Materials Engineering', '2020-02-02', '2020-02-02'),
(360, '35', 'Nanoscience', '2020-02-02', '2020-02-02'),
(361, '36', 'Artificial Intelligence and Machine Learning', '2020-02-02', '2020-02-02'),
(362, '36', 'Graphical Systems', '2020-02-02', '2020-02-02'),
(363, '36', 'Numerical Analysis', '2020-02-02', '2020-02-02'),
(364, '36', 'Systems and Networking', '2020-02-02', '2020-02-02'),
(365, '36', 'Computer Architecture and Engineering', '2020-02-02', '2020-02-02'),
(366, '36', 'Information Retrieval and Management', '2020-02-02', '2020-02-02'),
(367, '36', 'Robotics', '2020-02-02', '2020-02-02'),
(368, '36', 'Theoretical Computer Science', '2020-02-02', '2020-02-02'),
(369, '36', 'GIS', '2020-02-02', '2020-02-02'),
(370, '36', 'Information Theory', '2020-02-02', '2020-02-02'),
(371, '36', 'Software Engineering', '2020-02-02', '2020-02-02'),
(372, '37', 'Algebra', '2020-02-02', '2020-02-02'),
(373, '37', 'Computational Biology', '2020-02-02', '2020-02-02'),
(374, '37', 'Financial Mathematics', '2020-02-02', '2020-02-02'),
(375, '37', 'Mathematical Physics', '2020-02-02', '2020-02-02'),
(376, '37', 'Topology', '2020-02-02', '2020-02-02'),
(377, '37', 'Analysis', '2020-02-02', '2020-02-02'),
(378, '37', 'Computational Mathematics', '2020-02-02', '2020-02-02'),
(379, '37', 'Geometry', '2020-02-02', '2020-02-02'),
(380, '37', 'Numerical Analysis', '2020-02-02', '2020-02-02'),
(381, '37', 'Applied Mathematics', '2020-02-02', '2020-02-02'),
(382, '37', 'Discrete Mathematics', '2020-02-02', '2020-02-02'),
(383, '37', 'Logic', '2020-02-02', '2020-02-02'),
(384, '37', 'Pure Mathematics', '2020-02-02', '2020-02-02'),
(385, '38', 'Applied Statistics', '2020-02-02', '2020-02-02'),
(386, '38', 'Operations Research', '2020-02-02', '2020-02-02'),
(387, '38', 'Biostatistics', '2020-02-02', '2020-02-02'),
(388, '38', 'Statistical Epidemiology', '2020-02-02', '2020-02-02'),
(389, '38', 'Decision Sciences', '2020-02-02', '2020-02-02'),
(390, '38', 'Statistical Theory', '2020-02-02', '2020-02-02'),
(391, NULL, 'English as a Second Language', '2020-02-02', '2020-02-02'),
(392, NULL, 'Foreign Languages', '2020-02-02', '2020-02-02'),
(393, NULL, 'English Foundation Course', '2020-02-02', '2020-02-02'),
(394, NULL, 'English for Special Purposes Course.', '2020-02-02', '2020-02-02');

-- --------------------------------------------------------

--
-- Table structure for table `config_menus`
--

CREATE TABLE `config_menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `serial` int(11) NOT NULL DEFAULT 1,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1=active, 0=in-active',
  `created_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `config_menus`
--

INSERT INTO `config_menus` (`id`, `title`, `slug`, `content`, `serial`, `status`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'About us', 'home', '<p><strong>What is EBEE 2020? Why should you participate?</strong></p>\r\n\r\n<p><strong>Euro-Bangla Educational Expo</strong> is a pioneering non-profit multi-city event for universities and prospective students, which will be organized for the first time <strong>from 11 to 15 April 2020</strong> in three cities in Bangladesh: <strong>Dhaka, Chittagong, and Sylhet</strong>.&nbsp;EBEE 2020 takes pride in becoming one of South Asia&#39;s major and most prestigious student recruitment events of the year, providing exhibitors with with the opportunity to get conneted with interested students and other attendees from the realm of higher education.</p>\r\n\r\n<p><strong>EBEE 2020 is&nbsp;synonymous with quality student recruitment through the active participation of a comprehensive network of local, regional, and international consultancies, government representatives, regulatory bodies, local high school and university personnel, diplomatic missions, and decisionmakers in higher education.</strong></p>\r\n\r\n<p>EBEE 2020 strives to offer a unique opportunity for the most prominent universities across Europe to (re)introduce themselves and promote their programs on the Bangladeshi market. In order to succeed in recruiting quality students to European institutuions (universities, universities of applied sciences, preparatory institutions, and colleges), EBEE 2020 will provide support, networking opportunities, and resources for professionals working in specific areas of international higher education.</p>\r\n\r\n<p><strong>EBEE 2020 is the first expo of its kind organized exclusively for Bangladeshi students, who are looking for new possibilities to earn a degree from a European educational institution. </strong>Exhibitors will&nbsp;meet pre-registered, filtered, and thoroughly selected students, whose interest in choosing the right study destination is based on specific criteria and a set of rigorous family expectations.</p>\r\n\r\n<p>The expo strives to become the most comprehensive regional event on the education market with the following objectives in mind:</p>\r\n\r\n<p>- maximizing the number of your quality, fee-paying students with a matching profile</p>\r\n\r\n<p>- cultivating partnerships to connect with decision-makers, campus leaders, and industry&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; professionals from the region</p>\r\n\r\n<p>- discovering knowledge, insights, and strategies in today&#39;s changing educational landscape: emerging innovations and trends for success to attract students from Bangladesh and the South Asian region</p>\r\n\r\n<p>We look forward to welcoming&nbsp;all European institutions with a wealth of professional programs, including Meet &amp; Mingle sessions between universities and students as well as&nbsp;networking possibilities with agents and regional institutions.</p>\r\n\r\n<p>EBEE 2020 strives to offer&nbsp;an expert&nbsp;insight into the details of how students from Bangladesh are best assessed and selected for admission, while attendees will get acquainted with some of the most treasured highlights of Bangladeshi culture and its unmatched natural landscape.</p>\r\n\r\n<p>Conctact us at <a href=\"mailto:exhibitor@euro-bangla-expo.org\">exhibitor@euro-bangla-expo.org</a> for more information.</p>\r\n\r\n<p><em>Join us as an exhibitor at EBEE from 11 to 15 April 2020.</em></p>\r\n\r\n<p>EBEE Organzing Committee</p>\r\n\r\n<p>&nbsp;</p>', 1, 1, '2020-01-25 18:00:00', 1, '2020-01-28 09:37:57', 1),
(2, 'Organizers', 'about-ebee-2020', '<p><strong>About the host</strong></p>\r\n\r\n<p>EBEE 2020 is hosted by <strong>GSC Global Solutions Ltd., Malaysia</strong>, and its partner agencies in Hungary and the United Kingdom. It is owned and managed by Muhammad Shoaib Chy, a former graduate from&nbsp;the United Kingdom and a well-established entrepreneur in Bangladesh.</p>\r\n\r\n<p>Since its inception in&nbsp;2009, formerly DHS Aviation, GSC Global Solutions has been providing its services to thousands&nbsp;of students in South Asia and organizing activities for foreign universities and colleges.</p>\r\n\r\n<p>GSC Global Solutions is an <strong>educational servicing&nbsp;company&nbsp;</strong>specialized, among other things,&nbsp;in providing <strong>marketing and logistical services to foreign universities</strong>, which strive<strong>&nbsp;</strong>to promote their programs in South Asia (including Bangladesh, India, Nepal, and Sri Lanka) via subcontracted agents, high schools, institutions of higher education, roadshows, workshops, and small-scale expos.</p>\r\n\r\n<p>GSC Global Solutions has six branch offices in Bangladesh, and&nbsp;two overseas representations in <strong>Malaysia </strong>and <strong>Hungary</strong>, respectively. Currently, the company boasts of having a total number of 80 employees and a managerial team with more than 10 years of work experience in student recruitment, logistics, organizing, and higher education promotion.</p>\r\n\r\n<p>As an international education consultancy, GSC Global Solutions has earned its reputation for&nbsp;assisting its clients&nbsp;in South Asia to make the right choice when considering their international education opportunities.</p>\r\n\r\n<p>As a reputed educational consultancy provider, GSC Global Solutions&nbsp;has a wide range of experience in international education; both undergraduate and post graduate. It offers student placement to various European countries (all EU member states as well as Albania, Kosovo, and Moldova), Canada, the US, the UK,&nbsp;Ukraine, China,&nbsp;Malaysia, New Zealand and Australia.</p>\r\n\r\n<p>Until 2020, GSC Global Solutions signed over 100 agreements of cooperation with universities and colleges from the countries listed above, cherishing particularly strong relations with Eastern and Central European countries, including Hungary, Poland, and the Czech Republic.</p>\r\n\r\n<p>GSC Global Solutions continues formalizing its relationship with additional universities from EU member states, but also places equal emphasis on partnering with universities from <strong>Norway, Switzerland, Moldova, Albania, Kosovo, Serbia, Belarus, Bosnia and Herzegovina, and North Macedonia.</strong></p>\r\n\r\n<p>To date, <strong>GSC Global Solutions has hosted more than 20 roadshows and major workshops across Bangladesh to promote the programs of individual universities.</strong>&nbsp;</p>\r\n\r\n<p><strong>Click here to visit the gallery of previous events organized by GSS Global Solutions.</strong></p>\r\n\r\n<p>&nbsp;</p>', 1, 1, '2020-01-26 05:51:34', 1, '2020-01-26 20:56:57', 1),
(3, 'Why Join EBEE 2020', 'why-join-ebee-2020', NULL, 1, 1, '2020-01-26 05:52:00', 1, '2020-01-30 15:03:13', 1),
(4, 'Places & Dates', 'places-dates', NULL, 1, 1, '2020-01-26 05:52:14', 1, '2020-01-26 21:03:21', 1),
(5, 'Pricing', 'pricing', '<h1><strong>PRICING:&nbsp;</strong></h1>\r\n\r\n<table align=\"left\" border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:500px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>Early bird registration for regular exhibitor (until 15 February 2020)</td>\r\n			<td>1900 EUR</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Regular Exhibitor</td>\r\n			<td>2020 EUR</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Hosted Exhibitor (no exclusions apply)</td>\r\n			<td>Free</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Single-city participation (except Dhaka)</td>\r\n			<td>700 EUR</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Two-day participation in Dhaka only</td>\r\n			<td>1200 EUR</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em>Fees include all taxes, additional charges, and VAT. Delegates must ensure that bank fees are covered by their institutions and not by EBEE.</em></p>\r\n\r\n<p><strong><em>What is hosting and how can you earn the status?</em></strong></p>\r\n\r\n<p>Hosted exhibitors are selected based on a variety of criteria to be uploaded soon on the event website. All applying institutions are encouraged to participate in the event as Hosted Exhibitors, in which case <em>only</em> a <strong>350 EUR non-refundable registration fee</strong> applies (note that international air tickets are also paid by EBEE).</p>\r\n\r\n<p>Further information will be made available on <a href=\"http://www.euro-bangla-expo.org\">www.euro-bangla-expo.org</a>.</p>', 1, 1, '2020-01-26 05:52:35', 1, '2020-01-26 21:59:27', 1),
(6, 'Sponsorship', 'sponsorship', NULL, 1, 0, '2020-01-26 05:52:47', 1, '2020-01-26 13:36:14', 1),
(7, 'Optional Programs', 'optional-programs', NULL, 1, 0, '2020-01-26 05:53:00', 1, '2020-01-26 13:36:26', 1),
(8, 'Travel Info', 'travel-information', NULL, 1, 1, '2020-01-26 05:53:11', 1, '2020-01-26 13:37:14', 1),
(9, 'Updates', 'organizers', NULL, 1, 0, '2020-01-26 14:36:31', 1, '2020-01-26 14:38:13', 1),
(10, 'GSC GLOBAL SOLUTIONS', 'gsc-global-solutions', NULL, 1, 0, '2020-01-26 15:44:32', 1, '2020-01-26 15:45:06', 1),
(11, 'Audience', 'audience', NULL, 1, 1, '2020-01-27 09:48:11', 1, NULL, NULL),
(12, 'Contact', 'contact', NULL, 1, 0, '2020-01-27 09:48:23', 1, '2020-01-31 10:05:30', 1),
(13, 'Contact Us', 'contact-us', NULL, 1, 1, '2020-01-31 10:04:30', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `config_sub_menus`
--

CREATE TABLE `config_sub_menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1=active, 0=in-active',
  `created_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `config_sub_menus`
--

INSERT INTO `config_sub_menus` (`id`, `menu_id`, `title`, `slug`, `content`, `status`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 2, 'About the Organizer', 'welcome-message', '<p><strong>About the organizer</strong></p>\r\n\r\n<p>EBEE 2020 is hosted by <strong>GSC Global Solutions Ltd., Malaysia</strong>, and its partner agencies in Hungary and the United Kingdom. It is owned and managed by Muhammad Shoaib Chy, a former graduate from&nbsp;the United Kingdom and a well-established entrepreneur in Bangladesh with 15 years of experience in higher education promotion under his belt.</p>\r\n\r\n<p>Since its inception in&nbsp;2009, GSC Global Solutions, formerly known as DHS Aviation, has been providing its services to thousands&nbsp;of students in South Asia and organizing activities for foreign universities and colleges.</p>\r\n\r\n<p>GSC Global Solutions is an <strong>educational servicing&nbsp;company&nbsp;</strong>specialized, among other things,&nbsp;in providing <strong>marketing and logistical services to foreign universities</strong>, which strive<strong>&nbsp;</strong>to promote their programs in South Asia (including Bangladesh, India, Nepal, and Sri Lanka) via subcontracted agents, high schools, institutions of higher education, roadshows, workshops, and small-scale expos.</p>\r\n\r\n<p>GSC Global Solutions has six branch offices in Bangladesh, and&nbsp;two overseas representations in <strong>Malaysia </strong>and <strong>Hungary</strong>, respectively. Currently, the company boasts of having 80 employees and an international managerial team with more than 10 years of work experience in student recruitment, logistics, organizing, and higher education promotion.</p>\r\n\r\n<p>As a reputed educational consultancy provider, GSC Global Solutions&nbsp;has a wide range of experience in international education; both undergraduate and post graduate. It offers student placement to various European countries (all EU member states as well as Albania, Kosovo, and Moldova), Canada, the US, the UK,&nbsp;Ukraine, China,&nbsp;Malaysia, New Zealand and Australia.</p>\r\n\r\n<p>Until 2020, <strong>GSC Global Solutions signed over 100 agreements of cooperation with universities and colleges from the countries listed above</strong>, cherishing particularly strong relations with Eastern and Central European countries, including Hungary, Poland, and the Czech Republic.</p>\r\n\r\n<p>GSC Global Solutions continues formalizing its relationship with additional universities from EU member states, but also places equal emphasis on partnering with universities from <strong>Norway, Switzerland, Moldova, Albania, Kosovo, Serbia, Belarus, Bosnia and Herzegovina, and North Macedonia.</strong></p>\r\n\r\n<p>To date, <strong>GSC Global Solutions has hosted more than 20 roadshows and major workshops across Bangladesh</strong> to promote the programs of individual universities.&nbsp;</p>\r\n\r\n<p><strong>Click here to visit the gallery of previous events organized by GSS Global Solutions.</strong></p>', 1, '2020-01-26 05:54:11', 1, '2020-01-27 23:54:00', 1),
(2, 2, 'Mission Statement', 'mission-statement', '<h2>Vision</h2>\r\n\r\n<p>EBEE 2020 will be an exceptional, world-class student-centered fair&nbsp;that empowers individuals to grow, thrive and prosper within a changing world by choosing the right university for their prospective studies.</p>\r\n\r\n<h2>Mission</h2>\r\n\r\n<p>EBEE 2020&nbsp;is the first-ever fair organized in Bangladesh to promote European education. It provides relevant and innovative experiences that successfully prepare students to move to Europe, complete their higher studies, engage in career development and lifelong learning.</p>\r\n\r\n<p>EBEE 2020 is committed to providing&nbsp;accessible and affordable study options for all individuals with the involvement of its partner institutions.</p>\r\n\r\n<p>In addition to paving the way toward higher education goals, it also&nbsp;values collaborative partnerships between European universities and Bangladeshi organizations; it strengthens and enriches the intellectual, economic and cultural vitality of the communities it seeks to serve without regard to race, color, and creed.</p>\r\n\r\n<h2>EBEE 2020 Core Values</h2>\r\n\r\n<p><strong>People</strong><br />\r\nWork collaboratively in a supportive environment that keeps students central and values scholarly merits, and the people we serve.</p>\r\n\r\n<p><strong>Excellence</strong><br />\r\nFocus on quality and continuous improvement in providing attendees with the best logistical support and otherwise.</p>\r\n\r\n<p><strong>Diversity</strong><br />\r\nEnsure fair and equal access for all; recognize, appreciate and celebrate the strength of diversity.</p>\r\n\r\n<p><strong>Innovation</strong><br />\r\nEncourage and reward new ideas, proactive thinking and use of evolving technology.</p>\r\n\r\n<p><strong>Respect</strong><br />\r\nFoster trust, courtesy and open communication.</p>\r\n\r\n<p><strong>Integrity</strong><br />\r\nPromote ethical and honest behavior.</p>\r\n\r\n<p><strong>Accountability</strong><br />\r\nMaintain effective and efficient programs and services in student recruitment.</p>\r\n\r\n<p><strong>Fun</strong><br />\r\nEnjoy and celebrate the work we do.</p>\r\n\r\n<p>&nbsp;</p>', 1, '2020-01-26 05:54:41', 1, '2020-01-30 15:06:51', 1),
(3, 2, 'Recruitment in Bangladesh', 'recruitment-in-bangladesh', '<h3><strong>Outbound student mobility in Bangladesh</strong></h3>\r\n\r\n<p>Outbound student flows from Bangladesh have surged in recent years, making it an increasingly dynamic source country of international students, akin to other South Asian countries like India and Nepal. The number of Bangladeshi nationals enrolled in degree programs abroad almost quadrupled within 12 years, from&nbsp;15,000&nbsp;in&nbsp;2005&nbsp;to&nbsp;56,000&nbsp;in&nbsp;2017, according to the UNESCO Institute for Statistics.</p>\r\n\r\n<p>While observers like the British Council foresee an overall slowing of global international student flows in the near future,<strong> Bangladesh is expected to be among a select group of countries that will sustain increases in outbound student mobility for years to come.</strong></p>\r\n\r\n<p>Among the factors driving this swelling outflow are the expansion of Bangladesh&rsquo;s college-age population, capacity shortages in higher education, and the emergence of a growing middle class able to afford an overseas education, notably in major urban centers like Dhaka and Chittagong. The Boston Consulting Group has predicted&nbsp;that the number of middle income and affluent Bangladeshis will grow at a rate of more than 10 percent annually and increase from 12 million in&nbsp;2015&nbsp;to 34 million by&nbsp;2025.</p>\r\n\r\n<p>Outbound student flows from Bangladesh have surged in recent years, making it an increasingly dynamic source country of international students, akin to other South Asian countries like India and Nepal. The number of Bangladeshi nationals enrolled in degree programs abroad almost quadrupled within 12 years, from 15,000 in 2005 to 56,000 in 2017, according to the UNESCO Institute for Statistics.</p>\r\n\r\n<p><strong>While international degree-seeking students from Bangladesh used to opt for the United States, Canada, the United Kingdom, Australia, and Malaysia as their primary study destinations, member states of the European Union and formerly less popular&nbsp;European countries have emerged as the most popular options by far in recent years.&nbsp;</strong></p>', 1, '2020-01-26 05:55:08', 1, '2020-01-27 23:52:45', 1),
(4, 2, 'Guest of Honor', 'guests-of-honor', '<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', 1, '2020-01-26 05:55:31', 1, '2020-01-26 14:45:47', 1),
(5, 3, 'What to Expect from EBEE 2020', 'who-visits-ebee-2020', '<h2><strong>What to expect from the fair?</strong></h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>EBEE 2020 is one of South Asia&#39;s largest and most prestigious student recruitment expos, which enables attendees to enjoy the following privileges:</strong></p>\r\n\r\n<p><strong>Successful promotion</strong></p>\r\n\r\n<p>Promote your programs among 15,000+ students interested in studying in Europe</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>A dedicated spot</strong></p>\r\n\r\n<p>Get a dedicated stall and/or table at the fair in each city</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>An expanding student market</strong></p>\r\n\r\n<p>Get to know the Bangladeshi student market on a multi-city educational expo</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Maximizing student numbers</strong></p>\r\n\r\n<p>Increase student numbers by selecting applicants to participate in your admission process.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>A fair and unbiased selection process</strong></p>\r\n\r\n<p>Understand the challenges of outbound student mobility from Bangladesh to be able to filter students with matching profiles.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Study-abroad strategies from novel perpectives</strong></p>\r\n\r\n<p>Attend panel discussions and presentations on study abroad strategies with regional university executives, educational consultancies, representatives of diplomatic missions, and regulatory bodies.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Academic cooperation</strong></p>\r\n\r\n<p>Meet institutions and universities from all the participating countries to establish academic cooperation and exchange partnerships</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Meet your prospectives students</strong></p>\r\n\r\n<p>Meet and mingle with students, agents, and university personnel from Bangladesh</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Access participant databases</strong></p>\r\n\r\n<p>Get the personal details of all participating students and educational agents for an effective follow-up campaign</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Advance reporting</strong></p>\r\n\r\n<p>Receive advance report of the outcomes of the event, which will help your institution to shape its international strategy and visions regarding student recruitment in the future.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Visit the best student venues in Bangladesh</strong></p>\r\n\r\n<p>Visit the most promising venues in Bangladesh for a successful student recruitment campaign, including Dhaka, Sylhet, and Chittagong.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Discover the attractive features of Bangladesh</strong></p>\r\n\r\n<p>Tour Bangladesh and discover its stunning beauty, delectable dishes, and unique ways of living</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Professionalism</strong></p>\r\n\r\n<p>Experience professionalism and hospitality from the Bangladeshi organizers, all of whom have completed a degree abroad and at least 10 years of expertise in the higher education industry under their belt.</p>', 1, '2020-01-26 05:56:07', 1, '2020-01-30 15:18:31', 1),
(6, 3, 'Benefits', 'benefits', '<p><strong>Institutions participating in the event will understand that EBEE 2020 is entirely different from other educational events, because universities will be able to</strong></p>\r\n\r\n<p>Introduce and promote their degree programs for 15,000+ students.</p>\r\n\r\n<p>Gain knowledge about the specificities of a new, rapidly developing market.</p>\r\n\r\n<p>Recruit well-informed, quality students with matching profiles.</p>\r\n\r\n<p>Attend a high-profile expo at&nbsp;the most promising educational venues in the country, including Dhaka, Chittagong, and Sylhet.</p>\r\n\r\n<p>Connect with local agencies, universities, regulatory bodies, and diplomatic missions.</p>\r\n\r\n<p>Meet and connect with university representative, including high-ranking academic executives and pragmatic directors of recruitment, assessment, and enrollment.</p>\r\n\r\n<p>Maximize your visibility in an international setting by reaching out the best Bangladeshi students.</p>', 1, '2020-01-26 05:56:27', 1, '2020-01-30 15:19:44', 1),
(7, 3, 'Attendees of EBEE 2020', 'participants', '<h2><strong>Institutions from abroad</strong></h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Any institution from Europe and beyond is welcome to attend the fair either as an exhibitor to discover the unique opportunities that student recruitment represents in Bangladesh. While experience has shown that Bangladeshi students have a keen interest in studying in one of the EU member states, recent statistics have shown that this trend is changing. Increasing numbers of student from all over the country have chosen to persue their studies in countries, which are not yet members of the European Union.</p>\r\n\r\n<p>It is for this reason that EBEE 2020 strongly encourages the partipation of both public and private universities from non-EU countries (Albania, Kosovo, Moldova, North Macedonia, Bosnia and Herzegovina, Serbia, and&nbsp;Belarus) to understand the dynamics of the market, admit students with matching profiles, and establish partnerships with local high schools as well as with universities both from abroad and from Bangladesh.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2><strong>Student audience</strong></h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>This event guarantees a grand audience of over 15,000 registered and walk-in visitors, including high school and university students from a variety of fields. Most prospective students you will meet come from wealthier households and were educated at English-medium schools. Our audience will consist of pre-assessed students, all of whom are guaranteed to:</p>\r\n\r\n<p>- be conversant in English (from A2 to C1 levels)</p>\r\n\r\n<p>- show a genuine interest to study in Europe</p>\r\n\r\n<p>- have a minimum Grade Point Average equivalent to B- (on the US grading scale)</p>\r\n\r\n<p>- possess an in-depth&nbsp;knowledge in their respective fields.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2><strong>University audience</strong></h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Some of the largest, oldest, and most reputable public research universities are the University of Dhaka, the Bangladesh University of Engineering and Technology, and the University of Rajshahi, all of which will be represented during the event. <em><strong>A list of private and public universities to participate will appear on the website and in our newsletters.</strong></em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2><strong>Governmental and diplomatic presence</strong></h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Government officials from various public sectors, regulatory bodies, and representatives of diplomatic missions (embassies and consulates) and international organizations accredited to Bangladesh will also honor the event with their presence.</p>', 1, '2020-01-26 05:56:49', 1, '2020-01-30 15:34:58', 1),
(8, 3, 'Services', 'services', '<p>ontrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>', 1, '2020-01-26 05:57:08', 1, NULL, NULL),
(9, 4, 'Event Venues and Itinerary', 'dhaka', '<h1><kbd><strong>EVENT VENUES AND ITINERARY</strong></kbd></h1>\r\n\r\n<hr />\r\n<h3><strong>ARRIVAL: </strong><em><strong>10 April (Friday)</strong></em></h3>\r\n\r\n<p>Transport from the airport (24/7) by a designated team member</p>\r\n\r\n<p>Check-in at the hotel in Dhaka</p>\r\n\r\n<p>Orientation, free time, sightseeing</p>\r\n\r\n<hr />\r\n<h3><strong>DAY 1: </strong><em><strong>11 April (Saturday)</strong></em></h3>\r\n\r\n<p>EXPO IN DHAKA</p>\r\n\r\n<p>Registration from 9 a.m.</p>\r\n\r\n<p>Opening Plenary Session and Welcome Speeches</p>\r\n\r\n<p>Meet &amp; Mingle Session</p>\r\n\r\n<p>Panel discussion for university executives</p>\r\n\r\n<p>Workshop for educational agencies</p>\r\n\r\n<p>Gala Dinner</p>\r\n\r\n<hr />\r\n<h3><strong>DAY 2: </strong><em><strong>12 April (Sunday)</strong></em></h3>\r\n\r\n<p>EXPO IN DHAKA</p>\r\n\r\n<p>Meet and Mingle Session</p>\r\n\r\n<p>Award-giving ceremony</p>\r\n\r\n<h3>&nbsp;</h3>\r\n\r\n<hr />\r\n<h3><strong>DAY 3: </strong><em><strong>13 April (Monday)</strong></em></h3>\r\n\r\n<p>EXPO IN CHITTAGONG</p>\r\n\r\n<p>Early morning flight to Chittagong</p>\r\n\r\n<p>Check-in-at the hotel</p>\r\n\r\n<p>A&nbsp;zany rickshaw ride to the venue in Chittagong</p>\r\n\r\n<p>Meet &amp; Mingle Session</p>\r\n\r\n<p>Partnership&nbsp;and capacity building with universities and agencies</p>\r\n\r\n<hr />\r\n<h3><strong>DAY 4: </strong><em><strong>14 April (Tuesday)&nbsp;</strong></em><strong>&nbsp;&nbsp;</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3>\r\n\r\n<p>DISCOVERING SYLHET</p>\r\n\r\n<p>Early morning flight from Chittagong to Sylhet</p>\r\n\r\n<p>Check-in at the hotel</p>\r\n\r\n<p>Discovering the beauties of Sylhet: tea plantations and waterfalls</p>\r\n\r\n<p>Evening tour for foodies: tasting a variety of local dishes</p>\r\n\r\n<hr />\r\n<h3><strong>DAY 5: </strong><em><strong>15 April (Wednesday)</strong></em></h3>\r\n\r\n<p>EXPO IN SYLHET</p>\r\n\r\n<p>fair and university networking in Sylhet</p>\r\n\r\n<p>Meet &amp; Mingle Session</p>\r\n\r\n<p>partnerships and capacity building with universities and agencies</p>\r\n\r\n<p>Farewell Dinner, Traditional Folklore Show and Live Music</p>\r\n\r\n<hr />\r\n<h3><strong>END OF THE PROGRAM: </strong><em><strong>16 April (Thursday)</strong></em></h3>\r\n\r\n<p><strong>RETURN TO DHAKA</strong></p>\r\n\r\n<p>END OF OFFICIAL PROGRAMS</p>\r\n\r\n<p>Connecting to homebound flights</p>\r\n\r\n<hr />\r\n<h2><strong>POST-EVENT TOURS (OPTIONAL):</strong></h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong><em>17 April (Friday)</em></strong></h3>\r\n\r\n<p><em><strong>1N/2D TRIP TO COX&rsquo;S BAZAR</strong></em></p>\r\n\r\n<p>Visiting the refugee camp and meet the Rohingyas on request</p>\r\n\r\n<p>Bathing in the Bay of Bengal &ndash; the world&rsquo;s longest natural beach</p>\r\n\r\n<p>Buying handicrafts to support local communities</p>\r\n\r\n<hr />\r\n<h2><strong>&nbsp;OR:</strong></h2>\r\n\r\n<hr />\r\n<p><strong><em>1N/2D TRIP TO RAJSHAHI</em></strong></p>\r\n\r\n<p>A visit to clean and green Rajshahi, the city of mango and lichee</p>\r\n\r\n<p>Visiting the historical University of Rajshahi</p>\r\n\r\n<p>Buying silk products from the region&rsquo;s most famous factories</p>\r\n\r\n<hr />\r\n<h3><strong><em>18 April (Saturday)</em></strong></h3>\r\n\r\n<p>RETURN&nbsp;TO DHAKA IN THE EVENING</p>\r\n\r\n<p>Connecting to homebound flights <em>or</em> overnight in Dhaka</p>', 1, '2020-01-26 05:58:03', 1, '2020-01-26 21:29:41', 1),
(10, 4, 'Bangladesh Highlights', 'chittagong', '<h2><strong>Bangladesh Highlights</strong></h2>\r\n\r\n<p><br />\r\nYour trip to Bangladesh allows you to visit the most promising student venues, including Dhaka, Chittagong, and Sylhet. It will take you on an incredible journey as a specialist in higher education and (in all likelihood) as a first-time visitor to the beautiful land of Bangladesh.</p>\r\n\r\n<p>Bangladesh&rsquo;s capital, <strong>DHAKA</strong>, is not a quiet, retiring place. The city, bursting with nearly 17 million people (most of whom often seem to be stuck in the same traffic jam as you), is a gloriously noisy and chaotic place, bubbling with energy.</p>\r\n\r\n<p>Friendly <strong>SYLHET</strong> is a divisional capital with a pronounced small-town feel, its congested streets and bustling roadside markets chipping in with requisite measures of sights, sounds and smells. The town also gives off a strong underlying sense of economic prosperity.&nbsp;For the visitor, it also means the availability of excellent hotels and restaurants, easier access to creature comforts and a disproportionately large local population that speaks good English.</p>\r\n\r\n<p><strong>CHITTAGONG</strong> is Bangladesh&rsquo;s second-largest city and the country&#39;s largest port. It&rsquo;s a gritty, polluted and congested place, but as the gateway to the Chittagong Hill Tracts &ndash; one of the most beautiful and fascinating corners of the country &ndash; it&rsquo;s somewhere that many visitors pass through at some point.</p>\r\n\r\n<p>Built on the northern bank of the Padma River, <strong>RAJSHAHI</strong> is a fun university town with enough color and attractions to keep you occupied for a short visit. Most importantly, the city houses the University of Rajshahi, one of Bangladesh&rsquo;s best and most renowned universities.</p>\r\n\r\n<p><strong>COX&rsquo;S BAZAR</strong> &ndash; named for an 18th-century British East India Company captain &ndash; is a place dear to most Bangladeshis&rsquo; hearts. As everyone you meet will tell you, it&rsquo;s the longest continual natural beach on the planet (a whopping 125km), and the place where the country likes to come to relax.</p>', 1, '2020-01-26 05:58:20', 1, '2020-01-30 15:40:16', 1),
(11, 4, 'Map of Bangladesh', 'sylhet', '<p><img alt=\"Map of Bangladesh\" src=\"http://www.lonelyplanet.com/maps/asia/bangladesh/map_of_bangladesh.jpg\" /></p>', 1, '2020-01-26 05:58:38', 1, '2020-01-30 15:48:46', 1),
(12, 4, 'Accommodation', 'accommodation', '<p>EBEE2020 would like to ensure that the hotel you are staying at during and after the official program meet the highest standards in terms of sanitary conditions, personal safety, and proximity to the airport and the venue.&nbsp;All the following hotels have been home to the best part of our always satisfied international partners and clients over the past 10 years. Your comfort and safety are thereby guaranteed.</p>\r\n\r\n<p><strong>Accommodation:</strong></p>\r\n\r\n<p><strong>Century Park (Dhaka)</strong></p>\r\n\r\n<p>www.centuryparkbd.com</p>\r\n\r\n<hr />\r\n<p><strong>Well Park Residence (Chittagong)</strong></p>\r\n\r\n<p>www.wellparkbd.com</p>\r\n\r\n<hr />\r\n<p><strong>Rose View Hotel (Sylhet)</strong></p>\r\n\r\n<p>www.roseviewhotel.com</p>\r\n\r\n<hr />\r\n<p><strong>Grace Hotel 21 (Dhaka, in case of an overnight stay before homebound journey)</strong></p>\r\n\r\n<p>Located only 10 minutes from the airport.</p>\r\n\r\n<p>www.gracehotel21.com</p>\r\n\r\n<hr />\r\n<h3><strong>Where will you stay during the event?</strong></h3>\r\n\r\n<p><strong>Century Park Residence</strong> is a 4-star rated hotel that aims to bring elegance, comfort, sophistication and affordability within one common fold in order to create experiences worthwhile of being revisited. Situated in Gulshan-1, it has close proximity to restaurants, shopping malls and major business areas, making it ideal for business travelers and tourists alike.</p>\r\n\r\n<p><strong>Well Park Residence</strong> is one of the top boutique hotels in Chittagong. You will find all that you need to make the most of your stay exciting and comfortable. An ideal hotel for discerning travelers who appreciate the finer things in life, you can look forward to a host of excellent business and leisure facilities.</p>\r\n\r\n<p><strong>Rose View Hotel</strong> in Sylhet allows you to enjoy comfort and luxury. It is a place where you will find exceptional five-star facilities and world class hospitality. The Hotel features 140 fully equipped deluxe and suite rooms, an extensive array of restaurant outlets catering for international and local palates, fully equipped fitness center, sauna and steam, authentic Thai Spa, heated roof top swimming pool, the only fully stocked licensed bar in the City and a full range of meeting and event facilities ideal for business and private gatherings for up to 1000 people.</p>', 1, '2020-01-26 05:59:04', 1, '2020-01-27 23:47:02', 1),
(13, 5, 'Packages', 'packages', '<h1><strong>PRICING:&nbsp;</strong></h1>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table align=\"left\" border=\"1\" cellpadding=\"1\" cellspacing=\"1\">\r\n	<tbody>\r\n		<tr>\r\n			<td>&nbsp;Early bird registration for regular exhibitor (until 15 February 2020)&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</td>\r\n			<td>&nbsp;1900 EUR&nbsp; &nbsp; &nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;Regular Exhibitor (applications after 15 February 2020)</td>\r\n			<td>&nbsp;2020 EUR</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;Hosted Exhibitor (no exclusions apply)</td>\r\n			<td>&nbsp;Free</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;Single-city participation (except Dhaka)</td>\r\n			<td>&nbsp;700 EUR</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;Two-day participation in Dhaka only</td>\r\n			<td>&nbsp;1200 EUR</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<hr />\r\n<p><em>Fees include all taxes, additional charges, and VAT. </em></p>\r\n\r\n<p><em>Delegates must ensure that bank fees are covered by their institutions and not by EBEE.</em></p>\r\n\r\n<p><strong>Important notice:</strong></p>\r\n\r\n<p>All fees are applicable for <strong><em>one delegate only</em></strong>. Any additional delegate will be charged a total of 280 EUR for participation and enjoy the same privileges as the primary delegate of the same institution (including hotel accommodation in shared rooms, domestic air tickets, transportation, meals, etc.).<strong> </strong>Single room occupancy supplement is charged at the rate of 25 EUR per person per night.</p>\r\n\r\n<h1>What is a Hosted Exhibitor?</h1>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Hosted Exhibitors</strong> are selected based on a variety of criteria to be uploaded soon on the event website. Hosted Exhibitors attend EBEE 2020&nbsp;to gain inspiration and engage more actively in the student recruitment&nbsp;business. Holding this status means that you will enjoy all the privileges of the program in a way that&nbsp;is both cost effective and time efficient for you and your institution.&nbsp;</p>\r\n\r\n<p>All institutions planning to attend IBEE 2020 are encouraged to participate in the event as Hosted Exhibitors, in which case <em>only</em> a <strong>350 EUR non-refundable registration fee</strong> applies (note that international air tickets are also paid by EBEE).</p>\r\n\r\n<p>Apply as HOSTED EXHIBITOR by clicking here.</p>\r\n\r\n<p>Further information will be made available on <a href=\"http://www.euro-bangla-expo.org\">www.euro-bangla-expo.org</a>.</p>\r\n\r\n<h2><strong>What is INCLUDED in the participation fee?</strong></h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Quality hotel accommodation in all the cities (except on the post-event programs) for one university delegate</li>\r\n	<li>Free SIM card upon arrival with mobile minutes and 5 GB data</li>\r\n	<li>Domestic air fares (3 flights, direct routes, only on ISO certified air carriers)</li>\r\n	<li>EBEE exhibitor&rsquo;s package with a traditional scarf, calendar, notebook, pen, and advertisements</li>\r\n	<li>Gala Dinner, Farewell Dinner and all meals (drinks, breakfast, lunch, and snacks)</li>\r\n	<li>Government-approved catalogue with your university&rsquo;s details</li>\r\n	<li>Pre-booking system login with students and educational agencies (to be opened 20 days before the event)</li>\r\n	<li>Free Wi-Fi during the event</li>\r\n	<li>TV live broadcasting on 2 channels and Facebook live streaming</li>\r\n	<li>Press coverage of the event in local newspapers</li>\r\n	<li>Traditional Folklore Show and Live Music on closing date</li>\r\n</ul>\r\n\r\n<h2>&nbsp;</h2>\r\n\r\n<h2><strong>What is NOT INCLUDED in the participation fee?</strong></h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>International flight tickets (discounts are applicable if booked via the organizers)</li>\r\n	<li>Visa fee and related expenses</li>\r\n	<li>Hotel fee of second university delegate</li>\r\n	<li>Post-event trip to Cox&rsquo;s Bazar or to Rajshahi</li>\r\n	<li>Additional expenses at hotels, tips, and out-of-pocket expenditure</li>\r\n	<li>Printing of high-quality promotional materials by a trusted company (maximum 2 weeks prior to the event at an extra cost)</li>\r\n</ul>\r\n\r\n<h2>&nbsp;</h2>\r\n\r\n<h2><strong>Logistical Support (included in the fee):</strong></h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Free transport from/to the venues</li>\r\n	<li>Visa support and advice</li>\r\n	<li>Local health insurance</li>\r\n	<li>English-speaking mentors at the stand (one mentor per stand)</li>\r\n	<li>Translators in French, German and Russian are available by request</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>', 1, '2020-01-26 05:59:32', 1, '2020-01-30 15:52:44', 1),
(14, 5, 'Payment Methods', 'payment-methods', '<p><strong>Payments are accepted by bank transfer only. </strong></p>\r\n\r\n<p><strong>No payment by banking card is supported by our system.</strong></p>\r\n\r\n<p><strong>Kindly note that all bank charges must be borne by the attendee.</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><em><strong>Institutions can choose from one of the following payment options:</strong></em></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2><strong>1.&nbsp;Bank transfer to Bangladesh:</strong></h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Beneficiary&rsquo;s name: GSC GLOBAL SOLUTIONS</p>\r\n\r\n<p>Beneficiary&rsquo;s bank: MUTUAL TRUST BANK LTD.</p>\r\n\r\n<p>Branch name: Gulshan</p>\r\n\r\n<p>Address of the bank: 120 Gulshan Avenue, Dhaka 1212</p>\r\n\r\n<p>Phone: +88 02-9882473, +88 02- 8837840</p>\r\n\r\n<p>Beneficiary&rsquo;s bank account number: 0220210012087</p>\r\n\r\n<p>SWIFT/BIC code: MTBLBDDH</p>\r\n\r\n<p><em><strong>Message / remarks:</strong></em> EBEE2020 participation fee + your university&rsquo;s name</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2><strong>2. Bank transfer to Malaysia:</strong></h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Beneficiary&rsquo;s name: GSC GLOBAL SOLUTIONS</p>\r\n\r\n<p>Beneficiary&rsquo;s bank: CIMB BANK Berhad</p>\r\n\r\n<p>Branch name: Cyberjaya</p>\r\n\r\n<p>Address of the bank: Prima, 5-A, Jalan Teknokrat 5, 63000 Cyberjaya, Selangor, Malaysia</p>\r\n\r\n<p>Beneficiary&rsquo;s bank account number (IBAN): 86 0299216&nbsp;</p>\r\n\r\n<p>SWIFT/BIC code: CIBBMYKL</p>\r\n\r\n<p><em><strong>Message / remarks:</strong></em> EBEE2020 participation fee + your university&rsquo;s name</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Participation fees must be transferred to one of the above bank accounts until no later than 15 March&nbsp;2020. <em>Kindly ensure that the &ldquo;message&rdquo; or &ldquo;remark&rdquo; section of the bank transfer order contains &ldquo;EBEE2020 participation fee + your university&rsquo;s name.&rdquo;</em></strong></p>\r\n\r\n<hr />\r\n<p><em><strong>PROOF OF PAYMENT</strong></em></p>\r\n\r\n<p><strong><em>Once the payment has been made, kindly send the organizing team </em>(<a href=\"mailto:exhibitor@euro-bangla-expo.org\">exhibitor@euro-bangla-expo.org</a>) a copy of&nbsp;your&nbsp;proof of payment<em> issued by the finance office of your institution.</em></strong></p>', 1, '2020-01-26 05:59:49', 1, '2020-01-26 22:38:26', 1),
(15, 5, 'Cancellation Policy', 'terms-conditions', '<h1><strong>Cancellation policy of exhibitor&rsquo;s fee:</strong></h1>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Hosted exhibitors</strong> (following acceptance only) will be charged</p>\r\n\r\n<p>350 EUR (equivalent to the non-refundable registration fee paid upon selection) for cancellation.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>In case of cancellation, <strong>Early Bird and Regular Exhibitors</strong> will be charged a fee according to the following conditions:</p>\r\n\r\n<p>within 72 hours before the event&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; no refund</p>\r\n\r\n<p>within 14 days before the event&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 70% refund of total fees paid</p>\r\n\r\n<p>within 30 days before the event&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 90% refund of total fees paid</p>', 1, '2020-01-26 06:00:07', 1, '2020-01-26 22:30:30', 1),
(16, 5, 'Sponsoring options', 'golden-sponsor', '<p><strong>SPONSORSHIP&shy;</strong></p>\r\n\r\n<p>Golden Sponsor&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 5190 EUR&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <em>up to</em> <em>one institution only</em></p>\r\n\r\n<p>Silver Sponsor&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3090 EUR&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <em>up to three institutions</em></p>\r\n\r\n<p>Regular Sponsor&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2690 EUR&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <em>up to eight institutions</em></p>\r\n\r\n<h3><strong>Sponsorship options and privileges</strong></h3>\r\n\r\n<p>Enjoy one of our sponsorship packages (Golden, Silver, or Regular) to ensure that your institution receives the highest traffic possible during the fair, alongside recognition and visibility depending on the budget you wish to allocate for the event. The following table seeks to provide you with further information on what is included in each <strong><em>extremely innovative sponsorship package, which will help your institution receive extra exposure:</em></strong></p>\r\n\r\n<table cellspacing=\"0\" style=\"border-collapse:collapse; width:614px\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black; vertical-align:top; width:151px\">\r\n			<h3><strong>Privilege types</strong></h3>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:1px solid black; vertical-align:top; width:161px\">\r\n			<h3><strong>Golden</strong></h3>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:1px solid black; vertical-align:top; width:151px\">\r\n			<h3><strong>Silver</strong></h3>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:1px solid black; vertical-align:top; width:152px\">\r\n			<h3><strong>Regular</strong></h3>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:151px\">\r\n			<p><strong>SMS marketing campaign to reach out to interested students</strong></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:161px\">\r\n			<p>Yes. Students receive up to 5 text messages / WhatsApp messages before and after the event of the sponsor&rsquo;s programs</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:151px\">\r\n			<p>N/A</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:152px\">\r\n			<p>N/A</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:151px\">\r\n			<p><strong>Cycling show</strong></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:161px\">\r\n			<p>100 cyclists wearing the logo (printed on T-shirts) of the Golden Sponsor cycle near the campuses of the venues (in three cities)</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:151px\">\r\n			<p>N/A</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:152px\">\r\n			<p>N/A</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:151px\">\r\n			<p><strong>Leaflet and flyer distribution in or around campuses of the venues at least 10 days prior to the event</strong></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:161px\">\r\n			<p>Yes, in all three cities.</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:151px\">\r\n			<p>Yes, in one city only.</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:152px\">\r\n			<p>N/A</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:151px\">\r\n			<p><strong>Designated table with special guests and guests of honor on Gala Dinner and Farewell Dinner</strong></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:161px\">\r\n			<p>Yes, for all delegates.</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:151px\">\r\n			<p>Yes, for one delegate.</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:152px\">\r\n			<p>N/A</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:151px\">\r\n			<p><strong>Priority allocation of exhibition space</strong></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:161px\">\r\n			<p>High-traffic area and maximum visibility</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:151px\">\r\n			<p>High-traffic area with good visibility</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:152px\">\r\n			<p>High-traffic area</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:151px\">\r\n			<p><strong>Fair program catalogue</strong></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:161px\">\r\n			<p>Full-page color advertisement</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:151px\">\r\n			<p>&frac12; page color advertisement</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:152px\">\r\n			<p>Small logo advertisement</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:151px\">\r\n			<p><strong>Marketing materials included in the conference package</strong></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:161px\">\r\n			<p>Yes &ndash; unlimited</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:151px\">\r\n			<p>Yes &ndash; limited to one folder and a small booklet</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:152px\">\r\n			<p>Yes &ndash; limited to a two-page description of the institution</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:151px\">\r\n			<p><strong>Brand exposure throughout fair literature including program, exhibit guide and on-site signage</strong></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:161px\">\r\n			<p>Large logo</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:151px\">\r\n			<p>Medium logo</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:152px\">\r\n			<p>Small logo</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:151px\">\r\n			<p><strong>Brand exposure on website and digital signage</strong></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:161px\">\r\n			<p>Large logo</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:151px\">\r\n			<p>Medium logo</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:152px\">\r\n			<p>Small logo</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:151px\">\r\n			<p><strong>Advertisement in pre-conference email newsletters</strong></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:161px\">\r\n			<p>Yes &ndash; in all communiqu&eacute;s</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:151px\">\r\n			<p>Yes &ndash; in three communiqu&eacute;s,</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:152px\">\r\n			<p>Yes &ndash; in one communiqu&eacute;</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:151px\">\r\n			<p><strong>Special mention on the Plenary Session and Closing Session</strong></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:161px\">\r\n			<p>Yes</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:151px\">\r\n			<p>Yes</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:152px\">\r\n			<p>Yes</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:151px\">\r\n			<p><strong>Welcome Speech and Farewell Speech </strong></p>\r\n\r\n			<p><strong>(10 minutes each)</strong></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:161px\">\r\n			<p>Yes</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:151px\">\r\n			<p>No</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:152px\">\r\n			<p>No</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:151px\">\r\n			<p><strong>Media / press coverage</strong></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:161px\">\r\n			<p>Television channels, press, social media</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:151px\">\r\n			<p>Press (3 articles) and social media</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:152px\">\r\n			<p>Press (1 article) and social media</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>Our Goldon Sponsors will enjoy additional benefits, including:</strong></h3>\r\n\r\n<p>1. Opportunity to hand out<strong> a small giveaway</strong> to more than 3000 international participants and organize a prize draw.</p>\r\n\r\n<p>2. Opportunity to deliver <strong>a short welcome / farewell speech</strong>.</p>\r\n\r\n<p>3. Sponsor one of our <strong>promotional gifts and place your brand in the hands of 15.000+ engaged participants</strong>: lanyards, coffee cups, conference T-shirt, jute bags, and folders.</p>\r\n\r\n<p>4. <strong>Showcase your brand</strong>&nbsp;<strong>digitally </strong>on some of the most vital expo services: events app, social media wall, charging station.</p>\r\n\r\n<p>5.<strong> Invitation to the Organizer&#39;s VIP reception</strong> to meet university executives, government representatives, and the guest of honor invited to attend the event.</p>\r\n\r\n<p><strong>To find out more about creating your ideal sponsorship package, please contact us via e-mail at <a href=\"mailto:sponsorship@euro-bangla-expo.com\">sponsorship@euro-bangla-expo.com</a>.</strong></p>', 1, '2020-01-26 06:00:24', 1, '2020-01-27 23:38:41', 1),
(17, 5, 'Silver Sponsor', 'silver-sponsor', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', 0, '2020-01-26 06:00:40', 1, '2020-01-27 22:55:21', 1),
(18, 5, 'Regular Sponsor', 'regular-sponsor', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', 0, '2020-01-26 06:01:00', 1, '2020-01-27 22:44:58', 1);
INSERT INTO `config_sub_menus` (`id`, `menu_id`, `title`, `slug`, `content`, `status`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(19, 8, 'Post-Event Tours in Bangladesh', 'post-event-tours-in-bangladesh', '<h1><strong>OPTIONAL POST-EXPO TOURS</strong></h1>\r\n\r\n<h2><strong><em>Pricing:</em> TBC individually in the case of each traverler</strong></h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2><strong>Option 1</strong></h2>\r\n\r\n<p><em>17 April (Friday)</em></p>\r\n\r\n<p><strong>1N/2D TRIP TO COX&rsquo;S BAZAR</strong></p>\r\n\r\n<p>visiting the refugee camp and meet the Rohingyas on request</p>\r\n\r\n<p>bathing in the Bay of Bengal &ndash; the world&rsquo;s longest natural beach</p>\r\n\r\n<p>buying handicrafts to support local communities</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2><strong>Option 2</strong></h2>\r\n\r\n<p><em>17 April (Friday)&nbsp; &nbsp; &nbsp;</em> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>\r\n\r\n<p><strong>1N/2D TRIP TO</strong> <strong>RAJSHAHI&nbsp;</strong></p>\r\n\r\n<p>a visit to clean and green Rajshahi, the city of mango and lichee</p>\r\n\r\n<p>visiting the historical University of Rajshahi</p>\r\n\r\n<p>buying silk products from the region&rsquo;s most famous factories</p>', 1, '2020-01-26 06:01:31', 1, '2020-01-30 16:05:35', 1),
(20, 8, 'Pre-travel Arrangements', 'pre-travel-arrangements', '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>', 1, '2020-01-26 06:01:58', 1, NULL, NULL),
(21, 8, 'Visa Support', 'visa-support', '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>', 1, '2020-01-26 06:02:10', 1, NULL, NULL),
(22, 8, 'Logistics', 'logistics', '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>', 1, '2020-01-26 06:02:23', 1, NULL, NULL),
(23, 8, 'Safety in Bangladesh', 'security', NULL, 1, '2020-01-26 06:02:51', 1, '2020-01-26 14:45:33', 1),
(24, 8, 'Optional tours', 'optional-tours', '<p>xxx</p>', 1, '2020-01-26 14:44:45', 1, NULL, NULL),
(25, 4, 'Event venues', 'event-venues', '<p>Dhaka, etc.</p>', 1, '2020-01-26 14:46:32', 1, NULL, NULL),
(26, 2, 'About the host', 'about-the-host', NULL, 0, '2020-01-26 20:57:13', 1, '2020-01-26 22:39:15', 1),
(27, 13, 'Contact us by e-mail', 'address', '<p><strong>General information about EBEE 2020: </strong><a href=\"mailto:ebee2020@euro-bangla-expo.org\">ebee2020@euro-bangla-expo.org</a></p>\r\n\r\n<p><strong>Exhibitors (institutions, diplomatic missions, companies):</strong> <a href=\"mailto:ebee2020@euro-bangla-expo.org\">exhibitor@euro-bangla-expo.org</a></p>\r\n\r\n<p><strong>Hosted Exhibitors:</strong> <a href=\"mailto:hostedexhibitor@euro-bangla-expo.org\">hostedexhibitor@euro-bangla-expo.org</a></p>\r\n\r\n<p><strong>Financial Unit (payment of fees, refunds):</strong> <a href=\"mailto:finance@euro-bangla-expo.org\">finance@euro-bangla-expo.org</a></p>\r\n\r\n<p>&nbsp;</p>', 1, '2020-02-02 11:23:46', 1, '2020-02-03 10:52:36', 1),
(28, 13, 'Contact us by phone', 'contact-us-by-phone', '<h2><strong>Phone numbers:</strong></h2>\r\n\r\n<p><em>Exhibitors and future partners are encouraged to reach out to us 24/7 by calling one of the round-the-clocks numbers below. We are always pleased to assist you.</em></p>\r\n\r\n<p><strong>Whatsapp: +91 85 27 20 83 56 (Call us 24/7)</strong></p>\r\n\r\n<p><strong>In Bangladesh:&nbsp;+880 1 99 33 33 601&nbsp; (Call us 24/7)</strong></p>\r\n\r\n<p><strong>In Hungary: +36 1 550 7326 (limited to office hours, GMT+1)</strong></p>\r\n\r\n<p><strong>In Malaysia: +60 13 32 33 593 (limited to office hours (GMT+6)</strong></p>\r\n\r\n<hr />\r\n<h2><strong>Postal addresses</strong></h2>\r\n\r\n<h3><strong>GSC Global Solutions (organizer of EBEE 2020)</strong></h3>\r\n\r\n<h3><br />\r\n<em><strong>HEAD OFFICE:</strong></em></h3>\r\n\r\n<p><strong>A-10-11, Paragon, Pan&#39;gaea, Persiaran Bestari, Cyber 11, 63000, Cyberjaya Selangor, Malaysia</strong></p>\r\n\r\n<h3><strong><em>BANGLADESH OFFICE:&nbsp;</em> </strong></h3>\r\n\r\n<p><strong>House 34, Road 2, Nikunjo 2, 2nd floor, Khilkhet, Dhaka, Bangladesh&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</strong></p>\r\n\r\n<h3><em><strong>UK OFFICE:</strong></em></h3>\r\n\r\n<p><strong>67 Maryland Square, London E151HF, United Kingdom</strong></p>\r\n\r\n<p>&nbsp;</p>', 1, '2020-02-03 11:05:48', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country_name` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `country_name`, `status`) VALUES
(1, 'Afghanistan', 1),
(2, 'Albania', 1),
(3, 'Algeria', 1),
(4, 'Andorra', 1),
(5, 'Angola', 1),
(6, 'Antigua and Barbuda', 1),
(7, 'Argentina', 1),
(8, 'Armenia', 1),
(9, 'Australia', 1),
(10, 'Austria', 1),
(11, 'Azerbaijan', 1),
(12, 'Bahamas', 1),
(13, 'Bahrain', 1),
(14, 'Bangladesh', 1),
(15, 'Barbados', 1),
(16, 'Belarus', 1),
(17, 'Belgium', 1),
(18, 'Belize', 1),
(19, 'Benin', 1),
(20, 'Bhutan', 1),
(21, 'Bolivia', 1),
(22, 'Bosnia and Herzegovina', 1),
(23, 'Botswana', 1),
(24, 'Brazil', 1),
(25, 'Brunei', 1),
(26, 'Bulgaria', 1),
(27, 'Burkina Faso', 1),
(28, 'Burundi', 1),
(29, 'Cabo Verde', 1),
(30, 'Cambodia', 1),
(31, 'Cameroon', 1),
(32, 'Canada', 1),
(33, 'Central African Republic (CAR)', 1),
(34, 'Chad', 1),
(35, 'Chile', 1),
(36, 'China', 1),
(37, 'Colombia', 1),
(38, 'Comoros', 1),
(39, 'Congo, Democratic Republic of the', 1),
(40, 'Congo, Republic of the', 1),
(41, 'Costa Rica', 1),
(42, 'Cote d\'Ivoire', 1),
(43, 'Croatia', 1),
(44, 'Cuba', 1),
(45, 'Cyprus', 1),
(46, 'Czechia', 1),
(47, 'Denmark', 1),
(48, 'Djibouti', 1),
(49, 'Dominica', 1),
(50, 'Dominican Republic', 1),
(51, 'Ecuador', 1),
(52, 'Egypt', 1),
(53, 'El Salvador', 1),
(54, 'Equatorial Guinea', 1),
(55, 'Eritrea', 1),
(56, 'Estonia', 1),
(57, 'Eswatini (formerly Swaziland)', 1),
(58, 'Ethiopia', 1),
(59, 'Fiji', 1),
(60, 'Finland', 1),
(61, 'France', 1),
(62, 'Gabon', 1),
(63, 'Gambia', 1),
(64, 'Georgia', 1),
(65, 'Germany', 1),
(66, 'Ghana', 1),
(67, 'Greece', 1),
(68, 'Grenada', 1),
(69, 'Guatemala', 1),
(70, 'Guinea', 1),
(71, 'Guinea-Bissau', 1),
(72, 'Guyana', 1),
(73, 'Haiti', 1),
(74, 'Honduras', 1),
(75, 'Hungary', 1),
(76, 'Iceland', 1),
(77, 'India', 1),
(78, 'Indonesia', 1),
(79, 'Iran', 1),
(80, 'Iraq', 1),
(81, 'Ireland', 1),
(82, 'Israel', 1),
(83, 'Italy', 1),
(84, 'Jamaica', 1),
(85, 'Japan', 1),
(86, 'Jordan', 1),
(87, 'Kazakhstan', 1),
(88, 'Kenya', 1),
(89, 'Kiribati', 1),
(90, 'Kosovo', 1),
(91, 'Kuwait', 1),
(92, 'Kyrgyzstan', 1),
(93, 'Laos', 1),
(94, 'Latvia', 1),
(95, 'Lebanon', 1),
(96, 'Lesotho', 1),
(97, 'Liberia', 1),
(98, 'Libya', 1),
(99, 'Liechtenstein', 1),
(100, 'Lithuania', 1),
(101, 'Luxembourg', 1),
(102, 'Madagascar', 1),
(103, 'Malawi', 1),
(104, 'Malaysia', 1),
(105, 'Maldives', 1),
(106, 'Mali', 1),
(107, 'Malta', 1),
(108, 'Marshall Islands', 1),
(109, 'Mauritania', 1),
(110, 'Mauritius', 1),
(111, 'Mexico', 1),
(112, 'Micronesia', 1),
(113, 'Moldova', 1),
(114, 'Monaco', 1),
(115, 'Mongolia', 1),
(116, 'Montenegro', 1),
(117, 'Morocco', 1),
(118, 'Mozambique', 1),
(119, 'Myanmar', 1),
(120, 'Namibia', 1),
(121, 'Nauru', 1),
(122, 'Nepal', 1),
(123, 'Netherlands', 1),
(124, 'New Zealand', 1),
(125, 'Nicaragua', 1),
(126, 'Niger', 1),
(127, 'Nigeria', 1),
(128, 'North Korea', 1),
(129, 'North Macedonia', 1),
(130, 'Norway', 1),
(131, 'Oman', 1),
(132, 'Pakistan', 1),
(133, 'Palau', 1),
(134, 'Palestine', 1),
(135, 'Panama', 1),
(136, 'Papua New Guinea', 1),
(137, 'Paraguay', 1),
(138, 'Peru', 1),
(139, 'Philippines', 1),
(140, 'Poland', 1),
(141, 'Portugal', 1),
(142, 'Qatar', 1),
(143, 'Romania', 1),
(144, 'Russia', 1),
(145, 'Rwanda', 1),
(146, 'Saint Kitts and Nevis', 1),
(147, 'Saint Lucia', 1),
(148, 'Saint Vincent and the Grenadines', 1),
(149, 'Samoa', 1),
(150, 'San Marino', 1),
(151, 'Sao Tome and Principe', 1),
(152, 'Saudi Arabia', 1),
(153, 'Senegal', 1),
(154, 'Serbia', 1),
(155, 'Seychelles', 1),
(156, 'Sierra Leone', 1),
(157, 'Singapore', 1),
(158, 'Slovakia', 1),
(159, 'Slovenia', 1),
(160, 'Solomon Islands', 1),
(161, 'Somalia', 1),
(162, 'South Africa', 1),
(163, 'South Korea', 1),
(164, 'South Sudan', 1),
(165, 'Spain', 1),
(166, 'Sri Lanka', 1),
(167, 'Sudan', 1),
(168, 'Suriname', 1),
(169, 'Sweden', 1),
(170, 'Switzerland', 1),
(171, 'Syria', 1),
(172, 'Taiwan', 1),
(173, 'Tajikistan', 1),
(174, 'Tanzania', 1),
(175, 'Thailand', 1),
(176, 'Timor-Leste', 1),
(177, 'Togo', 1),
(178, 'Tonga', 1),
(179, 'Trinidad and Tobago', 1),
(180, 'Tunisia', 1),
(181, 'Turkey', 1),
(182, 'Turkmenistan', 1),
(183, 'Tuvalu', 1),
(184, 'Uganda', 1),
(185, 'Ukraine', 1),
(186, 'United Arab Emirates (UAE)', 1),
(187, 'United Kingdom (UK)', 1),
(188, 'United States of America (USA)', 1),
(189, 'Uruguay', 1),
(190, 'Uzbekistan', 1),
(191, 'Vanuatu', 1),
(192, 'Vatican City (Holy See)', 1),
(193, 'Venezuela', 1),
(194, 'Vietnam', 1),
(195, 'Yemen', 1),
(196, 'Zambia', 1),
(197, 'Zimbabwe', 1);

-- --------------------------------------------------------

--
-- Table structure for table `feedback_messages`
--

CREATE TABLE `feedback_messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=unread,1=read',
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1=active, 0=in-active',
  `created_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feedback_messages`
--

INSERT INTO `feedback_messages` (`id`, `name`, `email`, `subject`, `message`, `read_status`, `status`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'Mohammad Shoaib', 'info@gscglobalsolutions.com', 'hi', 'Hi', 0, 1, '2020-01-26 14:28:06', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `institutions`
--

CREATE TABLE `institutions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `institute_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `institute_country` int(10) UNSIGNED NOT NULL,
  `institute_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `institute_website` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_person_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position_contact_person` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alternative_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sponsorship` tinyint(4) DEFAULT 0,
  `sponsorship_package` varchar(125) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meeting` tinyint(4) NOT NULL DEFAULT 0,
  `meeting_time` datetime DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1=active, 0=in-active',
  `created_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `institutions`
--

INSERT INTO `institutions` (`id`, `institute_name`, `institute_country`, `institute_address`, `institute_website`, `contact_person_name`, `position_contact_person`, `phone_number`, `email`, `alternative_email`, `sponsorship`, `sponsorship_package`, `meeting`, `meeting_time`, `status`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'Mohammad Shoaib', 8, 'CYBER JAYA', 'www.dhsaviationbd.com', 'fu', NULL, '004185', 'shoaib@dhsaviationbd.com', 'info@dhsaviationbd.com', 1, 'Choose...', 1, NULL, 1, '2020-01-26 13:44:47', NULL, NULL, NULL),
(2, 'Cumilla', 3, 'Savar, Dhaka', '192.168.1.221', 'dghfghfdg', 'asd', '01824847785', 'demo@iglweb.com', 'hiozdfbnjkcvbjkcv@ndfjkjfdg', 1, '1', 1, NULL, 1, '2020-02-15 00:59:09', NULL, NULL, NULL),
(3, 'Cumilla', 3, 'Savar, Dhaka', 'http://iglweb.com', 'dghfghfdg', NULL, '01824847785', 'root@iglweb.com', 'hiozdfbnjkcvbjkcv@ndfjkjfdg', NULL, 'Choose...', 1, NULL, 1, '2020-02-15 01:06:26', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1=active, 0=in-active',
  `created_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `title`, `image`, `status`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'abcd', 'assets/uploads/images/upload_15808055061.jpg', 1, '2020-02-04 02:38:26', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_09_29_165128_create_countries_table', 1),
(5, '2020_01_25_060252_create_config_menus_table', 2),
(6, '2020_01_25_060311_create_config_sub_menus_table', 2),
(7, '2020_01_25_101042_create_media_table', 3),
(8, '2020_01_25_055952_create_students_table', 4),
(9, '2020_01_25_060157_create_institutions_table', 4),
(10, '2020_01_26_112251_create_feedback_messages_table', 5),
(11, '2020_02_04_080127_create_pdf_files_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `pdf_files`
--

CREATE TABLE `pdf_files` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pdf` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1=active, 0=in-active',
  `created_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` date NOT NULL,
  `city_of_residence` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `institute` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `whatsapp_number` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_address` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `academic_interest` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `preferred_course` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cv` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agreement_promotional_purpose` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1=active, 0=in-active',
  `created_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `full_name`, `date_of_birth`, `city_of_residence`, `institute`, `phone_number`, `whatsapp_number`, `email_address`, `academic_interest`, `preferred_course`, `cv`, `agreement_promotional_purpose`, `status`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'jyfurip@mailinator.com', '1972-12-22', 'puwyja@mailinator.com', 'vohebobyni@mailinator.net', 'hequh@mailinator.net', 'lymy@mailinator.net', 'zolora@mailinator.com', '1', 'Doctoral/PhD', 'assets/uploads/cv/upload_1581749826.pdf', 1, 1, '2020-02-15 00:57:06', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_role` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1=active, 0=in-active',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `user_role`, `status`, `remember_token`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'Admin1', 'admin@iglweb.com', '$2y$10$KOMsHYVeaWfTd4t6qq4rjOY9JWZeJZ9mNVe10tF.XV7GWKz5H4mpS', 'admin', 1, NULL, NULL, NULL, '2020-01-25 05:09:09', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `id` int(10) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `represented_organization` varchar(100) DEFAULT NULL,
  `sector` varchar(50) NOT NULL,
  `email` varchar(70) DEFAULT NULL,
  `phone_number` varchar(15) NOT NULL,
  `whatsapp_number` varchar(20) DEFAULT NULL,
  `agreement` int(4) NOT NULL DEFAULT 0,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `area_category`
--
ALTER TABLE `area_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `area_of_studies`
--
ALTER TABLE `area_of_studies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `config_menus`
--
ALTER TABLE `config_menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `config_sub_menus`
--
ALTER TABLE `config_sub_menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback_messages`
--
ALTER TABLE `feedback_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `institutions`
--
ALTER TABLE `institutions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pdf_files`
--
ALTER TABLE `pdf_files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `area_category`
--
ALTER TABLE `area_category`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `area_of_studies`
--
ALTER TABLE `area_of_studies`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=395;

--
-- AUTO_INCREMENT for table `config_menus`
--
ALTER TABLE `config_menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `config_sub_menus`
--
ALTER TABLE `config_sub_menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=198;

--
-- AUTO_INCREMENT for table `feedback_messages`
--
ALTER TABLE `feedback_messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `institutions`
--
ALTER TABLE `institutions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pdf_files`
--
ALTER TABLE `pdf_files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `visitor`
--
ALTER TABLE `visitor`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
