CREATE TABLE `shouts` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `user` varchar(50) NOT NULL,
 `message` text NOT NULL,
 `time` time NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1