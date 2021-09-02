/*
SQLyog Ultimate v12.4.3 (64 bit)
MySQL - 5.6.42 : Database - c1410850_testing
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`c1410850_testing` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `c1410850_testing`;

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=447 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`last_name`,`email`,`phone`,`state`) values 
(1,'John','Reutemann','johnreut@gmail.com','+51123456789','active'),
(2,'Alexander','Jackman','aj@hotmail.com','+51115793114','active'),
(3,'Jennifer','Tucson','123456@hotmail.com','+51902444858','active'),
(4,'Liam','Kent','daks@webs.com','+51950826555','active'),
(5,'Monica','Dersk','jr@gmail.com','+51112223332','active'),
(6,'Erica','Giggs','jenus123@hotmail.com','+51959599898','active'),
(7,'Clair','Patrick','motoriz@gmail.com','+54113333333','active'),
(8,'Peter','Smith','shop@asuca.com','+51959598000','inactive'),
(9,'Gregory','Williams','etrex@gmail.com','+51959598000','active'),
(10,'Charles','Johnson','m123@gmail.com','+54333333333','active'),
(11,'Matthew','Gregs','shops@asd.com','+54958551515','active'),
(12,'Jessica','Dirim','habl@wlima.com','+51947822431','active'),
(13,'qw','DJJDJDJD','ksksk@kssk.com','+51464646591','active'),
(14,'qqw','RRFGG','dhsh@djdj.com','+51161619499','active'),
(15,'wq','DUDUDUD','sshsj@djd.com','+51464646464','active'),
(16,'faf','SDDGGG','ssw@dss.com','+51161646454','active'),
(17,'vxd','DJDJDUD','sjsjs@kdkd.com','+51464646466','active'),
(18,'fas','DUDUDJDJD','sjsjs@sksks.com','+51161646454','active'),
(19,'fsaf','FSAGFASGSAD','paua@l.com','+51545456343','active'),
(20,'afas','FSAFAFSAF','afasf@asfsaf.com','+51231321351','active'),
(21,'José','Amaral','afas@aas.com','+51254564564','active'),
(22,'asd','FSAFSAF','fsa@sa','+51112132131','active'),
(23,'asd','RRRRRR','aaa@aa.com','+51222225588','active'),
(24,'asd','DJDJDJDJD','sjsjs@dkd.com','+51616161618','active'),
(25,'asd','DJDJDJDJD','sjsj@sksk.com','+51616161956','active'),
(26,'asd','COLE','cole@gmail.com','+54114212122','active');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
