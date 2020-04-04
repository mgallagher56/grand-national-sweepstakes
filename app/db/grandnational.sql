/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

CREATE TABLE `grandnational` (
  `id` tinyint(4) DEFAULT NULL,
  `horses` varchar(255) DEFAULT NULL,
  `odds` varchar(255) DEFAULT NULL,
  `selected` int(11) NOT NULL DEFAULT 0,
  `name` varchar(255) NOT NULL,
  `jockey` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `grandnational` (`id`, `horses`, `odds`, `selected`, `name`, `jockey`) VALUES
(1, '1 Tiger Roll', '5-1', 0, '', 'Davy Russell');
INSERT INTO `grandnational` (`id`, `horses`, `odds`, `selected`, `name`, `jockey`) VALUES
(2, '2 Bristol De Mai', '20-1', 0, '', 'Daryl Jacob');
INSERT INTO `grandnational` (`id`, `horses`, `odds`, `selected`, `name`, `jockey`) VALUES
(3, '3 Aso', '66-1', 0, '', 'Charlie Deutsch');
INSERT INTO `grandnational` (`id`, `horses`, `odds`, `selected`, `name`, `jockey`) VALUES
(4, '4 Elegant Escape', '20-1', 0, '', 'Jonjo O\'Neill jnr'),
(5, '5 Anibale Fly', '20-1', 0, '', 'Barry Geraghty'),
(6, '6 Top Ville Ben', '45-1', 0, '', 'Tom Dowson'),
(7, '7 Beware The Bear', '33-1', 0, '', 'Jerry McGrath'),
(8, '8 Peregrine Run', '66-1', 0, '', 'Kevin Sexton'),
(9, '9 Jett', '50-1', 0, '', 'Sam Waley-Cohen'),
(10, '10 Alpha Des Obeaux', '25-1', 0, '', 'Richard Johnson'),
(11, '11 Total Recall', '40-1', 0, '', 'Paul Townend'),
(12, '12 The Storyteller', '40-1', 0, '', 'Keith Donoghue'),
(13, '13 Magic Of Light', '18-1', 0, '', 'Robbie Power'),
(14, '14 Talkischeap', '25-1', 0, '', 'Tom Cannon'),
(15, '15 Yala Enki', '28-1', 0, '', 'Bryony Frost'),
(16, '16 Ballyoptic', '25-1', 0, '', 'Sam Twiston-Davies'),
(17, '17 Burrows Saint', '12-1', 0, '', 'Rachael Blackmore'),
(18, '18 Definitly Red', '14-1', 0, '', 'Brian Hughes'),
(19, '19 Sub Lieutenant', '33-1', 0, '', 'JJ Slevin'),
(20, '20 Ok Corral', '25-1', 0, '', 'Derek O\'Connor'),
(21, '21 Tout Est Permis', '80-1', 0, '', 'Sean Flanagan'),
(22, '22 Vintage Clouds', '33-1', 0, '', 'Danny Cook'),
(23, '23 Crievehill', '66-1', 0, '', 'Tom Bellamy'),
(24, '24 Lake View Lad', '50-1', 0, '', 'Henry Brooke'),
(25, '25 Jury Duty', '40-1', 0, '', 'Mark Enright'),
(26, '26 Pleasant Company', '28-1', 0, '', 'David Mullins'),
(27, '27 Acapella Bourgeois', '33-1', 0, '', 'Danny Mullins'),
(28, '28 Shattered Love', '66-1', 0, '', 'Lisa O\'Neill'),
(29, '29 Any Second Now', '10-1', 0, '', 'Mark Walsh'),
(30, '30 Potters Corner', '18-1', 0, '', 'Jack Tudor'),
(31, '31 Dounikos', '50-1', 0, '', 'Luke Dempsey'),
(32, '32 Kildisart', '50-1', 0, '', 'Nico de Boinville'),
(33, '33 Death Duty', '50-1', 0, '', 'Gavin Brouder'),
(34, '34 Ramses De Teillee', '66-1', 0, '', 'Tom Scudamore'),
(35, '35 Valtor', '66-1', 0, '', 'James Bowen'),
(36, '36 Saint Xavier', '66-1', 0, '', 'David Maxwell'),
(37, '37 Warriors Tale', '80-1', 0, '', 'Harry Cobden'),
(38, '38 Double Shuffle', '100-1', 0, '', 'Jonathan Burke'),
(39, '39 Kimberlite Candy', '16-1', 0, '', 'Richie McLernon'),
(40, '40 Walk In The Mill', '16-1', 0, '', 'James Best');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;