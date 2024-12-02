-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2024 at 10:29 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mg`
--

-- --------------------------------------------------------

--
-- Table structure for table `produit`
--

CREATE TABLE `produit` (
  `assets` int(10) NOT NULL,
  `description` varchar(400) NOT NULL,
  `Inventory-method` varchar(255) NOT NULL,
  `SN` text DEFAULT NULL,
  `user` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `Purchase-Date` date NOT NULL,
  `Warranty` varchar(255) NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produit`
--

INSERT INTO `produit` (`assets`, `description`, `Inventory-method`, `SN`, `user`, `location`, `Purchase-Date`, `Warranty`, `category`) VALUES
(0, 'description', 'inventory-method', 'SN', 'user ', 'location', '0000-00-00', 'Warranty', 'status'),
(14543167, '#N/A', '', '#N/A', 'Magasin IT', '', '2021-08-10', '', 'OK'),
(1589000827, '#N/A', '#N/A', '#N/A', 'Magasin IT', '', '2024-01-10', '', 'Scrap'),
(1593000104, '1 Flat screen 18.5 AOPEN', '0', 'CNU0333LN9', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'scrap'),
(1593000107, '1 PC DELL OPTIPLEX 990mt 13 / 2GB / 500GB / GRDVD', '0', 'DCML15J', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'scrap'),
(1593000113, '1 Color Laser Printer HP1025', '0', 'CNF6B53826', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'in progress'),
(1593000170, '\"1 DELL Screen 18.5 \"\"TFT E1910H 1523H3S\"', '0', 'HF6775J', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'scrap'),
(1593000171, '1 Computer DELL Optilex 380 E5800 / 2GB / 500 /', '0', 'JCSJ8BS', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'in progress'),
(1593000173, '1 Computer DELL Optilex 380 E5800 / 2GB / 500 /', '0', 'PTRF180517L', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'scrap'),
(1593000175, '1 HP Color Laserjet Pro CP1025 Ref EC', '0', 'CNCHD29906', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'in progress'),
(1593000176, '1 Scanner HP G2710 scacnjet SCN1C5AD2RN - SCN1BPAD', '0', 'A verifier le S/N', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'in progress'),
(1593000177, '1 Scanner HP G2710 scacnjet SCN1C5AD2RN - SCN1BPAD', '0', 'no Serial Number', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'in progress'),
(1593000182, '1 PC optiplex 390mt widows 7 pro b210 365483', '0', '5C6775J', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'in progress'),
(1593000183, '1 PC optiplex 390mt widows 7 pro b210 365483', '0', '5G6775J', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'scrap'),
(1593000191, '1 PC optiplex 390mt widows 7 pro b210 365483', '0', 'JMX1304L0DF', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'scrap'),
(1593000201, '1 PC optiplex 390mt widows 7 pro b210 365483', '0', 'P1531C4001514', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'scrap'),
(1593000202, '1 PC optiplex 390mt widows 7 pro b210 365483', '0', 'P1572A8000586', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'scrap'),
(1593000221, '1 PC optiplex 390mt widows 7 pro b210 365483', '0', 'NPCF280359L', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'scrap'),
(1593000222, '1 PC optiplex 390mt widows 7 pro b210 365483', '0', 'VNC3B95516', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'scrap'),
(1593000224, '1 monochrome printers hp laserjet P1606dn', '0', 'VNC3B95518', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'in progress'),
(1593000225, '1 monochrome printers hp laserjet P1606dn', '0', 'VNC3M15040', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'in progress'),
(1593000238, '1 PC Lenovo M92p tc ci5-3550 3.3g 4GB W7P64 500GBD', '0', 'PB748GE', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'scrap'),
(1593000242, '1 PC Lenovo M92p tc ci5-3550 3.3g 4GB W7P64 500GBD', 'TO BE SCANNED', 'S4MZFM7', 'Magasin IT', 'C', '0000-00-00', '', 'OK'),
(1593000246, '1 PC Lenovo M92p tc ci7-3770 W7P64 4tb DVDRW is No', 'TO BE SCANNED', 'S4MZFT2', 'Magasin IT', 'C', '0000-00-00', '', 'OK'),
(1593000247, '1 PC Lenovo M92p tc ci7-3770 W7P64 4tb DVDRW is No', 'TO BE SCANNED', 'S4MZFV5', 'Magasin IT', 'C', '0000-00-00', '', 'OK'),
(1593000249, '1 Switch PowerDsine PD-mispan 6512 / A / C / M Eth', '0', 'N12251214006866A09', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'in progress'),
(1593000251, '1 Switch PowerDsine PD-mispan 6512 / A / C / M Eth', '0', 'N12131220004770A09', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'in progress'),
(1593000253, '1 Server Hpproliant dl-360 g7 E5620 1p 4gb-r-SFF', 'TO BE SCANNED', 'CZJ24400H5', 'Magasin IT', 'C', '0000-00-00', '', 'OK'),
(1593000254, '1 Server Hpproliant dl-360 g7 E5620 1p 4gb-r-SFF', '0', 'CZJ24400DM', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'in progress'),
(1593000255, '1 Server Hpproliant dl-360 g7 E5620 1p 4gb-r-SFF', '0', 'CZJ2421YQX', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'in progress'),
(1593000265, '1 Server Hpproliant dl-360 g7 E5620 1p 4gb-r-SFF', '0', 'A verifier le S/N', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'scrap'),
(1593000273, '1 Compa II 162/12 thermal transfer printer ref: 1', 'TO BE SCANNED', '13541977', 'Magasin IT', 'C', '0000-00-00', '', 'OK'),
(1593000274, '1 Compa II 162/12 thermal transfer printer ref: 1', '0', '13541965', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'in progress'),
(1593000275, '1 Compa II 162/12 thermal transfer printer ref: 1', 'TO BE SCANNED', '13541963', 'Magasin IT', 'C', '0000-00-00', '', 'OK'),
(1593000276, '1 Compa II 162/12 thermal transfer printer ref: 1', '0', '13541972', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'in progress'),
(1593000277, '1 Compa II 162/12 thermal transfer printer ref: 1', '0', '13541975', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'in progress'),
(1593000278, '1 Compa II 162/12 thermal transfer printer ref: 1', 'TO BE SCANNED', '13541976', 'Magasin IT', 'C', '0000-00-00', '', 'OK'),
(1593000279, '1 Compa II 162/12 thermal transfer printer ref: 1', '0', '11541974', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'in progress'),
(1593000281, '1 Compa II 162/12 thermal transfer printer ref: 1', 'TO BE SCANNED', '13541980', 'Magasin IT', 'C', '0000-00-00', '', 'OK'),
(1593000282, '1 Compa II 162/12 thermal transfer printer ref: 1', '0', '13541966', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'in progress'),
(1593000286, '1 Compa II 162/12 thermal transfer printer ref: 1', '0', '14543196', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'in progress'),
(1593000293, '1 Compa II 162/12 thermal transfer printer ref: 1', '0', '13541959', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'in progress'),
(1593000296, '1 PC Lenovo M92p tc ci5-3550 3.3g 4gb 500gb W7P64', 'TO BE SCANNED', '1S3209B4GS4PAZW1', 'Magasin IT', 'C', '0000-00-00', '', 'OK'),
(1593000297, '1 PC Lenovo M92p tc ci5-3550 3.3g 4gb 500gb W7P64', 'TO BE SCANNED', '1S3209B4GS4PAZW8', 'Magasin IT', 'C', '0000-00-00', '', 'OK'),
(1593000298, '1 PC Lenovo M92p tc ci5-3550 3.3g 4gb 500gb W7P64', 'TO BE SCANNED', 'S4WGBY5', 'Magasin IT', 'C', '0000-00-00', '', 'OK'),
(1593000305, '1 PC Lenovo M92p tc ci5-3550 3.3g 4gb 500gb W7P64', '0', 'PB7XD6B', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'scrap'),
(1593000308, '1 PC Lenovo M92p tc ci5-3550 3.3g 4gb 500gb W7P64', '0', 'PB7XD6D', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'scrap'),
(1593000311, '1 PC Lenovo M92p tc ci5-3550 3.3g 4gb 500gb W7P64', '0', '209NDCRJS171', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'scrap'),
(1593000316, '1 PC Lenovo M92p tc ci5-3550 3.3g 4gb 500gb W7P64', '#N/A', '208NDYGHY234', 'Magasin IT', '', '0000-00-00', '', 'Scrapped'),
(1593000360, '1 AP-5131-13043-WWR accespoint Motorola AP 5131 80', '0', '1.13165E+13', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'scrap'),
(1593000364, '1 PC Lenovo TC M92p Ci5-3550 3.3g 4gb 500gb W7P64', 'TO BE SCANNED', 'S4PNNM3', 'Magasin IT', 'C', '0000-00-00', '', 'OK'),
(1593000365, '1 PC Lenovo TC M92p Ci5-3550 3.3g 4gb 500gb W7P64', 'TO BE SCANNED', 'S4WGBY6', 'Magasin IT', 'C', '0000-00-00', '', 'OK'),
(1593000369, '1 PC Lenovo TC M92p Ci5-3550 3.3g 4gb 500gb W7P64', 'TO BE SCANNED', 'S4PNNW1', 'Magasin IT', 'C', '0000-00-00', '', 'OK'),
(1593000373, '1 PC Lenovo TC M92p Ci5-3550 3.3g 4gb 500gb W7P64', 'TO BE SCANNED', 'S4PNNT8', 'Magasin IT', 'C', '0000-00-00', '', 'OK'),
(1593000375, '1 PC Lenovo TC M92p Ci5-3550 3.3g 4gb 500gb W7P64', 'TO BE SCANNED', 'S4PNNV2', 'Magasin IT', 'C', '0000-00-00', '', 'OK'),
(1593000380, '1 PC Lenovo TC M92p Ci5-3550 3.3g 4gb 500gb W7P64', 'TO BE SCANNED', 'S4PNNR4', 'Magasin IT', 'C', '0000-00-00', '', 'OK'),
(1593000383, '1 PC Lenovo TC M92p Ci5-3550 3.3g 4gb 500gb W7P64', '0', 'S4WGBY1', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'scrap'),
(1593000388, '1 PC Lenovo TC M92p Ci5-3550 3.3g 4gb 500gb W7P64', 'TO BE SCANNED', 'S4PNNN5', 'Magasin IT', 'C', '0000-00-00', '', 'OK'),
(1593000397, '1 ProCurve Switch 2510-24 Ref: J9019B + accessorie', '0', 'A verifier le S/N', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'in progress'),
(1593000399, '1 ProCurve Switch 2510-24 Ref: J9019B + accessorie', '0', 'CN244FW3VF', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'in progress'),
(1593000400, '1 ProCurve Switch 2510-24 Ref: J9019B + accessorie', '0', 'CN244FW34L', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'in progress'),
(1593000401, '1 ProCurve Switch 2510-24 Ref: J9019B + accessorie', '0', 'CN244FW2TX', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'in progress'),
(1593000403, '1 ProCurve Switch 2510-24 Ref: J9019B + accessorie', '0', 'CN244FW3W8', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'in progress'),
(1593000406, '1 HP Procurve 1000-SX-LC Mini-GBIC', '0', 'OS ( MINIGIC)', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'in progress'),
(1593000408, '1 HP Procurve 1000-SX-LC Mini-GBIC', '0', 'OS ( MINIGIC)', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'in progress'),
(1593000458, '1 Beamer Acer P1276 DLP Projector 3500 Im', '0', 'MRJGG11001316015975900', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'base'),
(1593000478, '7 PC Lenovo TC M92p Ci5-35550 3.3g 4GB W7P64 500G', 'TO BE SCANNED', 'N\\A', 'Magasin IT', 'C', '0000-00-00', '', 'OK'),
(1593000506, '\"1 Lenovo TP T530 4GB 2.9 g Ci7-3520M W7P64 15.6 \"', '0', 'R9ZP2AV', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'scrap'),
(1593000507, '\"1 Lenovo TP T530 4GB 2.9 g Ci7-3520M W7P64 15.6 \"', '0', 'R9ZP2AN', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'scrap'),
(1593000509, '\"1 Lenovo TP T530 4GB 2.9 g Ci7-3520M W7P64 15.6 \"', '0', 'R9ZP2AR', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'scrap'),
(1593000511, '\"\"\"1 Lenovo TP T530 4GB 2.9 g Ci7-3520M W7P64 15.6 \"\"\"', '0', 'R9ZP2AX', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'in progress'),
(1593000512, '1 Juniper SSG-140 ref: S0185112009001319', '0', '1.85112E+14', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'in progress'),
(1593000513, '1 Juniper SSG-140 ref: S0185092010000063', '0', '1.85092E+14', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'in progress'),
(1593000514, '1 PC BTO chenbro ATX G2020 2,9Ghz 4GB 500GB W7P32', '0', '', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'in progress'),
(1593000528, '1 HP 2510-24 Switch + 2HP procurve 1000-sx-lc mini', '0', '#N/A', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'scrap'),
(1593000644, '1 HP 2510-24 Switch + 2HP procurve 1000-sx-lc mini', '0', '#N/A', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'scrap'),
(1593000646, '1 HP 2510-24 Switch + 2HP procurve 1000-sx-lc mini', '0', '#N/A', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'scrap'),
(1593000650, '1 HP 2510-24 Switch + 2HP procurve 1000-sx-lc mini', '0', '#N/A', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'scrap'),
(1593000651, '1 HP 2510-24 Switch + 2HP procurve 1000-sx-lc mini', '0', '#N/A', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'scrap'),
(1593000661, '1 HP 2510-24 Switch + 2HP procurve 1000-sx-lc mini', '0', '#N/A', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'scrap'),
(1593000678, '1 HP 2510-24 Switch + 2HP procurve 1000-sx-lc mini', '0', '#N/A', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'scrap'),
(1593000783, '1 Terminal Biometric sagem MA 520 + D with box', '0', 'A verifier le S/N', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'in progress'),
(1593000842, 'IT Equipment', '0', 'PB00LCGW', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'in progress'),
(1593000843, 'IT Equipment', '0', 'PB00LCGV', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'scrap'),
(1593000854, 'IT Equipment', '#N/A', '#N/A', 'Magasin IT', '', '0000-00-00', '', 'Scrapped'),
(1593000861, 'Lenovo PC TC M93P SFF i5-4670 3.4 billion PRO 4GB', 'TO BE SCANNED', 'S4C65768', 'Magasin IT', 'C', '0000-00-00', '', 'OK'),
(1593000862, 'Lenovo PC TC M93P SFF i5-4670 3.4 billion PRO 4GB', 'TO BE SCANNED', 'S4C65769', 'Magasin IT', 'C', '0000-00-00', '', 'OK'),
(1593000869, 'Lenovo PC TC M93P SFF i5-4670 3.4 billion PRO 4GB', 'TO BE SCANNED', 'S4C65776', 'Magasin IT', 'C', '0000-00-00', '', 'OK'),
(1593000872, 'Lenovo PC TC M93P SFF i5-4670 3.4 billion PRO 4GB', 'TO BE SCANNED', 'S4c65779', 'Magasin IT', 'C', '0000-00-00', '', 'OK'),
(1593000880, 'Lenovo PC TC M93P SFF i5-4670 3.4 billion PRO 4GB', 'TO BE SCANNED', 'S4C65787', 'Magasin IT', 'C', '0000-00-00', '', 'OK'),
(1593000881, 'Lenovo PC TC M93P SFF i5-4670 3.4 billion PRO 4GB', 'TO BE SCANNED', 'S4C65762', 'Magasin IT', 'C', '0000-00-00', '', 'OK'),
(1593000882, 'Lenovo PC TC M93P SFF i5-4670 3.4 billion PRO 4GB', 'TO BE SCANNED', 'S4C65788', 'Magasin IT', 'C', '0000-00-00', '', 'OK'),
(1593000883, 'Lenovo PC TC M93P SFF i5-4670 3.4 billion PRO 4GB', 'TO BE SCANNED', 'S4C65789', 'Magasin IT', 'C', '0000-00-00', '', 'OK'),
(1593000889, 'Lenovo PC TC M93P SFF i5-4670 3.4 billion PRO 4GB', 'TO BE SCANNED', 'S4C6592', 'Magasin IT', 'C', '0000-00-00', '', 'OK'),
(1593000891, 'Lenovo PC TC M93P SFF i5-4670 3.4 billion PRO 4GB', 'TO BE SCANNED', 'SS4C65797', 'Magasin IT', 'C', '0000-00-00', '', 'OK'),
(1593000894, 'Lenovo PC TC M93P SFF i5-4670 3.4 billion PRO 4GB', 'TO BE SCANNED', 'SS4C65800', 'Magasin IT', 'C', '0000-00-00', '', 'OK'),
(1593000916, 'Lenovo PC TC M93P SFF i5-4670 3.4 billion PRO 4GB', '0', '#N/A', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'scrap'),
(1593000922, 'Lenovo PC TC M93P SFF i5-4670 3.4 billion PRO 4GB', '0', '#N/A', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'scrap'),
(1593000962, 'PRINTER COMPA 162/12', '0', '13541960', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'in progress'),
(1593000963, 'PRINTER COMPA 162/12', '0', '11540384', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'in progress'),
(1593000978, 'BACKUP SERVER ADMIN', '0', 'MRJHB11001425003A55900', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'scrap'),
(1593000979, 'BACKUP SERVER ADMIN', '0', 'N/A', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'scrap'),
(1593000987, 'Peplink Balance 710 entterprise multi-wan router', '0', 'A verifier le S/N', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'in progress'),
(1593000988, 'Peplink Balance 710 entterprise multi-wan router', '0', 'A verifier le S/N', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'in progress'),
(1593000994, 'terminals sagem MA520 + d / pointeuse', '0', 'CNCHC54178', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'scrap'),
(1593001064, 'Think Center M93P standard SSF', 'TO BE SCANNED', 'S4M66246', 'Magasin IT', 'C', '0000-00-00', '', 'OK'),
(1593001065, 'Think Center M93P standard SSF', 'TO BE SCANNED', 'S4M66241', 'Magasin IT', 'C', '0000-00-00', '', 'OK'),
(1593001067, 'Think Center M93P standard SSF', 'TO BE SCANNED', 'S4M66244', 'Magasin IT', 'C', '0000-00-00', '', 'OK'),
(1593001068, 'Think Center M93P standard SSF', '0', 'N\\A', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'scrap'),
(1593001076, 'Lenovo M93p PC tc', 'TO BE SCANNED', 'S4T79796', 'Magasin IT', 'C', '0000-00-00', '', 'OK'),
(1593001077, 'Lenovo M93p PC tc', 'TO BE SCANNED', 'S4T79801', 'Magasin IT', 'C', '0000-00-00', '', 'OK'),
(1593001083, 'LENOVO THINK PAD (LAPTOP) X250 I5-5300U', '0', 'PC00W885', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'in progress'),
(1593001103, 'LENOVO THINK CENTER PC M73 I3-4150', 'TO BE SCANNED', 'S4T42530', 'Magasin IT', 'C', '0000-00-00', '', 'OK'),
(1593001166, 'ThinkCentre PC M900', 'TO BE SCANNED', 'S4AM3507', 'Magasin IT', 'C', '0000-00-00', '', 'OK'),
(1593001167, 'ThinkCentre PC M900', '#N/A', 'SVNA11TY6', 'Magasin IT', '', '0000-00-00', '', 'Scrapped'),
(1593001172, 'LAPTOP think pad L460', '0', '1546019', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'scrap'),
(1593001189, 'LAPTOP think pad L460', '#N/A', 'v1rpl52', 'Magasin IT', '', '0000-00-00', '', 'Scrapped'),
(1593001195, 'Unite Central LENOVO M900', 'TO BE SCANNED', '1S10FGS0H70GS4BD8748', 'Magasin IT', 'C', '0000-00-00', '', 'OK'),
(1593001255, '\"LED TV Samsung 40 \"\"Smart Black\"', '#N/A', '#N/A', 'Magasin IT', '', '0000-00-00', '', 'Scrapped'),
(1593001289, 'Pc Lenovo M900 4GB SFF i5-6500', 'TO BE SCANNED', 'S4BS3752', 'Magasin IT', 'C', '0000-00-00', '', 'OK'),
(1593001375, 'LENOVO unit m910s i5-6500', 'TO BE SCANNED', 'S4DY3643', 'Magasin IT', 'C', '0000-00-00', '', 'OK'),
(1593001377, 'LENOVO unit m910s i5-6500', 'TO BE SCANNED', 'SS4DY3647', 'Magasin IT', 'C', '0000-00-00', '', 'OK'),
(1593001378, 'LENOVO unit m910s i5-6500', 'TO BE SCANNED', 'S4DY3648', 'Magasin IT', 'C', '0000-00-00', '', 'OK'),
(1593001379, 'LENOVO unit m910s i5-6500', 'TO BE SCANNED', 'S4DY3650', 'Magasin IT', 'C', '0000-00-00', '', 'OK'),
(1593001381, 'LENOVO unit m910s i5-6500', 'TO BE SCANNED', 'S4DY3653', 'Magasin IT', 'C', '0000-00-00', '', 'OK'),
(1593001382, 'LENOVO unit m910s i5-6500', 'TO BE SCANNED', 'S4DY3655', 'Magasin IT', 'C', '0000-00-00', '', 'OK'),
(1593001383, 'LENOVO unit m910s i5-6500', 'TO BE SCANNED', 'S4DY3657', 'Magasin IT', 'C', '0000-00-00', '', 'OK'),
(1593001391, 'LENOVO unit m910s i5-6500', '0', '14543177', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'scrap'),
(1593001392, 'LENOVO unit m910s i5-6500', '0', '11540299', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'scrap'),
(1593001393, 'LENOVO unit m910s i5-6500', '0', 'N/A', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'scrap'),
(1593001394, 'LENOVO unit m910s i5-6500', '0', 'N/A', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'scrap'),
(1593001396, 'HP Laser Jet M606dn', '0', 'CNDVK7F03B', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'in progress'),
(1593001397, 'HP Laser Jet M606dn', '0', 'CNDVK7F032', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'in progress'),
(1593001398, 'CENTRAL UNIT', 'TO BE SCANNED', '1S10MAS0M70CS4DY1619', 'Magasin IT', 'C', '0000-00-00', '', 'OK'),
(1593001399, 'CENTRAL UNIT', 'TO BE SCANNED', 'S4DY1621', 'Magasin IT', 'C', '0000-00-00', '', 'OK'),
(1593001400, 'CENTRAL UNIT', 'TO BE SCANNED', '1S10MAS0M70CS4DY1623', 'Magasin IT', 'C', '0000-00-00', '', 'OK'),
(1593001420, 'LAPTOP', '0', 'VNC4G11969', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'scrap'),
(1593001430, 'access Point', '0', 'N/A', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'scrap'),
(1593001469, 'PC Lenovo Think Center M710T', 'TO BE SCANNED', 'S4FK4345', 'Magasin IT', 'C', '0000-00-00', '', 'OK'),
(1593001480, 'PC Lenovo Think Center M910T', 'TO BE SCANNED', 'S4FJ7857', 'Magasin IT', 'C', '0000-00-00', '', 'OK'),
(1593001483, 'PC Lenovo Think Center M910T', 'TO BE SCANNED', 'S4FJ7866', 'Magasin IT', 'C', '0000-00-00', '', 'OK'),
(1593001484, 'PC Lenovo Think Center M910T', 'TO BE SCANNED', 'S4FJ7867', 'Magasin IT', 'C', '0000-00-00', '', 'OK'),
(1593001485, 'PC Lenovo Think Center M910T', 'TO BE SCANNED', 'S4FJ7868', 'Magasin IT', 'C', '0000-00-00', '', 'OK'),
(1593001489, 'PC Lenovo Think Center M910T', 'TO BE SCANNED', 'S4FJ7880', 'Magasin IT', 'C', '0000-00-00', '', 'OK'),
(1593001491, 'PC Lenovo Think Center M910T', 'TO BE SCANNED', 'S4FJ7882', 'Magasin IT', 'C', '0000-00-00', '', 'OK'),
(1593001515, 'Laptoop ThinkPad L470', '0', 'PF0X9JH4', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'base'),
(1593001523, 'Laptoop ThinkPad L470', '0', '001BBC236EF2', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'scrap'),
(1593001555, 'Compa II162 / 12 printer', 'TO BE SCANNED', '19548488', 'Magasin IT', 'C', '0000-00-00', '', 'OK'),
(1593001570, 'Lenovo ThinkPad T580', '0', 'R90V3DGO', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'base'),
(1593001593, 'compa II 162/12', '0', '19548700', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'base'),
(1593001615, 'Hand terminal 2D MC92N0', '0', '1.9149E+13', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'base'),
(1593001635, 'COMPA II162 / 12', '0', '19549092', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'base'),
(1593001638, 'COMPA II162 / 12', '0', '19549095', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'scrap'),
(1593001640, 'COMPA II162 / 12', '0', '19549097', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'scrap'),
(1593001651, 'COMPA II162/12', '0', '19549106', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'base'),
(1593001662, 'COMPA II162/12', '0', '19549117', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'base'),
(1593001664, 'COMPA II162/12', '0', '19549119', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'base'),
(1593001691, 'switch cisco Catalyst 9300L3', '0', 'N/A', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'scrap'),
(1593001748, 'Compa II 162/12', '0', '21540448', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'scrap'),
(1593001755, 'Compa II 162/12', '0', '21540455', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'base'),
(1593001757, 'Compa II 162/12', 'TO BE SCANNED', '21540457', 'Magasin IT', '', '0000-00-00', '', 'OK'),
(1593001759, 'MC 93N0 HandTerminal 2D', '0', '220495225036 70', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'base'),
(1593001760, 'MC 93N0 HandTerminal 2D', '0', '220495225038 51', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'base'),
(1593001761, 'MC 93N0 HandTerminal 2D', '0', '220495225035 08', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'base'),
(1593001762, 'MC 93N0 HandTerminal 2D', '0', '220495225035 11', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'base'),
(1593001763, 'MC 93N0 HandTerminal 2D', '0', '220495225037 97', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'base'),
(1593001764, 'HandTerminal MC93N0 Zebra', '0', 'S22049522503782', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'base'),
(1593001765, 'HandTerminal MC93N0 Zebra', '0', 'S22049522503597', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'base'),
(1593001766, 'HandTerminal MC93N0 Zebra', '0', 'S22049522503620', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'base'),
(1593001767, 'HandTerminal MC93N0 Zebra', '0', 'S22049522503590', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'base'),
(1593001768, 'HandTerminal MC93N0 Zebra', '0', 'S22049522503832', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'base'),
(1593001777, 'Compa III 162/12', 'TO BE SCANNED', '22420618', 'Magasin IT', '', '0000-00-00', '', 'OK'),
(1593001800, 'COMPA III 162/12', 'TO BE SCANNED', '22420608', 'Magasin IT', '', '0000-00-00', '', 'OK'),
(1593001803, 'Switch Meraki MS350-48FP L3', '0', 'Q2ZP-TD5X-4BXX ', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'base'),
(1593001804, 'Switch Meraki MS350-48FP L3', '0', 'Q2ZP-S6PU-9CG4', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'base'),
(1593001805, 'Switch Meraki MS350-48FP L3', '0', 'Q2ZP-RZBJ-HXK4', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'base'),
(1593001806, 'Switch Meraki MS350-48FP L3', '0', 'Q2ZP-SQP3-KVKA', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'base'),
(1593001807, 'Switch Meraki MS350-48FP L3', '0', 'Q2ZP-SNX8-FRJE ', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'base'),
(1593001808, 'Switch Meraki MS350-48FP L3', '0', 'Q2ZP-SU59-QZTD ', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'base'),
(1593001809, 'Switch Meraki MS350-48FP L3', '0', 'Q2ZP-T5J3-SXLZ', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'base'),
(1593001860, 'HandTerminal MC93', '0', 'S22148522508087', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'base'),
(1593001861, 'HandTerminal MC93', '0', 'S22148522508192', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'base'),
(1593001862, 'HandTerminal MC93', '0', 'S22148522508206', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'base'),
(1593001864, 'HandTerminal MC93', '0', 'S22148522508283', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'base'),
(1593001865, 'HandTerminal MC93', '0', 'S22148522508290', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'base'),
(1593001866, 'HandTerminal MC93', '0', 'S22148522508305', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'base'),
(1593001867, 'HandTerminal MC93', '0', 'S22148522508365', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'base'),
(1593001868, 'HandTerminal MC93', '0', 'S22148522508375', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'base'),
(1593001869, 'HandTerminal MC93', '0', 'S22148522508378', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'base'),
(1593001870, 'HandTerminal MC93', '0', 'S22148522508396', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'base'),
(1593001871, 'HandTerminal MC93', '0', 'S22148522508455', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'base'),
(1593001872, 'VMT 9010 YWIFE Terminal', '0', 'AX20325160', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'base'),
(1593001873, 'VMT 9010 YWIFE Terminal', '0', 'AX20325154', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'base'),
(1593001874, 'VMT 9010 YWIFE Terminal', '0', 'AX20325180', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'base'),
(1593001910, 'C9300L-48UXG-4X-E - Catalyst 9300L 48p', '0', 'SFOC2739Y4CU', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'base'),
(1593301675, 'SURVEILLANCE CAMERA', '0', '#N/A', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', 'scrap'),
(1593301676, 'SURVEILLANCE CAMERA', '0', '#N/A', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', ''),
(1593301677, 'SURVEILLANCE CAMERA', '0', '#N/A', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', ''),
(1593301678, 'SURVEILLANCE CAMERA', '0', '#N/A', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', ''),
(1593301679, 'SURVEILLANCE CAMERA', '0', '#N/A', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', ''),
(1593301680, 'SURVEILLANCE CAMERA', '0', '#N/A', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', ''),
(2147483647, 'ThinkPad L480 laptop', '0', 'PF1HXMCW', 'Magasin IT', 'Magasin IT', '0000-00-00', '0', '');

-- --------------------------------------------------------

--
-- Table structure for table `scrap`
--

CREATE TABLE `scrap` (
  `assets` int(10) NOT NULL,
  `description` varchar(400) NOT NULL,
  `SN` varchar(255) NOT NULL,
  `Scrap-Date` date NOT NULL,
  `attachement` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `scrap`
--

INSERT INTO `scrap` (`assets`, `description`, `SN`, `Scrap-Date`, `attachement`) VALUES
(1193000663, '#N/A', 'IMS-1002-INT    00:07:F9:00:72:52', '2020-10-09', 'uploads/decharge (1).pdf'),
(1493000719, '#N/A', 'JM907371889', '2020-10-09', 'uploads/decharge (1).pdf'),
(1493002901, '#N/A', '08J120601287', '0000-00-00', ''),
(1493002982, '#N/A', '08J114202779', '0000-00-00', ''),
(1593000001, '#N/A', 'N/A', '0000-00-00', ''),
(1593000004, '#N/A', 'JMX1509L0PH', '0000-00-00', ''),
(1593000025, '8 1 Printer dot standars ref: ZM400', '08J09320267', '2024-07-16', ''),
(1593000029, '1 STAMPANTE ZEBRA ZM400 SN 08J101100517', '08J101100517', '2024-07-16', ''),
(1593000069, '1 Computer HP COMPAQ 3120 PRO SCZC049223Z', 'CZC0030RRX', '0000-00-00', ''),
(1593000092, '\"1 Screen HP COMPAQ 19 \"\"WIDE TFT GP536AA\"', 'VNC6G41508', '0000-00-00', ''),
(1593000102, '1 Flat screen 18.5 AOPEN', '60P415J', '0000-00-00', ''),
(1593000103, '1 Flat screen 18.5 AOPEN', '11P415J', '0000-00-00', ''),
(1593000104, '1 Flat screen 18.5 AOPEN', 'CNU0333LN9', '0000-00-00', ''),
(1593000107, '1 PC DELL OPTIPLEX 990mt 13 / 2GB / 500GB / GRDVD', 'DCML15J', '0000-00-00', ''),
(1593000134, '\"1 DELL Screen 18.5 \"\"TFT E1910H 1523H3S\"', 'CN1342G2ZQ', '0000-00-00', ''),
(1593000170, '\"1 DELL Screen 18.5 \"\"TFT E1910H 1523H3S\"', 'HF6775J', '0000-00-00', ''),
(1593000173, '1 Computer DELL Optilex 380 E5800 / 2GB / 500 /', 'PTRF180517L', '0000-00-00', ''),
(1593000183, '1 PC optiplex 390mt widows 7 pro b210 365483', '5G6775J', '0000-00-00', ''),
(1593000191, '1 PC optiplex 390mt widows 7 pro b210 365483', 'JMX1304L0DF', '0000-00-00', ''),
(1593000201, '1 PC optiplex 390mt widows 7 pro b210 365483', 'P1531C4001514', '0000-00-00', ''),
(1593000202, '1 PC optiplex 390mt widows 7 pro b210 365483', 'P1572A8000586', '0000-00-00', ''),
(1593000221, '1 PC optiplex 390mt widows 7 pro b210 365483', 'NPCF280359L', '0000-00-00', ''),
(1593000222, '1 PC optiplex 390mt widows 7 pro b210 365483', 'VNC3B95516', '0000-00-00', ''),
(1593000238, '1 PC Lenovo M92p tc ci5-3550 3.3g 4GB W7P64 500GBD', 'PB748GE', '0000-00-00', ''),
(1593000265, '1 Server Hpproliant dl-360 g7 E5620 1p 4gb-r-SFF', 'A verifier le S/N', '0000-00-00', ''),
(1593000305, '1 PC Lenovo M92p tc ci5-3550 3.3g 4gb 500gb W7P64', 'PB7XD6B', '0000-00-00', ''),
(1593000308, '1 PC Lenovo M92p tc ci5-3550 3.3g 4gb 500gb W7P64', 'PB7XD6D', '0000-00-00', ''),
(1593000311, '1 PC Lenovo M92p tc ci5-3550 3.3g 4gb 500gb W7P64', '209NDCRJS171', '0000-00-00', ''),
(1593000360, '1 AP-5131-13043-WWR accespoint Motorola AP 5131 80', '1.13E+13', '0000-00-00', ''),
(1593000383, '1 PC Lenovo TC M92p Ci5-3550 3.3g 4gb 500gb W7P64', 'S4WGBY1', '0000-00-00', ''),
(1593000506, '\"1 Lenovo TP T530 4GB 2.9 g Ci7-3520M W7P64 15.6 \"', 'R9ZP2AV', '0000-00-00', ''),
(1593000507, '\"1 Lenovo TP T530 4GB 2.9 g Ci7-3520M W7P64 15.6 \"', 'R9ZP2AN', '0000-00-00', ''),
(1593000509, '\"1 Lenovo TP T530 4GB 2.9 g Ci7-3520M W7P64 15.6 \"', 'R9ZP2AR', '0000-00-00', ''),
(1593000528, '1 HP 2510-24 Switch + 2HP procurve 1000-sx-lc mini', '#N/A', '0000-00-00', ''),
(1593000644, '1 HP 2510-24 Switch + 2HP procurve 1000-sx-lc mini', '#N/A', '0000-00-00', ''),
(1593000646, '1 HP 2510-24 Switch + 2HP procurve 1000-sx-lc mini', '#N/A', '0000-00-00', ''),
(1593000650, '1 HP 2510-24 Switch + 2HP procurve 1000-sx-lc mini', '#N/A', '0000-00-00', ''),
(1593000651, '1 HP 2510-24 Switch + 2HP procurve 1000-sx-lc mini', '#N/A', '0000-00-00', ''),
(1593000661, '1 HP 2510-24 Switch + 2HP procurve 1000-sx-lc mini', '#N/A', '0000-00-00', ''),
(1593000678, '1 HP 2510-24 Switch + 2HP procurve 1000-sx-lc mini', '#N/A', '0000-00-00', ''),
(1593000843, 'IT Equipment', 'PB00LCGV', '0000-00-00', ''),
(1593000916, 'Lenovo PC TC M93P SFF i5-4670 3.4 billion PRO 4GB', '#N/A', '0000-00-00', ''),
(1593000922, 'Lenovo PC TC M93P SFF i5-4670 3.4 billion PRO 4GB', '#N/A', '0000-00-00', ''),
(1593000978, 'BACKUP SERVER ADMIN', 'MRJHB11001425003A55900', '0000-00-00', ''),
(1593000979, 'BACKUP SERVER ADMIN', 'N/A', '0000-00-00', ''),
(1593000994, 'terminals sagem MA520 + d / pointeuse', 'CNCHC54178', '0000-00-00', ''),
(1593001068, 'Think Center M93P standard SSF', 'N\\A', '0000-00-00', ''),
(1593001172, 'LAPTOP think pad L460', '1546019', '0000-00-00', ''),
(1593001391, 'LENOVO unit m910s i5-6500', '14543177', '0000-00-00', ''),
(1593001392, 'LENOVO unit m910s i5-6500', '11540299', '0000-00-00', ''),
(1593001393, 'LENOVO unit m910s i5-6500', 'N/A', '0000-00-00', ''),
(1593001394, 'LENOVO unit m910s i5-6500', 'N/A', '0000-00-00', ''),
(1593001420, 'LAPTOP', 'VNC4G11969', '0000-00-00', ''),
(1593001430, 'access Point', 'N/A', '0000-00-00', ''),
(1593001523, 'Laptoop ThinkPad L470', '001BBC236EF2', '0000-00-00', ''),
(1593001638, 'COMPA II162 / 12', '19549095', '0000-00-00', ''),
(1593001640, 'COMPA II162 / 12', '19549097', '0000-00-00', ''),
(1593001691, 'switch cisco Catalyst 9300L3', 'N/A', '0000-00-00', ''),
(1593001748, 'Compa II 162/12', '21540448', '0000-00-00', ''),
(1593301675, 'SURVEILLANCE CAMERA', '#N/A', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `email`, `password`) VALUES
('nadaDaadi', NULL, '1234'),
('user', NULL, 'u');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`assets`);

--
-- Indexes for table `scrap`
--
ALTER TABLE `scrap`
  ADD PRIMARY KEY (`assets`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD UNIQUE KEY `username` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
