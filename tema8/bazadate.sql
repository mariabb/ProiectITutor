-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.11-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             10.3.0.5771
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table test.users
CREATE TABLE IF NOT EXISTS `users` (
  `ID_Users` int(5) NOT NULL AUTO_INCREMENT,
  `nume` varchar(50) NOT NULL DEFAULT '',
  `prenume` varchar(50) NOT NULL DEFAULT '',
  `telefon` varchar(50) NOT NULL DEFAULT '',
  `adresa` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`ID_Users`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COMMENT='primul tabel';

-- Dumping data for table test.users: ~2 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`ID_Users`, `nume`, `prenume`, `telefon`, `adresa`) VALUES
	(1, 'Popescu', 'Dan', '0746110662', 'Bucuresti, Str. Aviatorilor Ne.6 ap.5'),
	(2, 'Ionescu', 'Gheorghe', '0746111222', 'Urziceni');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
