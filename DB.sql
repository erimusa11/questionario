-- --------------------------------------------------------
-- Host:                         81.31.151.15
-- Server version:               10.3.27-MariaDB-log - MariaDB Server
-- Server OS:                    Linux
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for interna5_surdb
CREATE DATABASE IF NOT EXISTS `interna5_surdb` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `interna5_surdb`;

-- Dumping structure for table interna5_surdb.answers
CREATE TABLE IF NOT EXISTS `answers` (
  `answer_id` int(11) NOT NULL AUTO_INCREMENT,
  `answer` text DEFAULT NULL,
  `question_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`answer_id`),
  KEY `FK_answers_questions` (`question_id`),
  KEY `FK_answers_users` (`user_id`),
  CONSTRAINT `FK_answers_questions` FOREIGN KEY (`question_id`) REFERENCES `questions` (`question_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_answers_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=95 DEFAULT CHARSET=latin1;

-- Dumping data for table interna5_surdb.answers: ~5 rows (approximately)
/*!40000 ALTER TABLE `answers` DISABLE KEYS */;
INSERT INTO `answers` (`answer_id`, `answer`, `question_id`, `user_id`) VALUES
	(15, 'Molto', 1, 30),
	(16, 'Si', 2, 30),
	(17, 'No', 4, 30),
	(18, 'Molto', 1, 31),
	(19, 'No', 2, 31);
/*!40000 ALTER TABLE `answers` ENABLE KEYS */;

-- Dumping structure for table interna5_surdb.colleagues
CREATE TABLE IF NOT EXISTS `colleagues` (
  `colleague_id` int(11) NOT NULL AUTO_INCREMENT,
  `colleague_nome` varchar(100) DEFAULT NULL,
  `colleague_phone` varchar(50) DEFAULT NULL,
  `colleague_email` varchar(50) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`colleague_id`),
  KEY `FK__users` (`user_id`),
  CONSTRAINT `FK__users` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

-- Dumping data for table interna5_surdb.colleagues: ~0 rows (approximately)
/*!40000 ALTER TABLE `colleagues` DISABLE KEYS */;
/*!40000 ALTER TABLE `colleagues` ENABLE KEYS */;

-- Dumping structure for table interna5_surdb.login_users
CREATE TABLE IF NOT EXISTS `login_users` (
  `userLog_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`userLog_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table interna5_surdb.login_users: ~1 rows (approximately)
/*!40000 ALTER TABLE `login_users` DISABLE KEYS */;
INSERT INTO `login_users` (`userLog_id`, `username`, `password`, `name`, `lastname`) VALUES
	(1, 'simonebrancozzi', 'simone#2020@', 'Simone', 'Brancozzi');
/*!40000 ALTER TABLE `login_users` ENABLE KEYS */;

-- Dumping structure for table interna5_surdb.questions
CREATE TABLE IF NOT EXISTS `questions` (
  `question_id` int(11) NOT NULL AUTO_INCREMENT,
  `question` text DEFAULT NULL,
  PRIMARY KEY (`question_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Dumping data for table interna5_surdb.questions: ~5 rows (approximately)
/*!40000 ALTER TABLE `questions` DISABLE KEYS */;
INSERT INTO `questions` (`question_id`, `question`) VALUES
	(1, 'Sei soddisfatto di tutto il pacchetto di: \r\nCruscotto di controllo, Network, Training camp, Aggiornamenti, Assistenza, Consulenza'),
	(2, 'Saresti disposto a segnalarci qualche tuo collega a cui proporre lo stesso servizio'),
	(3, 'In particolare quale servizio non ti ha soddisfatto'),
	(4, 'Saresti disposto a fare una telefonata di presentazione prima di un nostro contatto'),
	(5, 'In particolare cosa non ti è piacuto'),
	(6, 'Vuoi che contattiamo i tuoi colleghi'),
	(7, 'Quali colleghi potresti segnalarci');
/*!40000 ALTER TABLE `questions` ENABLE KEYS */;

-- Dumping structure for table interna5_surdb.users
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(25) DEFAULT NULL,
  `user_lastname` varchar(25) DEFAULT NULL,
  `user_email` varchar(50) DEFAULT NULL,
  `user_phone` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

-- Dumping data for table interna5_surdb.users: ~2 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`user_id`, `user_name`, `user_lastname`, `user_email`, `user_phone`) VALUES
	(30, 'FABIO', 'MAZZOCCHI', 'fabiomazzocchi@studiomazzocchi1948.it', '3388703799'),
	(31, 'Alessandro', 'Villa', 'alessandro.villa@vmvassociati.it', '3478932743');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
