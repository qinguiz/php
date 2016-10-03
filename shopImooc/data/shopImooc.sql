CREATE DATABASE IF NOT EXISTS `shopImooc`;
USE `shopImooc`;

DROP TABLE IF EXISTS `imooc_admin`;
CREATE TABLE `imooc_admin`(
`id` TINYINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
`username` varchar(20) not null unique,
`password` char(32) not null,
`email` varchar(50) not null
);

drop table if exists `imooc_cate`;
create table `imooc_cate`(
`id` smallint unsigned auto_increment primary key,
`cName` varchar(50) unique
);


drop table if exists `imooc_pro`;
create table `imooc_pro`(
`id` int unsigned auto_increment primary key,
`pName` varchar(50) not null unique,
`pSn` varchar(50) not null,
`pNum` int unsigned default 1,
`mPrice` decimal(10,2) not null,
`iPrice` decimal(10,2) not null,
`pDesc` text,
`pImg` varchar(50) not null,
`pubTime` int unsigned not null,
`isShow` tinyint(1) default 1,
`isHot` tinyint(1) default 0,
`cid` smallint unsigned not null
);


drop table if exists `imooc_user`;
create table `imooc_user`(
`id` int unsigned auto_increment primary key,
`username` varchar(20) not null unique,
`password` char(20) not null,
`sex` enum("男","女","保密") not null default "保密",
`face` varchar(50) not null,
`regTime` int unsigned not null
);


drop table if exists `imooc_album`;
create table `imooc_album`(
`id` int unsigned auto_increment key,
`pid` int unsigned not null,
`albumPath` varchar(50) not null
);