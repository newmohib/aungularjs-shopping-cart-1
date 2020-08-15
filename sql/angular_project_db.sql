
CREATE DATABASE IF NOT EXISTS angular_project;
USE angular_project;

DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;


INSERT INTO `category` (`id`,`name`) VALUES 
 (1,'Fruits'),
 (2,'Vegetables'),
 (3,'Households');

DROP TABLE IF EXISTS `order_details`;
CREATE TABLE `order_details` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` int(10) unsigned NOT NULL,
  `item_id` int(10) unsigned NOT NULL,
  `qty` double NOT NULL,
  `price` double NOT NULL,
  PRIMARY KEY (`id`)
) ;


INSERT INTO `order_details` (`id`,`order_id`,`item_id`,`qty`,`price`) VALUES 
 (1,1,1,1,10),
 (2,1,4,1,6),
 (3,2,1,1,10),
 (4,2,2,1,5),
 (5,2,4,4,6),
 (6,2,5,2,2),
 (7,3,2,4,5),
 (8,3,5,3,2),
 (9,3,1,5,10),
 (10,4,2,2,5),
 (11,4,4,2,6);

DROP TABLE IF EXISTS `order_master`;
CREATE TABLE `order_master` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(50) NOT NULL,
  `shipping_address` text,
  `remark` text,
  `order_datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `payment_method` varchar(20) NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ;

INSERT INTO `order_master` (`id`,`customer_name`,`shipping_address`,`remark`,`order_datetime`,`payment_method`,`email`) VALUES 
 (1,'Samiha Islam','Australia','test','2017-12-11 15:42:04','VISA Card',NULL),
 (2,'Jahidul Islam','Rampura','test','2017-12-11 15:44:42','Master Card',NULL),
 (3,'Ruhul Amin','Mohammadpur','test','2017-12-11 16:12:37','Cupon',NULL),
 (4,'Mizanur Rahman','Dhanmondi','Test','2017-12-11 16:30:55','Master Card',NULL);

DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `photo` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `new_price` double NOT NULL,
  `old_price` double NOT NULL,
  `uom` varchar(45) NOT NULL,
  `category_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ;

INSERT INTO `products` (`id`,`photo`,`name`,`new_price`,`old_price`,`uom`,`category_id`) VALUES 
 (1,'2.png','Fresh Bananas',10,12,'kg',1),
 (2,'2.jpg','Fresh Cauliflower',5,8,'kg',2),
 (4,'4.png','Fresh Sweet Lime',6,7,'gm',2),
 (5,'5.png','Fresh Spinach (Palak)',2,3,'bundle',3),
 (6,'5.png','Fresh Spinach (Palak)',2,3,'bundle',3),
 (7,'6.jpg','Best Tulips',30,40,'piece',3),
 (8,'9.jpg','Best Tulips',30,40,'piece',1);

DROP TABLE IF EXISTS `role`;
CREATE TABLE `role` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ;


INSERT INTO `role` (`id`,`name`) VALUES 
 (2,'Admin'),
 (3,'User');

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) NOT NULL,
  `inactive` tinyint(1) NOT NULL DEFAULT '0',
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ;

INSERT INTO `user` (`id`,`username`,`password`,`inactive`,`role_id`) VALUES 
 (5,'mohib','123456Aa',0,2),
 (10,'Jahid','123456Aa',0,3);
