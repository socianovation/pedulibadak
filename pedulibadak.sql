-- Adminer 4.2.5 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `about_us`;
CREATE TABLE `about_us` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varbinary(255) NOT NULL,
  `content` text NOT NULL,
  `type` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `about_us` (`id`, `title`, `content`, `type`) VALUES
(1,	UNHEX('53656A61726168'),	'PEDULIBADAK-Indonesia merupakan yayasan independen yang terdaftar sesuai hukum Indonesia. Dikelola oleh Dewan Penyantun yang terdiri dari Dewan Penasihat, Dewan Pengawas dan Dewan Pelaksana. Dewan ini berfungsi sebagai lembaga penentu arahan strategis dan kredibilitas PEDULIBADAK-Indonesia. Para anggota dewan berbagi tanggung jawab secara kelembagaan melalui komite operasional. Dua komite yang sedang dalam tahap pengembangan adalah Komite Pendanaan dan Investasi serta Komite Program.\r\nKantor Sekretariat Nasional PEDULIBADAK-Indonesia berada di Jakarta. Perannya memimpin dan berkoordinasi dengan 24 kantor PEDULIBADAK-Indonesia yang tersebar di seluruh negeri. Kantor Sekretariat mengembangkan kebijakan dan prioritas, membantu pertukaran pembelajaran antar kantor, melakukan koordinasi untuk kampanye nasional, memberikan bantuan teknis dan pengembangan kapasitas, serta memberikan dukungan agar kegiatan ditingkat nasional berjalan dengan lancar. Kantor Sekretariat Nasional juga menjaga agar upaya PEDULIBADAK-Indonesia selaras dengan Global PEDULIBADAK Network.\r\n \r\nPEDULIBADAK-Indonesia memiliki sejumlah kantor lapangan (Field Office). Dua dari Kantor lapangan ini, melakukan koordinasi untuk kegiatan dan program di lokasi konservasi. Kantor Lapangan Jayapura merupakan kantor terbesar yang ada dipimpin oleh Benja Mambai. Kantor ini mengkoordinasi seluruh kegiatan PEDULIBADAK-Indonesia di Papua dan Irian Jaya bagian Barat. Kantor Lapangan Mataram, melakukan koordinasi bagi kerja PEDULIBADAK-Indonesia di wilayah Nusa Tenggara.\r\n \r\nKantor lapangan tersebut melakukan upaya pelestarian di tingkat lokal. Kami bekerja sama dengan pemerintah lokal, melalui kegiatan proyek praktis di lapangan, penelitian ilmiah, memberi masukan untuk kebijakan lingkungan, mempromosikan pendidikan lingkungan, memperkuat komunitas, dan meningkatkan kesadaran publik terhadap isu lingkungan.\r\n \r\nPEDULIBADAK-Indonesia merupakan bagian independen dari jaringan dari PEDULIBADAK dan afiliasinya, organisasi pelestarian global yang bekerja di 100 negara di dunia. Untuk informasi lebih lanjut tentang visi global, sejarah dan keterlibatan kami selama ini untuk mencapai mimpi pelestarian kami yaitu mewujudkan dunia dimana manusia dapat hidup selaras dengan alam klik di sini.',	'about');

DROP TABLE IF EXISTS `behaviour`;
CREATE TABLE `behaviour` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `evolutions`;
CREATE TABLE `evolutions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `fun_fact`;
CREATE TABLE `fun_fact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `gallery`;
CREATE TABLE `gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `source` varchar(255) NOT NULL,
  `type` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `gallery` (`id`, `title`, `description`, `source`, `type`) VALUES
(1,	'Badak 1',	'Badak Bercula 1',	'https://lingkunganhidup.co/wp-content/uploads/2016/05/jenis-badak-putih.jpg',	'image'),
(2,	'Badak 2',	'Badak dan anaknya',	'http://img.antaranews.com/new/2015/06/ori/20150618antarafoto-badak-afrika-180615-mtoh-1.jpg',	'image');

DROP TABLE IF EXISTS `journal`;
CREATE TABLE `journal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` int(11) NOT NULL,
  `content` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `news_events`;
CREATE TABLE `news_events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `statistic`;
CREATE TABLE `statistic` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- 2017-09-28 04:09:44
