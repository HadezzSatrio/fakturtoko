-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.32-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.6.0.6765
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for fakturtoko
CREATE DATABASE IF NOT EXISTS `fakturtoko` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `fakturtoko`;

-- Dumping structure for table fakturtoko.barang
CREATE TABLE IF NOT EXISTS `barang` (
  `kdbarang` varchar(11) NOT NULL DEFAULT '',
  `namabarang` varchar(50) NOT NULL DEFAULT '',
  `harga` varchar(20) NOT NULL,
  PRIMARY KEY (`kdbarang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Data exporting was unselected.

-- Dumping structure for table fakturtoko.dfaktur
CREATE TABLE IF NOT EXISTS `dfaktur` (
  `nofaktur` int(11) NOT NULL,
  `kdbarang` varchar(11) NOT NULL DEFAULT '',
  `qty` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  KEY `FK_dfaktur_faktur` (`nofaktur`),
  KEY `FK_dfaktur_barang` (`kdbarang`),
  CONSTRAINT `FK_dfaktur_barang` FOREIGN KEY (`kdbarang`) REFERENCES `barang` (`kdbarang`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_dfaktur_faktur` FOREIGN KEY (`nofaktur`) REFERENCES `faktur` (`nofaktur`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Data exporting was unselected.

-- Dumping structure for table fakturtoko.faktur
CREATE TABLE IF NOT EXISTS `faktur` (
  `nofaktur` int(11) NOT NULL,
  `kdpemasok` varchar(10) NOT NULL,
  `tanggal` date NOT NULL,
  `totalfaktur` int(11) NOT NULL DEFAULT 0,
  `tempo` date NOT NULL,
  PRIMARY KEY (`nofaktur`),
  KEY `FK_faktur_pemasok` (`kdpemasok`),
  CONSTRAINT `FK_faktur_pemasok` FOREIGN KEY (`kdpemasok`) REFERENCES `pemasok` (`kdpemasok`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Data exporting was unselected.

-- Dumping structure for table fakturtoko.pemasok
CREATE TABLE IF NOT EXISTS `pemasok` (
  `kdpemasok` varchar(10) NOT NULL,
  `namapemasok` varchar(50) NOT NULL,
  PRIMARY KEY (`kdpemasok`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Data exporting was unselected.

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
