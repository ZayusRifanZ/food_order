# Host: localhost  (Version 5.5.5-10.1.31-MariaDB)
# Date: 2019-01-05 00:21:57
# Generator: MySQL-Front 6.1  (Build 1.26)


#
# Structure for table "food_order"
#

DROP TABLE IF EXISTS `food_order`;
CREATE TABLE `food_order` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `makan` varchar(255) DEFAULT NULL,
  `minum` varchar(255) DEFAULT NULL,
  `meja` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "food_order"
#

