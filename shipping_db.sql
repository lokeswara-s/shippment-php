-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2019 at 05:51 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shipping_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) NOT NULL,
  `bookingId` varchar(225) NOT NULL,
  `userId` bigint(20) NOT NULL,
  `itemType` varchar(225) NOT NULL,
  `itemName` varchar(225) NOT NULL,
  `itemWeight` varchar(225) NOT NULL,
  `insurance` varchar(225) NOT NULL,
  `deliverySpeed` varchar(225) NOT NULL,
  `pickupType` varchar(225) NOT NULL,
  `totalKmToBeShipped` varchar(225) NOT NULL,
  `totalWeightCharges` varchar(225) NOT NULL,
  `totalKmCharges` varchar(225) NOT NULL,
  `totalInsuranceCost` varchar(225) NOT NULL,
  `totalDeliveryCost` varchar(225) NOT NULL,
  `totalPickupCost` varchar(225) NOT NULL,
  `totalShippingCharges` varchar(225) NOT NULL,
  `fromName` varchar(225) NOT NULL,
  `fromMobileNumber` varchar(225) NOT NULL,
  `fromCity` varchar(225) NOT NULL,
  `fromAddress` varchar(225) NOT NULL,
  `fromPinCode` varchar(225) NOT NULL,
  `toName` varchar(225) NOT NULL,
  `toMobileNumber` varchar(225) NOT NULL,
  `toCity` varchar(225) NOT NULL,
  `toAddress` varchar(225) NOT NULL,
  `toPincode` varchar(225) NOT NULL,
  `paymentMode` varchar(225) NOT NULL,
  `bookingDate` datetime NOT NULL,
  `status` int(1) NOT NULL,
  `exceptedArrivalDate` date NOT NULL,
  `updatedDate` datetime NOT NULL,
  `notes` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `bookingId`, `userId`, `itemType`, `itemName`, `itemWeight`, `insurance`, `deliverySpeed`, `pickupType`, `totalKmToBeShipped`, `totalWeightCharges`, `totalKmCharges`, `totalInsuranceCost`, `totalDeliveryCost`, `totalPickupCost`, `totalShippingCharges`, `fromName`, `fromMobileNumber`, `fromCity`, `fromAddress`, `fromPinCode`, `toName`, `toMobileNumber`, `toCity`, `toAddress`, `toPincode`, `paymentMode`, `bookingDate`, `status`, `exceptedArrivalDate`, `updatedDate`, `notes`) VALUES
(8, 'SP20190811081151', 2, 'Glassware', 'test6', '5', 'No', 'Normal', 'nearest_hub', '1054.1', '1250', '52700', '0', '50', '0', '54000', 'test6customer', '789456123', 'Agra', 'test6address', '78', 'test6recvr', '56', 'Pune', 'test6rcvraddress', '456', 'Cash', '2019-08-11 08:11:51', 3, '0000-00-00', '0000-00-00 00:00:00', 'jlk'),
(11, 'GSMS20190821094809', 2, 'Electronics', 'router', '4', 'No', 'Normal', 'home_pickup', '727.2', '400', '14540', '0', '50', '200', '15190', 'Chaitanya', '789456123', 'Hyderabad', 'Miyapur', '527898', 'yy', '78996', 'Coimbatore', 'jhgjh', '897', 'Cash', '2019-08-21 09:48:09', 3, '2019-08-27', '0000-00-00 00:00:00', 'present Hub details : 90908w90q8'),
(12, 'GSMS20190823114845', 2, '', '', '', 'No', '', '', 'NaN', 'NaN', 'NaN', '0', '', '', 'NaN', '', '', '', '', '', '', '', '', '', '', 'Cash', '2019-08-23 11:48:45', 1, '0000-00-00', '0000-00-00 00:00:00', ''),
(13, 'GSMS20190823122924', 2, '', '', '', 'No', '', '', 'NaN', 'NaN', 'NaN', '0', '', '', 'NaN', '', '', '', '', '', '', '', '', '', '', 'Cash', '2019-08-23 12:29:24', 1, '0000-00-00', '0000-00-00 00:00:00', ''),
(14, 'GSMS20190823123101', 2, 'Electronics', '12', '78', 'No', '', '', '1317.8', '390', '1317', '0', '60', '50', '1767', 'e', '78', 'Coimbatore', '89', '56', 'ew', '8', 'Vadodara', 'hgh', '546', 'Cash', '2019-08-23 12:31:01', 1, '0000-00-00', '0000-00-00 00:00:00', ''),
(15, 'GSMS20190823123319', 2, 'Electronics', '12', '78', 'Yes', '', '', '1418.2', '390', '1418', '2', '60', '50', '1870', 'e', '987', 'Kalyan', '456', '654', '513', '653', 'Patna', '54', '65', 'Cash', '2019-08-23 12:33:19', 1, '0000-00-00', '0000-00-00 00:00:00', ''),
(16, 'GSMS20190823123437', 2, 'Electronics', '12', '78', 'Yes', 'Normal', '', '1317.8', '390', '1317', '2', '10', '50', '1769', 'hjkcda', '6454', 'Coimbatore', '35fsdfs', '564', 'klasdja', '456789', 'Vadodara', 'iojjdaoi789', '45654', 'Cash', '2019-08-23 12:34:37', 1, '0000-00-00', '0000-00-00 00:00:00', ''),
(17, 'GSMS20190823123539', 2, 'Electronics', 'hdskj', '45', 'Yes', 'Express', 'nearest_hub', '1362.8', '225', '1362', '2', '60', '0', '1599', 'fskdj', '798', 'Coimbatore', 'hjkhmm', '789', 'kjds', '654', 'Bhopal', '65hj', '56', 'Cash', '2019-08-23 12:35:39', 1, '0000-00-00', '0000-00-00 00:00:00', ''),
(18, 'GSMS20190823123652', 2, 'Electronics', '12', '87', 'Yes', 'Normal', 'home_pickup', '992.0', '435', '992', '2', '10', '50', '1489', 'dskljd', '6546', 'Mumbai', 'dksnj', '456', 'ds', '8796', 'Coimbatore', 'fsdk,', '789', 'Cash', '2019-08-23 12:36:52', 1, '0000-00-00', '0000-00-00 00:00:00', ''),
(19, 'GSMS20190823124120', 2, 'Electronics', 'jkb', '78', 'Yes', 'Normal', 'nearest_hub', '1557.3', '390', '1557', '2', '10', '0', '1959', 'hjkcda', '8786', 'Kolkata', 'jghj', '456', 'jgh', '56523', 'Vadodara', '513yugjh', '56463', 'Cash', '2019-08-23 12:41:20', 1, '0000-00-00', '0000-00-00 00:00:00', ''),
(20, 'GSMS20190823124447', 2, 'Electronics', 'router', '5', 'Yes', 'Normal', 'nearest_hub', '1307.6', '25', '1307', '2', '10', '0', '1344', 'jgj', '4656', 'Coimbatore', 'bhjmbhjh', '65465', 'jkhkj', '545', 'Indore', 'hjgj', '454', 'Cash', '2019-08-23 12:44:47', 2, '0000-00-00', '0000-00-00 00:00:00', ';kl,m.');

-- --------------------------------------------------------

--
-- Table structure for table `cities_tbl`
--

CREATE TABLE `cities_tbl` (
  `id` bigint(20) NOT NULL,
  `cityName` varchar(225) NOT NULL,
  `latitude` varchar(225) NOT NULL,
  `longitude` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cities_tbl`
--

INSERT INTO `cities_tbl` (`id`, `cityName`, `latitude`, `longitude`) VALUES
(2, 'Mumbai', '18.987807', '72.836447'),
(3, 'Delhi', '28.651952', '77.231495'),
(4, 'Kolkata', '22.562627', '88.363044'),
(5, 'Chennai', '13.084622', '80.248357'),
(6, 'Bengaluru', '12.977063', '77.587106'),
(7, 'Hyderabad', '17.384052', '78.456355'),
(8, 'Ahmadabad', '23.025793', '72.587265'),
(9, 'Hwora', '22.576882', '88.318566'),
(10, 'Pune', '18.513271', '73.849852'),
(11, 'Surat', '21.195944', '72.830232'),
(13, 'Rampura', '26.884682', '75.789336'),
(14, 'Lucknow', '26.839281', '80.923133'),
(16, 'Patna', '25.615379', '85.101027'),
(17, 'Indore', '22.717736', '75.85859'),
(18, 'Vadodara', '22.299405', '73.208119'),
(19, 'Bhopal', '23.254688', '77.402892'),
(20, 'Coimbatore', '11.005547', '76.966122'),
(22, 'Agra', '27.187935', '78.003944'),
(23, 'Kalyan', '19.243703', '73.135537'),
(24, 'Vishakhapatnam', '17.704052', '83.297663'),
(25, 'Kochi', '9.947743', '76.253802'),
(26, 'Nasik', '19.999963', '73.776887'),
(27, 'Meerut', '28.980018', '77.706356'),
(29, 'Varanasi', '25.31774', '83.005811'),
(32, 'Jamshedpur', '22.802776', '86.185448'),
(33, 'Madurai', '9.917347', '78.119622'),
(34, 'Jabalpur', '23.174495', '79.935903'),
(35, 'Rajkot', '22.291606', '70.793217'),
(36, 'Dhanbad', '23.801988', '86.443244'),
(37, 'Amritsar', '31.622337', '74.875335'),
(38, 'Warangal', '17.978423', '79.600209'),
(39, 'Allahabad', '25.44478', '81.843217'),
(40, 'Srinagar', '34.085652', '74.805553'),
(41, 'Aurangabad', '19.880943', '75.346739'),
(42, 'Bhilai', '21.209188', '81.428497'),
(43, 'Solapur', '17.671523', '75.910437'),
(44, 'Ranchi', '23.347768', '85.338564'),
(45, 'Jodhpur', '26.26841', '73.005943'),
(46, 'Guwhati', '26.176076', '91.762932'),
(47, 'Chandigarh', '30.736292', '76.788398'),
(48, 'Gwalior', '26.229825', '78.173369'),
(49, 'Thiruvananthapuram', '8.485498', '76.949238'),
(50, 'Tiruchchirppalli', '10.815499', '78.696513'),
(51, 'Hubli', '15.349955', '75.138619'),
(52, 'Mysore', '12.292664', '76.638543'),
(53, 'Raipur', '21.233333', '81.633333'),
(54, 'Salem', '11.651165', '78.158672'),
(55, 'Bhubaneshwar', '20.272411', '85.833853'),
(56, 'Kota', '25.182544', '75.839065'),
(57, 'Jhansi', '25.458872', '78.579943'),
(58, 'Bareilly', '28.347023', '79.421934'),
(59, 'Aligarh', '27.881453', '78.07464'),
(60, 'Bhiwandi', '19.300229', '73.058813'),
(61, 'Jammu', '32.735686', '74.869112'),
(62, 'Moradabad', '28.838931', '78.776838'),
(63, 'Mangalore', '12.865371', '74.842432'),
(64, 'Kolhapur', '16.695633', '74.231669'),
(65, 'Amravati', '20.933272', '77.75152'),
(66, 'Dehra Dun', '30.324427', '78.033922'),
(67, 'Malegaon Camp', '20.569974', '74.515415'),
(68, 'Nellore', '14.449918', '79.986967'),
(69, 'Gopalpur', '26.735389', '83.38064'),
(70, 'Shimoga', '13.932424', '75.572555'),
(71, 'Tiruppur', '11.104096', '77.346402'),
(72, 'Raurkela', '22.224964', '84.864143'),
(74, 'Belgaum', '15.862643', '74.508534'),
(77, 'Ajmer', '26.452103', '74.638667'),
(78, 'Cuttack', '20.522922', '85.78813'),
(80, 'Bhuvnagar', '21.774455', '72.152496'),
(81, 'Hisar', '29.153938', '75.722944'),
(82, 'Bilaspur', '22.080046', '82.155431'),
(83, 'Tirunelveli', '8.725181', '77.684519'),
(84, 'Gunt?r', '16.299737', '80.457293'),
(85, 'Shiliguri', '26.710035', '88.428512'),
(86, 'Ujjain', '23.182387', '75.776433'),
(87, 'Davangere', '14.469237', '75.92375'),
(88, 'Akola', '20.709569', '76.998103'),
(89, 'Sah?ranpur', '29.967896', '77.545221'),
(90, 'Gulbarga', '17.335827', '76.83757'),
(91, 'Bh?tp?ra', '22.866431', '88.401129'),
(92, 'Dh?lia', '20.901299', '74.777373'),
(93, 'Udaipur', '24.57951', '73.690508'),
(94, 'Bellary', '15.142049', '76.92398'),
(95, 'Tuticorin', '8.805038', '78.151884'),
(96, 'Kurnool', '15.828865', '78.036021'),
(97, 'Gaya', '24.796858', '85.003852'),
(98, 'S?kar', '27.614778', '75.138671'),
(99, 'Tumkur', '13.341358', '77.102203'),
(100, 'Kollam', '8.881131', '76.584694'),
(101, 'Ahmadnagar', '19.094571', '74.738432'),
(102, 'Bh?lw?ra', '25.347071', '74.640812'),
(103, 'Niz?m?b?d', '18.673151', '78.10008'),
(104, 'Parbhani', '19.268553', '76.770807'),
(105, 'Shillong', '25.573987', '91.896807'),
(106, 'L?t?r', '18.399487', '76.584252'),
(107, 'R?jap?laiyam', '9.451111', '77.556121'),
(108, 'Bh?galpur', '25.244462', '86.971832'),
(109, 'Muzaffarnagar', '29.470914', '77.703324'),
(110, 'Muzaffarpur', '26.122593', '85.390553'),
(111, 'Mathura', '27.503501', '77.672145'),
(112, 'Pati?la', '30.336245', '76.392199'),
(113, 'Saugor', '23.838766', '78.738738'),
(114, 'Brahmapur', '19.311514', '84.792903'),
(115, 'Sh?hb?zpur', '27.874116', '79.879327'),
(116, 'New Delhi', '28.6', '77.2'),
(117, 'Rohtak', '28.894473', '76.589166'),
(118, 'Samlaip?dar', '21.478072', '83.990505'),
(119, 'Ratl?m', '23.330331', '75.040315'),
(120, 'F?roz?b?d', '27.150917', '78.397808'),
(121, 'R?jahmundry', '17.005171', '81.777839'),
(122, 'Barddham?n', '23.255716', '87.856906'),
(123, 'B?dar', '17.913309', '77.530105'),
(124, 'Bamanpur?', '28.804495', '79.040305'),
(125, 'K?kin?da', '16.960361', '82.238086'),
(126, 'P?n?pat', '29.387471', '76.968246'),
(127, 'Khammam', '17.247672', '80.143682'),
(128, 'Bhuj', '23.253972', '69.669281'),
(129, 'Kar?mnagar', '18.436738', '79.13222'),
(130, 'Tirupati', '13.635505', '79.419888'),
(131, 'Hospet', '15.269537', '76.387103'),
(132, 'Chikka Mandya', '12.545602', '76.895078'),
(133, 'Alwar', '27.566291', '76.610202'),
(134, 'Aizawl', '23.736701', '92.714596'),
(135, 'Bij?pur', '16.827715', '75.718988'),
(136, 'Imphal', '24.808053', '93.944203'),
(137, 'Tharati Etawah', '26.758236', '79.014875'),
(138, 'R?ich?r', '16.205459', '77.35567'),
(139, 'Path?nkot', '32.274842', '75.652865'),
(140, 'Ch?r?la', '15.823849', '80.352187'),
(141, 'Son?pat', '28.994778', '77.019375'),
(142, 'Mirz?pur', '25.144902', '82.565335'),
(143, 'H?pur', '28.729845', '77.780681'),
(144, 'Porbandar', '21.641346', '69.600868'),
(145, 'Bharatpur', '27.215251', '77.492786'),
(146, 'Puducherry', '11.933812', '79.829792'),
(147, 'Karn?l', '29.691971', '76.984483'),
(148, 'N?gercoil', '8.177313', '77.43437'),
(149, 'Thanj?v?r', '10.785233', '79.139093'),
(150, 'P?li', '25.775125', '73.320611'),
(151, 'Agartala', '23.836049', '91.279386'),
(152, 'Ongole', '15.503565', '80.044541'),
(153, 'Puri', '19.798254', '85.824938'),
(154, 'Dindigul', '10.362853', '77.975827'),
(155, 'Haldia', '22.025278', '88.058333'),
(156, 'Bulandshahr', '28.403922', '77.857731'),
(157, 'Purnea', '25.776703', '87.473655'),
(158, 'Proddat?r', '14.7502', '78.548129'),
(159, 'Gurgaon', '28.460105', '77.026352'),
(160, 'Kh?n?pur', '21.273716', '76.117376'),
(161, 'Machil?patnam', '16.187466', '81.13888'),
(162, 'Bhiw?ni', '28.793044', '76.13968'),
(163, 'Nandy?l', '15.477994', '78.483605'),
(164, 'Bhus?val', '21.043649', '75.785058'),
(165, 'Bharauri', '27.598203', '81.694709'),
(166, 'Tonk', '26.168672', '75.786111'),
(167, 'Sirsa', '29.534893', '75.028981'),
(168, 'Vizianagaram', '18.11329', '83.397743'),
(169, 'Vellore', '12.905769', '79.137104'),
(170, 'Alappuzha', '9.494647', '76.331108'),
(171, 'Shimla', '31.104423', '77.166623'),
(172, 'Hindupur', '13.828065', '77.491425'),
(173, 'B?ram?la', '34.209004', '74.342853'),
(174, 'Bakshpur', '25.894283', '80.792104'),
(175, 'Dibrugarh', '27.479888', '94.90837'),
(176, 'Said?pur', '27.598784', '80.75089'),
(177, 'Navs?ri', '20.85', '72.916667'),
(178, 'Budaun', '28.038114', '79.126677'),
(179, 'Cuddalore', '11.746289', '79.764362'),
(180, 'Har?pur', '31.463218', '75.986418'),
(181, 'Krishn?puram', '12.869617', '79.719469'),
(182, 'Fyz?b?d', '26.775486', '82.150182'),
(183, 'Silchar', '24.827327', '92.797868'),
(184, 'Amb?la', '30.360993', '76.797819'),
(185, 'Krishnanagar', '23.405761', '88.490733'),
(186, 'Kol?r', '13.137679', '78.129989'),
(187, 'Kumbakonam', '10.959789', '79.377472'),
(188, 'Tiruvann?malai', '12.230204', '79.072954'),
(189, 'P?libh?t', '28.631245', '79.804362'),
(190, 'Abohar', '30.144533', '74.19552'),
(191, 'Port Blair', '11.666667', '92.75'),
(192, 'Al?pur Du?r', '26.4835', '89.522855'),
(193, 'Hat?sa', '27.592698', '78.013843'),
(194, 'V?lp?rai', '10.325163', '76.955299'),
(195, 'Aurang?b?d', '24.752037', '84.374202'),
(196, 'Kohima', '25.674673', '94.110988'),
(197, 'Gangtok', '27.325739', '88.612155'),
(198, 'Kar?r', '10.960277', '78.076753'),
(199, 'Jorh?t', '26.757509', '94.203055'),
(200, 'Panaji', '15.498289', '73.824541'),
(201, 'Saidpur', '34.318174', '74.457093'),
(202, 'Tezpur', '26.633333', '92.8'),
(203, 'Itanagar', '27.102349', '93.692047'),
(204, 'Daman', '20.414315', '72.83236'),
(205, 'Silvassa', '20.273855', '72.996728'),
(206, 'Diu', '20.715115', '70.987952'),
(207, 'Dispur', '26.135638', '91.800688'),
(208, 'Kavaratti', '10.566667', '72.616667'),
(209, 'Calicut', '11.248016', '75.780402'),
(210, 'Kagazn?g?r', '19.331589', '79.466051'),
(211, 'Jaipur', '26.913312', '75.787872'),
(212, 'Ghandinagar', '23.216667', '72.683333'),
(213, 'Panchkula', '30.691512', '76.853736');

-- --------------------------------------------------------

--
-- Table structure for table `costings_tbl`
--

CREATE TABLE `costings_tbl` (
  `id` bigint(20) NOT NULL,
  `itemType` varchar(225) NOT NULL,
  `perKgCost` varchar(225) NOT NULL,
  `perKmCost` varchar(225) NOT NULL,
  `insuranceCost` varchar(225) NOT NULL,
  `normalDeliveryCost` varchar(225) NOT NULL,
  `doorPickupCost` varchar(225) NOT NULL,
  `expressDeliveryCost` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `costings_tbl`
--

INSERT INTO `costings_tbl` (`id`, `itemType`, `perKgCost`, `perKmCost`, `insuranceCost`, `normalDeliveryCost`, `doorPickupCost`, `expressDeliveryCost`) VALUES
(1, 'Electronics', '5', '1', '2', '10', '50', '60'),
(2, 'Glassware', '250', '50', '100', '50', '400', '200'),
(3, 'Medicines', '250', '50', '100', '50', '400', '200'),
(4, 'Others', '250', '50', '100', '50', '400', '200');

-- --------------------------------------------------------

--
-- Table structure for table `users_tbl`
--

CREATE TABLE `users_tbl` (
  `id` bigint(20) NOT NULL,
  `userType` bigint(20) NOT NULL,
  `name` varchar(225) NOT NULL,
  `mobileNumber` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_tbl`
--

INSERT INTO `users_tbl` (`id`, `userType`, `name`, `mobileNumber`, `email`, `password`) VALUES
(1, 0, 'administrator', '9999999999', 'admin@admin.com', 'e6e061838856bf47e1de730719fb2609'),
(2, 1, 'mounika', '9898989898', 'mounika@gmail.com', 'ad983acbb4fb9d6a930927f10fb413d9');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `cities_tbl`
--
ALTER TABLE `cities_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `costings_tbl`
--
ALTER TABLE `costings_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_tbl`
--
ALTER TABLE `users_tbl`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userType` (`userType`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `cities_tbl`
--
ALTER TABLE `cities_tbl`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=214;
--
-- AUTO_INCREMENT for table `costings_tbl`
--
ALTER TABLE `costings_tbl`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users_tbl`
--
ALTER TABLE `users_tbl`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
