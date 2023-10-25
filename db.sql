-- db_cpk_foot.data_foot definition

CREATE TABLE `data_foot` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `columnA` varchar(10) DEFAULT NULL,
  `data` float DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27607 DEFAULT CHARSET=utf8mb4;