-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.28-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping data for table ezoom_test.characters: ~26 rows (approximately)
/*!40000 ALTER TABLE `characters` DISABLE KEYS */;
INSERT INTO `characters` (`id`, `tv_show_id`, `name`, `slug`, `image_url`) VALUES
	(1, 3, 'Nairobi', 'nairobi', 'https://universoestendido.com.br/wp-content/uploads/2018/01/nairobi-la-casa-de-papel-netflix.jpg'),
	(2, 3, 'Moscou', 'moscou', 'https://spoilertime.com/wp-content/uploads/2018/01/Moscu-780x442.jpg'),
	(3, 3, 'Professor', 'professor', 'https://cdn.ome.lt/uploads/conteudo/fotos/professor.jpg'),
	(10, 3, 'Tokio', 'tokio', 'https://occ-0-2433-444.1.nflxso.net/art/c625d/161c6162537442c844620a8c1c888ecd20cc625d.jpg'),
	(11, 3, 'Berlin', 'berlin', 'https://universoestendido.com.br/wp-content/uploads/2018/01/berlin-la-casa-de-papel-netflix.jpg'),
	(14, 3, 'Helsinki', 'helsinki', 'https://steemit-production-imageproxy-upload.s3.amazonaws.com/DQmRhNyQw2mb1VTXDZBfzUJpySWkU5g76viWGycHo4y9qi3'),
	(16, 3, 'Denver', 'denver', 'http://fotografias.antena3.com/clipping/cmsimages02/2017/03/30/44310114-1382-417F-A893-D68D9222ED31/58.jpg'),
	(17, 3, 'Raquel Murillo', 'raquel-murillo', 'https://vignette.wikia.nocookie.net/lacasadepapel/images/4/4e/Lacp_Raquel.jpg/revision/latest?cb=20171126144033&path-prefix=es'),
	(18, 3, 'Rio', 'rio', 'https://universoestendido.com.br/wp-content/uploads/2018/01/rio-la-casa-de-papel-netflix.jpg'),
	(19, 3, 'Mónica Gaztambide', 'monica-gaztambide', 'https://vignette.wikia.nocookie.net/lacasadepapel/images/1/1c/Lacp_M%C3%B3nica.jpg/revision/latest?cb=20171126151031&path-prefix=es'),
	(20, 3, 'Arturo Román', 'arturo-roman', 'http://fotografias.antena3.com/clipping/cmsimages02/2017/05/01/E3C43AD7-F669-4399-8A5F-D20DC55E91D0/58.jpg'),
	(21, 3, 'Alison Parker', 'alison-parker', 'https://vignette.wikia.nocookie.net/lacasadepapel/images/8/8e/Lacp_Alison.jpg/revision/latest?cb=20171127190935&path-prefix=es'),
	(22, 3, 'Mariví', 'marivi', 'https://st-listas.20minutos.es/images/2017-05/421595/5173184_640px.jpg?1496077448'),
	(23, 2, ' Rachel Green', 'rachel-green', 'https://vignette.wikia.nocookie.net/loveinterest/images/9/93/Rachel_Green.png/revision/latest?cb=20160419025450'),
	(24, 2, 'Monica Geller', 'monica-geller', 'https://vignette.wikia.nocookie.net/friends/images/c/c2/Monica-Gellar.jpg/revision/latest?cb=20130802071243'),
	(25, 2, 'Phoebe Buffay', 'phoebe-buffay', 'https://lgbtfansdeservebetter.com/static/uploads/2016/09/Phoebe-Buffay-Lisa-Kudrow.png'),
	(26, 2, 'Joey Tribbiani', 'joey-tribbiani', 'https://typeset-beta.imgix.net/uploads/image/2017/8/22/4dbabff7-c8bd-4817-abff-a413fd946e49-joey-tribbiani-pineapple.jpg'),
	(27, 2, 'Chandler Bing', 'chandler-bing', 'https://az616578.vo.msecnd.net/files/2016/10/21/636126223749784941-578037032_matthew-perry-as-chandler-bing-in-friends.png'),
	(28, 2, 'Ross Geller', 'ross-geller', 'https://peopledotcom.files.wordpress.com/2017/02/ross-geller.jpg?w=2000'),
	(29, 1, 'Shaun Murphy', 'shaun-murphy', 'https://disco.pstatic.net/common?src=http%3A%2F%2Fblogfiles.naver.net%2FMjAxODAxMjJfMTI0%2FMDAxNTE2NjI3NzM3MjYw.eAu3G1ddcuKPgWSCUu_H-jHIpBEAghQCzfBccsdnxbQg.Mczxx7Z8l2E3XWZBC1byc5K85Uo3bga-Kf8PH-Z2qy8g.JPEG.eni0507%2F%25C2%25BC%25C3%25B0%25C2%25B8%25C3%25'),
	(30, 1, 'Claire Brown', 'claire-brown', 'http://www2.pictures.zimbio.com/mp/hKqI_-__8h3l.jpg'),
	(31, 1, 'Neal Melendez', 'neal-melendez', 'https://www.axn.pt/sites/pt.axn/files/ct_character_f_primary_image/146496_0516.jpg'),
	(32, 1, 'Jared Kalu', 'jared-kalu', 'https://d24v5oonnj2ncn.cloudfront.net/wp-content/uploads/2017/09/15031616/146538_0376.jpg'),
	(33, 1, 'Jessica Preston', 'jessica-preston', 'https://www.axn.co.mz/sites/pt.axn/files/ct_character_f_primary_image/146496_1037.jpg'),
	(34, 1, 'Marcus Andrews', 'marcus-andrews', 'https://vignette.wikia.nocookie.net/the-good-doctor/images/b/b8/Dr._Marcus_Andrews.png/revision/latest?cb=20170927112917'),
	(35, 1, 'Aaron Glassman', 'aaron-glassman', 'https://www.axn.pt/sites/pt.axn/files/ct_character_f_primary_image/146496_1347.jpg');
/*!40000 ALTER TABLE `characters` ENABLE KEYS */;

-- Dumping data for table ezoom_test.tv_shows: ~4 rows (approximately)
/*!40000 ALTER TABLE `tv_shows` DISABLE KEYS */;
INSERT INTO `tv_shows` (`id`, `name`, `slug`, `image_url`, `youtube_embed_url`, `short_description`) VALUES
	(1, 'The Good Doctor', 'the-good-doctor', 'https://images-na.ssl-images-amazon.com/images/M/MV5BMTU0Nzk2MDE2MV5BMl5BanBnXkFtZTgwMzg0MzI3MzI@._V1_.jpg', 'https://www.youtube.com/embed/ogw3ax8WJfs', 'Shaun Murphy, um jovem cirurgião com autismo e síndrome de Savant, é recrutado para a unidade cirúrgica de um hospital de prestígio.'),
	(2, 'Friends', 'friends', 'https://images-na.ssl-images-amazon.com/images/M/MV5BMTg4NzEyNzQ5OF5BMl5BanBnXkFtZTYwNTY3NDg4._V1._CR24,0,293,443_.jpg', 'https://www.youtube.com/embed/SHvzX2pl2ec', 'Acompanhe a vida pessoal e profissional de seis amigos de 20 a 30 e poucos anos que vivem em Manhattan.'),
	(3, 'La Casa de Papel', 'la-casa-de-papel', 'https://images-na.ssl-images-amazon.com/images/M/MV5BMzBlY2QzNzYtMWU1NS00NjFkLWJiMzItYmM3YTc4MDFjNDQwXkEyXkFqcGdeQXVyMTA0MjU0Ng@@._V1_SY1000_CR0,0,667,1000_AL_.jpg', 'https://www.youtube.com/embed/ANNk3E0YGRU', 'Um grupo de ladrões muito peculiares assaltou a Fábrica de Moneda e Timbre para realizar o assalto mais perfeito na história da Espanha e levar para casa 2.400 milhões de euros.'),
	(18, 'Band of Brothers', 'band-of-brothers', 'https://images-na.ssl-images-amazon.com/images/M/MV5BMTI3ODc2ODc0M15BMl5BanBnXkFtZTYwMjgzNjc3._V1_.jpg\r\n', 'https://www.youtube.com/embed/sYLSfn5tUpw\r\n', 'A história da Companhia Easy da 101ª Divisão Aeronáutica do Exército dos EUA, e sua missão na Segunda Guerra Mundial da Europa, da Operação Overlord, até o Dia V-J.\r\n');
/*!40000 ALTER TABLE `tv_shows` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
