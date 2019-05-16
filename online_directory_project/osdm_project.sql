-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 02, 2016 at 03:26 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `osdm_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `category_table`
--

CREATE TABLE IF NOT EXISTS `category_table` (
  `cat_id` int(6) NOT NULL AUTO_INCREMENT,
  `category` varchar(64) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `category_table`
--

INSERT INTO `category_table` (`cat_id`, `category`) VALUES
(1, 'Interior'),
(2, 'Exterior'),
(3, 'Corporate'),
(4, 'Home'),
(5, 'Office'),
(6, 'Motorised Vehicle');

-- --------------------------------------------------------

--
-- Table structure for table `combination_table`
--

CREATE TABLE IF NOT EXISTS `combination_table` (
  `combination_id` int(6) NOT NULL AUTO_INCREMENT,
  `service_id` int(6) NOT NULL,
  `cat_id` int(6) NOT NULL,
  `company_id` int(6) NOT NULL,
  PRIMARY KEY (`combination_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=118 ;

--
-- Dumping data for table `combination_table`
--

INSERT INTO `combination_table` (`combination_id`, `service_id`, `cat_id`, `company_id`) VALUES
(1, 1, 3, 10),
(2, 1, 1, 10),
(3, 3, 3, 10),
(4, 3, 2, 10),
(5, 3, 1, 10),
(6, 6, 3, 10),
(7, 6, 4, 10),
(8, 6, 5, 10),
(9, 7, 4, 11),
(10, 7, 1, 11),
(11, 7, 5, 11),
(12, 9, 3, 11),
(13, 9, 4, 11),
(14, 9, 5, 11),
(15, 1, 3, 12),
(16, 1, 2, 12),
(17, 1, 4, 12),
(18, 4, 1, 12),
(19, 2, 3, 12),
(20, 8, 4, 12),
(21, 6, 3, 14),
(22, 6, 2, 14),
(23, 6, 4, 14),
(24, 6, 1, 14),
(25, 6, 5, 14),
(26, 8, 3, 14),
(27, 8, 2, 14),
(28, 8, 4, 14),
(29, 8, 1, 14),
(30, 8, 5, 14),
(31, 1, 3, 15),
(32, 1, 4, 15),
(33, 1, 6, 15),
(34, 4, 2, 15),
(35, 4, 1, 15),
(36, 4, 5, 15),
(37, 7, 2, 15),
(38, 7, 1, 15),
(39, 1, 3, 16),
(40, 1, 1, 16),
(41, 4, 2, 16),
(42, 4, 1, 16),
(43, 1, 3, 17),
(44, 1, 1, 17),
(45, 4, 2, 17),
(46, 4, 1, 17),
(47, 8, 2, 17),
(48, 8, 4, 17),
(49, 8, 1, 17),
(50, 1, 2, 18),
(51, 1, 4, 18),
(52, 3, 5, 18),
(53, 8, 1, 18),
(54, 8, 5, 18),
(55, 5, 1, 18),
(56, 5, 6, 18),
(57, 1, 2, 19),
(58, 1, 4, 19),
(59, 4, 2, 19),
(60, 4, 1, 19),
(61, 2, 3, 19),
(62, 2, 4, 19),
(63, 2, 1, 19),
(64, 9, 3, 19),
(65, 9, 4, 19),
(66, 1, 1, 20),
(67, 1, 6, 20),
(68, 1, 5, 20),
(69, 7, 3, 20),
(70, 7, 2, 20),
(71, 7, 4, 20),
(72, 7, 1, 20),
(73, 7, 6, 20),
(74, 7, 5, 20),
(75, 8, 1, 20),
(76, 8, 6, 20),
(77, 9, 1, 20),
(78, 9, 6, 20),
(79, 5, 2, 20),
(80, 5, 4, 20),
(81, 5, 1, 20),
(82, 3, 3, 21),
(83, 3, 4, 21),
(84, 3, 6, 21),
(85, 6, 1, 21),
(86, 7, 2, 21),
(87, 7, 4, 21),
(88, 8, 2, 21),
(89, 8, 4, 21),
(90, 8, 1, 21),
(91, 9, 2, 21),
(92, 9, 1, 21),
(93, 9, 5, 21),
(94, 5, 2, 21),
(95, 5, 1, 21),
(96, 2, 1, 21),
(100, 2, 1, 23),
(101, 1, 1, 22),
(102, 6, 3, 22),
(103, 6, 2, 22),
(104, 6, 1, 22),
(105, 5, 3, 22),
(106, 3, 3, 23),
(107, 3, 2, 23),
(108, 3, 4, 23),
(109, 3, 1, 23),
(110, 3, 6, 23),
(111, 3, 5, 23),
(112, 4, 3, 23),
(113, 4, 2, 23),
(114, 4, 4, 23),
(115, 4, 1, 23),
(116, 4, 6, 23),
(117, 4, 5, 23);

-- --------------------------------------------------------

--
-- Table structure for table `company_table`
--

CREATE TABLE IF NOT EXISTS `company_table` (
  `company_id` int(6) NOT NULL AUTO_INCREMENT,
  `login_id` int(6) NOT NULL,
  `company_name` varchar(64) NOT NULL,
  `brn` int(9) NOT NULL,
  `main_town` varchar(64) NOT NULL,
  `address` varchar(255) NOT NULL,
  `zip_code` int(5) NOT NULL,
  `no_of_employees` int(4) NOT NULL,
  `first_name` varchar(64) NOT NULL,
  `last_name` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `tel_mobile` int(15) NOT NULL,
  `tel_other` int(15) NOT NULL,
  `fax` int(15) NOT NULL,
  `website` varchar(64) NOT NULL,
  `company_rating` int(1) NOT NULL,
  PRIMARY KEY (`company_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `company_table`
--

INSERT INTO `company_table` (`company_id`, `login_id`, `company_name`, `brn`, `main_town`, `address`, `zip_code`, `no_of_employees`, `first_name`, `last_name`, `email`, `tel_mobile`, `tel_other`, `fax`, `website`, `company_rating`) VALUES
(3, 0, 'State Bank Of Mauritius', 123456, 'PORT LOUIS', '1, Queen Elizabeth II Avenue', 1234567, 123, 'Rony', 'Maree', 'RonyMaree@sbmnet.net', 2021485, 2021485, 9876543, 'www.company1.com', 0),
(4, 0, 'Company2', 987654, 'Bon Accueil', 'Address2', 56780, 60, 'Owner2', 'Lastname', 'owner2@company2.com', 57654323, 6789042, 4567892, 'www.company2.com', 0),
(5, 0, 'company555', 876560, 'Trois Boutiques', 'Address 555', 45675, 9, 'Rony', 'Maree', 'company555@gmail.com', 4567899, 5678902, 8764457, 'www.company555.com', 0),
(10, 4, 'Mauritius Commercial Bank', 123457, 'PORT LOUIS', 'Queen Elizabeth II Avenue', 87652, 1000, 'Mauritius Commercial', 'Bank', 'mcb@mcb.com', 5678239, 54353453, 6823903, 'www.mcb.com', 0),
(11, 6, 'j.c.p laboratory', 123456, 'PORT LOUIS', '1234', 11131, 20000, 'Cedric', 'Poottaren', 'cedricpoottaren95@hotmail.com', 123456, 4567897, 579755, 'jp.org', 0),
(12, 9, 'CompanyTest Ltd', 567990, 'Triolet', 'dfhjbv', 45698, 10, 'Ownertest', 'testOwner', 'ownertest@companytestltd.com', 56789356, 6708546, 2579076, 'www.companytest.com', 0),
(14, 14, 'Gas O Light Ltd', 123456, 'Curepipe', '66, Royal Road', 74321, 9, 'Rajen', 'Maree', 'gasolight@hotmail.com', 2143647, 9483647, 0, 'www.gasolight.com', 0),
(15, 15, 'Apple Ltd', 123459, 'Bon Accueil', 'Royal Road', 45378, 100, 'Sfsgsf', 'dfgdfgdfb', 'sdfgsd@apple.com', 53453423, 2354422, 6775474, 'www.apple.com', 0),
(17, 16, 'Company1', 12345, 'Eau Coulee', 'ewfewfwq', 0, 6, 'David', 'Guetta', '1234rtyu@gmail.com', 5678932, 6785678, 9876756, 'www.ghj.com', 0),
(18, 20, 'Company1', 23567, 'Bon Accueil', 'hwbdjwfw', 3424524, 1, 'Name1', 'Surname1', 'company1@company1.com', 3534523, 2343253, 2425234, 'www.company1.com', 0),
(19, 21, 'Company3', 345678, 'Bel Ombre', 'dfsdgs', 3454, 10, 'Mr. Company3', 'surname3', 'comaoany3@mail.com', 3456454, 7483647, 3463635, 'test.com', 0),
(20, 22, 'Company4', 98765, 'Bambous', 'sdafasf', 0, 14, 'cvsdv', 'sdfsdf', 'sfddf@gmail.com', 0, 0, 4535435, 'companies.com', 0),
(21, 23, 'Comapny 5', 345678000, 'Poste de Flacq', 'Royal Road', 4564, 11, 'Mr. Company5', 'Surname5', 'comapany5@email.com', 4567453, 6784321, 5678432, 'www.company5.com', 0),
(22, 24, 'J.C.P Laboratory', 1234567890, 'Pointe aux Sables', 'F02, NHDC Cite Les coquillages La Tour Koenig', 11131, 1, 'Cedric', 'Poottaren', 'cedric@jcplaboratory.org', 57043814, 0, 0, 'https://jcplaboratory.org', 0),
(23, 25, 'Company 7', 45678, 'Bambous', 'sdfgrsefdvx', 3456465, 1, 'aefdsdfs', 'asdsfdbg', 'sdfbdgb', 23456, 3456, 43546, 'sffngbfgsvx', 0);

-- --------------------------------------------------------

--
-- Table structure for table `customer_table`
--

CREATE TABLE IF NOT EXISTS `customer_table` (
  `customer_id` int(6) NOT NULL AUTO_INCREMENT,
  `login_id` int(6) NOT NULL,
  `first_name` varchar(64) NOT NULL,
  `last_name` varchar(64) NOT NULL,
  `dob` date NOT NULL,
  `tel_mob` int(15) NOT NULL,
  `email` varchar(64) NOT NULL,
  `user_rating` int(1) NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `customer_table`
--

INSERT INTO `customer_table` (`customer_id`, `login_id`, `first_name`, `last_name`, `dob`, `tel_mob`, `email`, `user_rating`) VALUES
(1, 0, 'Rony', 'Maree', '1992-02-02', 6968396, 'rony_92_@hotmail.com', 0),
(2, 1, 'Yashveen', 'Yash', '1990-12-12', 56789345, 'yash@yopmail.com', 0),
(3, 7, 'username', 'username2', '2012-05-10', 23456787, 'dgfcgfchk@gmail.com', 0),
(4, 8, 'Rony', 'Maree', '1994-02-11', 54567652, 'ronymaree@icloud.com', 0),
(5, 13, 'Rony', 'Maree', '1992-04-17', 54966333, 'ronymaree@icloud.com', 0),
(6, 26, 'Admin', 'Admin', '2015-08-01', 0, 'admin@mauritiusonlinedirectory.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `login_table`
--

CREATE TABLE IF NOT EXISTS `login_table` (
  `login_id` int(6) NOT NULL AUTO_INCREMENT,
  `username` varchar(64) NOT NULL,
  `password` text NOT NULL,
  `access_level` int(1) NOT NULL,
  PRIMARY KEY (`login_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `login_table`
--

INSERT INTO `login_table` (`login_id`, `username`, `password`, `access_level`) VALUES
(1, 'yash', 'bad1be880d26e8b66798c9d94fe8bbea769c81e1c4a8b5915c707b827ade707050f79cf2d6cb31b715fa4d9e9d70fefe25fc4d432b54d8520ed507e3df3bad67', 3),
(2, 'company555', '07a282ad5080f27ed95fd42fdfa2ff89c4ea71ecd78c2507875df33eec80b3e7799c165ad592a6e9b98f08eea901814399c2ec806eaa12d0e36f60038dbd70cf', 2),
(3, 'company444', '5eb24b816dec46b5d87ef5621b8c7d2d6f6c42a222313a32085d4b85d2160e31cafe811cb1ed670229b0c91b5d22f27a2ed84b94a097f61ab4e536057378ff1c', 2),
(4, 'MCB', 'f1674fb7f70ac3e645e7f502b8c5dda1ae86683f98dd0f483037d80fafce9c7800e4e998a13285f9e53e5de3dc560df8084ac4c8477f51159a3446d83196908f', 2),
(5, 'Robert Lemaire', 'a1af8c778af46ff8584b2c3910d512fc11932a56b86cfae1a5a1a09f0b38d9097d9274329c042fb2e7e9a47b3a0dc4de477df39dad73633b849506ec81c08f96', 2),
(6, 'cedroid09', 'ba3253876aed6bc22d4a6ff53d8406c6ad864195ed144ab5c87621b6c233b548baeae6956df346ec8c17f5ea10f35ee3cbc514797ed7ddd3145464e2a0bab413', 2),
(7, 'user1', '9ec62c20118ff506dac139ec30a521d12b9883e55da92b7d9adeefe09ed4e0bd152e2a099339871424263784f8103391f83b781c432f45eccb03e18e28060d2f', 3),
(8, 'rony', '58468cfe4566e74fda24b06b1c3ae1e0e8d5fca966ef33416c7ea989842d1012216c244dbefb1ee4b8044c858b2718efb3432ef15153a64e84050b5c05af9f5a', 3),
(9, 'test', 'b16ed7d24b3ecbd4164dcdad374e08c0ab7518aa07f9d3683f34c2b3c67a15830268cb4a56c1ff6f54c8e54a795f5b87c08668b51f82d0093f7baee7d2981181', 2),
(10, 'test', '6a092f7848029e9ef592ab0b8411f111630bb8d85ebd739f044173c110d394b4d2b2ccd7e2aec35436c56021793f38e575eab6fbf1ad2ebcac909ab837fa69d0', 2),
(11, 'Ririf', '23c30acb5f2a7622a5a4be760fe658f65d83f988e8a843d85d56825561c73bc413cf81e94c628feab6275cb0f7e6d86f194313b059a52fc5757374c2995214e9', 2),
(12, 'Ririf', 'b276dff4b02cda435a80eb18a126adb4d1f21f0952c27fad5de214a65d4282bb22e3c4b19a946e0a29fe814301a6e5269ec5760ad83a5ebe1c5b1a2229bdd00a', 2),
(13, 'RonyMaree', '210b180f80403bcd7abe5f71bde177a99fbd8012a547ff2c3b47a2a8823547785aeaae1566d9d0f0c52102caffa08cc6a6d3982e0383d222d725fc63e77cfcbf', 3),
(14, 'Gas O Light Ltd', '4ffdd1e4c49deb91443946c3113354fa52f179e54ded61e86dea633dc3232abedaeb033fd39ed1e27bb7db4fcd2f573587571a30ec22af3122234d2eecaf9a83', 2),
(15, 'Apple', '393374ca4948ba5d30d24c45611a17a7f63ac98904dd17da4a8cdab2854a611daba24786a252d2d476a446cb476a5332bafb41b1409591683b6a5ce7680ba9e2', 2),
(22, 'Company4', 'c45dd289a3c8ec6c1d78d65643fa5255c7156d6461a8b19670fbcc9debc039074d9386a40db7b781d77502221736a02cf1a6f13e66497557d0fdf94527d13663', 2),
(23, 'Company5', 'a0f3aeb97f065aa95dc1513b75e6d16142acd4673da1c4458da3b42af023353eba490eece419a614a355c236cd90a26c3ed2b5587df930fadee7dbc0db0bd003', 2),
(24, 'cedroid09', '05a0d7a959a1b783fc0718f60df326cd0750516aa56cc144c4b55399d86edec13082980467d9dc7bb88e8f2fac94a07f1965857c08b04246da54270468a8f2d3', 2),
(25, 'Company7', 'd88bd322fe26a38f4b9c2fe6082c80586694cee3912555b0ac9b20f13e017e6ff75b2f08ea34bb25c2eb76baef07ccafe1a65df16f3ac777ec74c2ff126129ab', 2),
(26, 'Admin', '887375daec62a9f02d32a63c9e14c7641a9a8a42e4fa8f6590eb928d9744b57bb5057a1d227e4d40ef911ac030590bbce2bfdb78103ff0b79094cee8425601f5', 1),
(27, 'Test1', '7249334c32fc05f3c7565f315c09f5cb40ba40fccad8a39a7b0e488e34b3db0526e6367615d22378c9e630939dff5037c61cb7cd4ffadb858d44e4ef56e02986', 2),
(28, 'Test1', '7249334c32fc05f3c7565f315c09f5cb40ba40fccad8a39a7b0e488e34b3db0526e6367615d22378c9e630939dff5037c61cb7cd4ffadb858d44e4ef56e02986', 3),
(29, 'Test1', '7249334c32fc05f3c7565f315c09f5cb40ba40fccad8a39a7b0e488e34b3db0526e6367615d22378c9e630939dff5037c61cb7cd4ffadb858d44e4ef56e02986', 3),
(30, 'Customer', '86410dca65bda3a9b97c1cfe20f5a10688dd21c2a3fa71c6a1955c4511d12afeb057d99f425204882c33fb1ba5d023c4d5d19448d434306b448af8a0650bb8a9', 3),
(31, 'Company', 'f586b31c6d964a6cf6c56c9878080ac9c42b707960999a5968aee74835b06269066d512d0b414db19d5d2e42e6c4303cd2c37fdada4210500cbc1013ac8189d5', 2),
(32, 'RonyMaree', 'a95034f0f156ac2b78fd57efa539bca5223092e4578ed8e928e9bd975433c180fc44bc839bd7d82e7bd576c6aaa46cfc64df565f71284e63de5c3f6df939d087', 3),
(33, 'RonyMaree', '836fe2783bcd22662f17a176caf1a66d13b68360a8f7a675618377eff65dfb420387d33df1b10fb2d4b79d458d8f0abfff7d0ff97613adaeeaa6ea14cedb3aad', 3),
(34, 'RonyMaree', '3d7bb38c41a17d1aee835506e52e63d3540ede4c38a429d580d3f8ddacb00e524cd43bb3337e95f94ff5f76b0121e07fea9f2078f4f82103472e4bf0d926469a', 3),
(35, 'RonyMaree', '1f9121c80cf892e3c8d2ae8626335e1fe6a330a8d6636ead659fbca7343f5d5ece15c9557e6e1cfc8bbb399060b92d8d9f7625833b4b4c5ac3b83f4d6fe27981', 3);

-- --------------------------------------------------------

--
-- Table structure for table `quote_table`
--

CREATE TABLE IF NOT EXISTS `quote_table` (
  `quote_id` int(6) NOT NULL AUTO_INCREMENT,
  `request_id` int(6) NOT NULL,
  `company_id` int(6) NOT NULL,
  `quotedate` date NOT NULL,
  `amount` int(7) NOT NULL,
  `comments` varchar(255) NOT NULL,
  `quote_status` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`quote_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `quote_table`
--

INSERT INTO `quote_table` (`quote_id`, `request_id`, `company_id`, `quotedate`, `amount`, `comments`, `quote_status`) VALUES
(1, 5, 12, '2015-10-25', 15000, '', NULL),
(2, 4, 13, '2015-10-25', 10000, '', NULL),
(3, 9, 20, '2015-10-25', 5678, '', NULL),
(4, 6, 17, '2015-11-30', 12300, '', NULL),
(5, 1, 21, '2015-11-30', 12328, '', NULL),
(6, 1, 23, '2015-11-30', 678934, '', NULL),
(7, 9, 22, '2015-11-30', 10000, '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `request_table`
--

CREATE TABLE IF NOT EXISTS `request_table` (
  `request_id` int(6) NOT NULL AUTO_INCREMENT,
  `customer_id` int(6) NOT NULL,
  `date_of_request` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `category_id` int(6) NOT NULL,
  `service_id` int(6) NOT NULL,
  `description` varchar(255) NOT NULL,
  `main_town` varchar(64) NOT NULL,
  `address` varchar(255) NOT NULL,
  `budget` int(7) NOT NULL,
  `date_of_closure` datetime(6) NOT NULL,
  `due_date` datetime(6) NOT NULL,
  PRIMARY KEY (`request_id`),
  KEY `customer_id` (`customer_id`),
  KEY `category_id` (`category_id`),
  KEY `service_id` (`service_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `request_table`
--

INSERT INTO `request_table` (`request_id`, `customer_id`, `date_of_request`, `category_id`, `service_id`, `description`, `main_town`, `address`, `budget`, `date_of_closure`, `due_date`) VALUES
(1, 13, '2015-09-07 19:29:27', 3, 3, '', 'Curepipe', 'Royal Road', 0, '2015-12-23 00:00:00.000000', '2016-01-01 00:00:00.000000'),
(4, 13, '2015-09-28 20:32:41', 3, 7, '', 'Curepipe', 'Royal Road', 3123, '2015-12-15 00:00:00.000000', '2016-01-06 00:00:00.000000'),
(5, 13, '2015-09-28 20:34:00', 3, 8, '', 'Curepipe', 'Royal Road', 0, '2015-12-26 00:00:00.000000', '2016-01-05 00:00:00.000000'),
(6, 13, '2015-09-28 20:34:51', 1, 8, '', 'Curepipe', 'Royal Road', 0, '2015-12-28 00:00:00.000000', '2016-01-10 00:00:00.000000'),
(7, 13, '2015-09-29 16:39:08', 5, 5, '', 'Curepipe', 'Royal Road', 0, '2015-12-30 00:00:00.000000', '2016-02-24 00:00:00.000000'),
(8, 13, '2015-09-29 16:41:35', 2, 1, 'To make windowframes', 'Quatre Bornes', 'Royal Road', 25000, '2015-12-27 00:00:00.000000', '2016-01-26 00:00:00.000000'),
(9, 13, '2015-09-29 17:18:01', 1, 1, 'Walls', 'Curepipe', 'Eau CoulÃ©e', 12000, '2015-12-31 00:00:00.000000', '2016-01-03 00:00:00.000000'),
(10, 13, '2016-01-02 14:32:15', 4, 7, 'To paint 1 wall - 4m x 3m', 'Curepipe', 'Eau Coulee', 15500, '2016-01-15 00:00:00.000000', '2016-01-17 00:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `services_table`
--

CREATE TABLE IF NOT EXISTS `services_table` (
  `service_id` int(6) NOT NULL AUTO_INCREMENT,
  `service` varchar(64) NOT NULL,
  PRIMARY KEY (`service_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `services_table`
--

INSERT INTO `services_table` (`service_id`, `service`) VALUES
(1, 'Building'),
(2, 'Furniture'),
(3, 'Civil Construction'),
(4, 'Concreting'),
(5, 'Windows'),
(6, 'Electric'),
(7, 'Painting'),
(8, 'Plumbing'),
(9, 'Tiling');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
