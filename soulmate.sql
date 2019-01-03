-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2019 at 03:18 PM
-- Generation Time: Jan 03, 2019 at 03:22 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

@@ -11,46 +11,69 @@
 SET AUTOCOMMIT = 0;
 START TRANSACTION;
 SET time_zone = "+00:00";
 
 
 /*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
 /*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
 /*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 /*!40101 SET NAMES utf8mb4 */;
 
 --
 -- Database: `soulmate`
 --
 
 -- --------------------------------------------------------
 
 --
 -- Table structure for table `account`
 --
 
 CREATE TABLE `account` (
   `Username` varchar(100) NOT NULL,
   `Password` varchar(100) NOT NULL,
   `Email` varchar(100) NOT NULL,
   `Fullname` varchar(100) DEFAULT NULL,
   `Address` varchar(100) DEFAULT NULL,
   `ContactNumber` varchar(100) DEFAULT NULL,
   `Age` int(11) DEFAULT NULL,
   `AccessLevel` varchar(15) DEFAULT NULL
 ) ENGINE=InnoDB DEFAULT CHARSET=latin1;
 
 --
 -- Dumping data for table `account`
 --
 
 INSERT INTO `account` (`Username`, `Password`, `Email`, `Fullname`, `Address`, `ContactNumber`, `Age`, `AccessLevel`) VALUES
 ('Admin123', 'Admin', 'duy1234@gmail.com', 'Duy123', 'DuyAddress', '09563729475', 27, 'Admin'),
 ('Duy1234', 'Duy1234', 'duy1234@gmail.com', 'Duy123', 'DuyAddress', '0123545232', 30, 'Member'),
 ('Hung1234', 'Hung1234', 'duy1234@gmail.com', 'Duy123', 'DuyAddress', '09563729475', 27, 'Member'),
 ('Linh1234', 'Linh1234', 'duy1234@gmail.com', 'Duy123', 'DuyAddress', '09563729475', 27, 'Member'),
('NguyenDuy', '57ba172a6be125cca2f449826f9980ca', 'duy1234@gmail.com', 'Duy123', 'DuyAddress', '09563729475', 27, 'Member'),
('Tuan1234', 'Tuan1234', 'duy1234@gmail.com', 'Duy123', 'DuyAddress', '09563729475', 27, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `ID` int(11) NOT NULL,
  `Username` varchar(100) DEFAULT NULL,
  `Image` blob,
  `About` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`ID`, `Username`, `Image`, `About`) VALUES
(1, NULL, 0xffd8ffe000104a46494600010201006000600000ffe110364578696600004d4d002a0000000800070132000200000014000000624746000300000001000300004749000300000001002600008298000200000016000000769c9d00010000001800000000ea1c0007000007d20000000087690004000000010000008c000000f6323030393a30333a31322031333a34383a3138004d6963726f736f667420436f72706f726174696f6e0000059003000200000014000000ce9004000200000014000000e2929100020000000330300000929200020000000330300000ea1c0007000007b40000000000000000323030383a30333a32342031363a34313a353300323030383a30333a32342031363a34313a3533000005010300030000000100060000011a00050000000100000138011b00050000000100000140020100040000000100000148020200040000000100000ee60000000000000048000000010000004800000001ffd8ffe000104a46494600010100000100010000ffdb004300100b0c0e0c0a100e0d0e1211101318281a181616183123251d283a333d3c3933383740485c4e404457453738506d51575f626768673e4d71797064785c656763ffdb0043011112121815182f1a1a2f6342384263636363636363636363636363636363636363636363636363636363636363636363, NULL),
(9, NULL, 0x4465736572742e6a7067, NULL),
(10, NULL, 0x4368727973616e7468656d756d2e6a7067, NULL),
(11, NULL, 0x4465736572742e6a7067, NULL);

--
-- Indexes for dumped tables
--
@@ -60,6 +83,33 @@ INSERT INTO `account` (`Username`, `Password`, `Email`, `Fullname`, `Address`, `
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `fk_Username` (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `photos`
--
ALTER TABLE `photos`
  ADD CONSTRAINT `fk_Username` FOREIGN KEY (`Username`) REFERENCES `account` (`Username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;