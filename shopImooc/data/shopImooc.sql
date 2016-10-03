CREATE DATABASE IF NOT EXISTS `shopImooc`;
USE `shopImooc`;
--管理表
DROP TABLE IF NOT EXISTS `imooc_admin`;
CREATE TABLE `imooc_admin`(
`id` TINYINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
`username` varchar(20) not null unique,
`password` char(32) not null,
`email` varchar(50) not null
);

--分类表
drop table if not exists `imooc_cate`;
create table `imooc_cate`(
`id` smallint unsigned auto_increment primary key,
`cName` varchar(50) unique
);

--商品表
drop table if not exists `imooc_pro`;
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
`isHot` tinyint(1) defaule 0,
`cid` smallint unsigned not null
);

--用户表
drop table if not exists `imooc_user`;
create table `imooc_user`(
`id` int unsigned auto_increment primary key,
`username` varchar(20) not null unique,
`password` char(20) not null,
`sex` enum("男","女","保密") not null default "保密",
`face` varchar(50) not null,
`regTime` int unsigned not null
)