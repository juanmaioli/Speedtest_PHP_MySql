CREATE TABLE `speedtest` (
`id` INT ( 11 ) NOT NULL AUTO_INCREMENT,
`ip` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
`hostname` varchar(40) COLLATE utf8_spanish2_ci NOT NULL,
`date_test` datetime NOT NULL,
`ping` FLOAT NOT NULL DEFAULT '0',
`download` FLOAT NOT NULL DEFAULT '0',
`upload` FLOAT NOT NULL DEFAULT '0',
PRIMARY KEY ( `id` ),
KEY `cava_date` ( `date_test` ) 
) ENGINE = INNODB AUTO_INCREMENT = 0 DEFAULT CHARSET = utf8 COLLATE = utf8_spanish2_ci;
