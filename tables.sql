SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `zjb` DEFAULT CHARACTER SET utf8 ;
USE `zjb` ;

-- -----------------------------------------------------
-- Table `zjb`.`zjb_user`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `zjb`.`zjb_user` ;

CREATE TABLE IF NOT EXISTS `zjb`.`zjb_user` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` CHAR(20) NOT NULL,
  `email` CHAR(40) NOT NULL DEFAULT '',
  `mobile` CHAR(14) NOT NULL,
  `password` CHAR(32) NOT NULL,
  `create_at` INT(10) UNSIGNED NOT NULL DEFAULT 0,
  `city_id` MEDIUMINT(8) UNSIGNED NOT NULL DEFAULT 1943,
  `zone_id` MEDIUMINT(8) UNSIGNED NOT NULL DEFAULT 1331101,
  `user_type` BIT(1) NOT NULL DEFAULT 0 COMMENT 'default:common user',
  `is_authed` BIT(1) NOT NULL DEFAULT 0,
  `company_id` INT UNSIGNED NULL DEFAULT NULL COMMENT 'default:zjb',
  PRIMARY KEY (`id`),
  INDEX `cityid` (`city_id` ASC))
ENGINE = MyISAM;


-- -----------------------------------------------------
-- Table `zjb`.`zjb_company`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `zjb`.`zjb_company` ;

CREATE TABLE IF NOT EXISTS `zjb`.`zjb_company` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` CHAR(40) NOT NULL,
  `address` CHAR(50) NOT NULL,
  `telephone` CHAR(13) NOT NULL,
  `company_type` ENUM('房产中介','汽车服务','金融担保') NOT NULL,
  `logo` VARCHAR(255) NOT NULL,
  `business` VARCHAR(60) NOT NULL,
  `re_time` INT(10) UNSIGNED NOT NULL DEFAULT 0,
  `recommends` INT UNSIGNED NOT NULL DEFAULT 0 COMMENT '推荐人数',
  `is_checked` ENUM('未审核','已审核') NOT NULL DEFAULT '未审核',
  PRIMARY KEY (`id`),
  INDEX `name` (`name` ASC),
  INDEX `address` (`address` ASC))
ENGINE = MyISAM;


-- -----------------------------------------------------
-- Table `zjb`.`zjb_house`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `zjb`.`zjb_house` ;

CREATE TABLE IF NOT EXISTS `zjb`.`zjb_house` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `house_kind` ENUM('普通住宅','高层住宅','民房','别墅','公寓','写字楼','商铺','厂房','其他') NOT NULL COMMENT '普高民别寓写字楼等',
  `parlors` TINYINT UNSIGNED NOT NULL DEFAULT 1 COMMENT '客厅',
  `rooms` TINYINT UNSIGNED NOT NULL DEFAULT 2 COMMENT '房间',
  `bathrooms` TINYINT UNSIGNED NOT NULL COMMENT '卫生间数',
  `floors` TINYINT UNSIGNED NOT NULL COMMENT '总楼层',
  `floor_of` TINYINT UNSIGNED NOT NULL COMMENT '当前楼层',
  `year` YEAR NOT NULL COMMENT '住宅建年',
  `price` SMALLINT UNSIGNED NOT NULL DEFAULT 0,
  `equipment` SET('床','家具','煤气','暖气','宽带','电视','空调','冰箱','洗衣机','热水器','厨房设施') NULL DEFAULT NULL,
  `cover` VARCHAR(250) NULL DEFAULT NULL,
  `describe_text` TEXT NULL DEFAULT NULL,
  `thumb_max` VARCHAR(500) NULL DEFAULT NULL COMMENT '缩略图',
  `describe_pic` VARCHAR(500) NULL DEFAULT NULL,
  `address` CHAR(40) NOT NULL COMMENT '小区地址名称',
  `finish_level` ENUM('毛坯','简单装修','中等装修','精装修','豪华装修') NOT NULL COMMENT '毛坯，简单装修，精装修',
  `area` SMALLINT(4) UNSIGNED NOT NULL,
  `bus_info` VARCHAR(255) NULL DEFAULT NULL,
  `contact` VARCHAR(20) NOT NULL DEFAULT '' COMMENT '联系人，不一定是发布者',
  `contact_phone` CHAR(14) NOT NULL DEFAULT '' COMMENT '联系人号码\n',
  `info_id` INT UNSIGNED NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  INDEX `addr` (`address` ASC),
  INDEX `info_id` (`info_id` ASC))
ENGINE = MyISAM;


-- -----------------------------------------------------
-- Table `zjb`.`zjb_sellcar`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `zjb`.`zjb_sellcar` ;

CREATE TABLE IF NOT EXISTS `zjb`.`zjb_sellcar` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `info_id` INT UNSIGNED NOT NULL,
  `brand` ENUM('大众','本田','别克','丰田','夏利','日产','奇瑞','宝马','现代','奥迪','马自达','比亚迪','铃木','雪铁龙','吉利','奔驰','福特','雪弗兰','起亚','标志','其他') NOT NULL COMMENT '宝马，大众',
  `type` ENUM('轿车','越野SUV','MPV','跑车','客车','货车','面包车','皮卡','工程车') NOT NULL COMMENT '轿车，商务，面包',
  `series` CHAR(12) NOT NULL DEFAULT '' COMMENT '车系',
  `miles` MEDIUMINT UNSIGNED NOT NULL DEFAULT 0 COMMENT '里程数',
  `commercial_date` VARCHAR(15) NULL DEFAULT NULL COMMENT '保险到期时间',
  `yearcheck_date` VARCHAR(15) NULL DEFAULT NULL COMMENT '上牌时间',
  `jiaoqiangxian_date` VARCHAR(15) NULL DEFAULT NULL COMMENT '年检时间',
  `year` YEAR NOT NULL,
  `price` MEDIUMINT UNSIGNED NOT NULL,
  `useful` ENUM('非营运','营运','营转非','租赁') NULL,
  `maintain` ENUM('4S店定期保养','非4S店定期保养','无定期保养') NOT NULL COMMENT '保养维护',
  `accident` ENUM('无重大事故','有重大事故') NOT NULL COMMENT '重大事故',
  `speedgear` ENUM('手动','自动') NOT NULL COMMENT '变速',
  `new_level` ENUM('九成新','八成新','七成新','六成新','五成新','四成新','三成新') NOT NULL,
  `color` ENUM('白色','银白色','黑色','灰色','银灰色','香槟银色','铁灰色','灰紫蓝色','青灰色','绿色','深绿色','深灰绿色','淡蓝色','湖蓝色','天蓝色','蓝色','淡紫色','粉红色','紫色','酱紫色','深紫色','浅香槟色','金色','珍珠白色','淡黄色','中黄色','黄色','橙色','红色','暗红色','深红色','灰赭色','赭色','褐色','深褐色','其他') NULL DEFAULT NULL,
  `output` CHAR(6) NOT NULL COMMENT '排量',
  `describe_text` TEXT NULL DEFAULT NULL,
  `thumb_max` VARCHAR(500) NULL,
  `describe_pic` VARCHAR(500) NULL DEFAULT NULL,
  `cover` VARCHAR(150) NULL DEFAULT NULL,
  `contact` VARCHAR(45) NOT NULL,
  `contact_phone` CHAR(14) NOT NULL,
  `address` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `info_id` (`info_id` ASC))
ENGINE = MyISAM;


-- -----------------------------------------------------
-- Table `zjb`.`zjb_area`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `zjb`.`zjb_area` ;

CREATE TABLE IF NOT EXISTS `zjb`.`zjb_area` (
  `id` MEDIUMINT(8) UNSIGNED NOT NULL,
  `name` VARCHAR(40) NOT NULL,
  `level` TINYINT(4) UNSIGNED NOT NULL,
  `pid` MEDIUMINT(8) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `pid` (`pid` ASC))
ENGINE = MyISAM
PACK_KEYS = 1;


-- -----------------------------------------------------
-- Table `zjb`.`zjb_info`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `zjb`.`zjb_info` ;

CREATE TABLE IF NOT EXISTS `zjb`.`zjb_info` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `poster_id` INT UNSIGNED NOT NULL DEFAULT 0,
  `info_catagory` ENUM('卖房','租房','卖车','租车','贷款','理财') NOT NULL COMMENT '对应当前的六种类型的信息\n',
  `edit_time` INT(10) UNSIGNED NOT NULL DEFAULT 0,
  `is_verified` ENUM('未通过验证','已通过验证') NOT NULL DEFAULT '未通过验证' COMMENT 'default:not verified',
  `city_id` MEDIUMINT(8) UNSIGNED NOT NULL COMMENT '城市ID',
  `zone_id` MEDIUMINT(8) UNSIGNED NOT NULL COMMENT '区县ID',
  `post_time` INT(10) UNSIGNED NOT NULL DEFAULT 0,
  `title` CHAR(40) NOT NULL,
  `is_checked` ENUM('未审核','已审核') NOT NULL DEFAULT '未审核',
  PRIMARY KEY (`id`),
  INDEX `title` (`title` ASC),
  INDEX `city_id` (`city_id` ASC))
ENGINE = MyISAM;


-- -----------------------------------------------------
-- Table `zjb`.`zjb_rentcar`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `zjb`.`zjb_rentcar` ;

CREATE TABLE IF NOT EXISTS `zjb`.`zjb_rentcar` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `info_id` INT UNSIGNED NOT NULL,
  `brand` ENUM('大众','本田','别克','丰田','夏利','日产','奇瑞','宝马','现代','奥迪','马自达','比亚迪','铃木','雪铁龙','吉利','奔驰','福特','雪弗兰','起亚','标志','其他') NOT NULL COMMENT '宝马，大众',
  `type` ENUM('轿车','越野SUV','MPV','跑车','客车','货车','面包车','皮卡','工程车') NOT NULL COMMENT '轿车，商务，面包',
  `series` CHAR(12) NOT NULL DEFAULT '' COMMENT '车系',
  `miles` SMALLINT UNSIGNED NOT NULL DEFAULT 0 COMMENT '里程数',
  `include_insure` ENUM('已包含','未包含') NOT NULL COMMENT '上牌时间',
  `year` YEAR NOT NULL COMMENT '上牌时间\n',
  `price` SMALLINT UNSIGNED NOT NULL COMMENT '租金/天\n',
  `deposit` SMALLINT UNSIGNED NOT NULL COMMENT '押金',
  `seats` ENUM('5座','7座','9座','11座','12座','14座','15座','16座','17座','22座','24座','29座','33座','39座','40座') NOT NULL COMMENT '重大事故',
  `speedgear` ENUM('手动','自动') NOT NULL COMMENT '变速',
  `new_level` ENUM('九成新','八成新','七成新','六成新','五成新','四成新','三成新') NOT NULL,
  `output` CHAR(7) NOT NULL COMMENT '排量',
  `describe_text` TEXT NULL DEFAULT NULL,
  `describe_pic` VARCHAR(500) NULL DEFAULT NULL,
  `thumb_max` VARCHAR(500) NULL,
  `cover` VARCHAR(200) NULL DEFAULT NULL,
  `contact` VARCHAR(45) NOT NULL,
  `contact_phone` CHAR(14) NOT NULL,
  `address` VARCHAR(45) NOT NULL,
  `maintain` ENUM('4S店定期保养','非4S店定期保养','无定期保养') NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  INDEX `info_id` (`info_id` ASC))
ENGINE = MyISAM;


-- -----------------------------------------------------
-- Table `zjb`.`zjb_invest`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `zjb`.`zjb_invest` ;

CREATE TABLE IF NOT EXISTS `zjb`.`zjb_invest` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `info_id` INT UNSIGNED NOT NULL,
  `type` ENUM('个人借款','企业借款','银行产品') NOT NULL,
  `pawn` ENUM('无','有') NOT NULL COMMENT '抵押物',
  `interest_rate` TINYINT UNSIGNED NOT NULL COMMENT '利率',
  `refund_way` VARCHAR(45) NOT NULL COMMENT '还款方式\n',
  `price` SMALLINT UNSIGNED NOT NULL COMMENT '金额：万',
  `deadline` TINYINT UNSIGNED NOT NULL COMMENT '期限：月\n',
  `describe_text` TEXT NULL DEFAULT NULL,
  `describe_pic` VARCHAR(500) NULL DEFAULT NULL,
  `thumb_max` VARCHAR(500) NULL DEFAULT NULL,
  `cover` VARCHAR(100) NULL DEFAULT NULL,
  `address` VARCHAR(100) NOT NULL,
  `contact` VARCHAR(45) NOT NULL,
  `contact_phone` CHAR(14) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `info_id` (`info_id` ASC))
ENGINE = MyISAM;


-- -----------------------------------------------------
-- Table `zjb`.`zjb_loan`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `zjb`.`zjb_loan` ;

CREATE TABLE IF NOT EXISTS `zjb`.`zjb_loan` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `info_id` INT UNSIGNED NOT NULL,
  `type` ENUM('个人资金','企业资金','银行资金') NOT NULL,
  `loan_way` ENUM('抵押贷款','无抵押贷款','担保贷款') NOT NULL,
  `interest_rate` VARCHAR(20) NOT NULL COMMENT '利率，可面议\n',
  `charge` VARCHAR(20) NOT NULL COMMENT '手续费，可面议\n',
  `price` SMALLINT UNSIGNED NOT NULL,
  `deadline` TINYINT UNSIGNED NOT NULL,
  `cover` VARCHAR(100) NULL DEFAULT NULL,
  `describe_text` TEXT NULL DEFAULT NULL,
  `describe_pic` VARCHAR(500) NULL DEFAULT NULL,
  `thumb_max` VARCHAR(500) NULL,
  `address` VARCHAR(45) NOT NULL,
  `contact` VARCHAR(20) NOT NULL,
  `contact_phone` CHAR(14) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `info_id` (`info_id` ASC))
ENGINE = MyISAM;


-- -----------------------------------------------------
-- Table `zjb`.`zjb_admin`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `zjb`.`zjb_admin` ;

CREATE TABLE IF NOT EXISTS `zjb`.`zjb_admin` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` CHAR(20) NOT NULL,
  `password` CHAR(32) NOT NULL,
  `city_id` MEDIUMINT(8) UNSIGNED NOT NULL DEFAULT 1943,
  `user_type` BIT(1) NOT NULL DEFAULT 0 COMMENT '默认分站',
  PRIMARY KEY (`id`),
  INDEX `cityid` (`city_id` ASC),
  UNIQUE INDEX `username_UNIQUE` (`username` ASC))
ENGINE = MyISAM;


-- -----------------------------------------------------
-- Table `zjb`.`zjb_citylist`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `zjb`.`zjb_citylist` ;

CREATE TABLE IF NOT EXISTS `zjb`.`zjb_citylist` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `city_id` MEDIUMINT(8) UNSIGNED NOT NULL DEFAULT 1943,
  `ads` VARCHAR(500) NULL COMMENT '轮播图片',
  `business_corp` VARCHAR(25) NULL COMMENT '商家合作电话',
  `fund_corp` VARCHAR(25) NULL COMMENT '资金合作电话',
  PRIMARY KEY (`id`),
  INDEX `cityid` (`city_id` ASC),
  UNIQUE INDEX `city_id_UNIQUE` (`city_id` ASC))
ENGINE = MyISAM;


-- -----------------------------------------------------
-- Table `zjb`.`zjb_message`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `zjb`.`zjb_message` ;

CREATE TABLE IF NOT EXISTS `zjb`.`zjb_message` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `post_time` INT(10) UNSIGNED NOT NULL,
  `company_id` INT UNSIGNED NOT NULL,
  `poster` VARCHAR(40) NOT NULL COMMENT '留言者ip',
  `content` VARCHAR(500) NOT NULL,
  `reply` VARCHAR(500) NULL,
  `is_replied` BIT(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  INDEX `pid` (`is_replied` ASC),
  INDEX `company_id` (`company_id` ASC))
ENGINE = MyISAM
PACK_KEYS = 1;


-- -----------------------------------------------------
-- Table `zjb`.`zjb_company_index`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `zjb`.`zjb_company_index` ;

CREATE TABLE IF NOT EXISTS `zjb`.`zjb_company_index` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `company_id` INT UNSIGNED NOT NULL,
  `big_logo` VARCHAR(100) NOT NULL,
  `ads` VARCHAR(500) NULL,
  `introduction` TEXT NOT NULL COMMENT '企业介绍\n',
  PRIMARY KEY (`id`),
  UNIQUE INDEX `company_id_UNIQUE` (`company_id` ASC),
  INDEX `company_id` (`company_id` ASC))
ENGINE = MyISAM
PACK_KEYS = 1;


-- -----------------------------------------------------
-- Table `zjb`.`zjb_article`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `zjb`.`zjb_article` ;

CREATE TABLE IF NOT EXISTS `zjb`.`zjb_article` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `company_id` INT UNSIGNED NOT NULL,
  `title` VARCHAR(100) NOT NULL,
  `post_time` INT(10) UNSIGNED NOT NULL,
  `content` TEXT NOT NULL,
  `column` ENUM('企业动态','优惠促销') NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `company_id` (`company_id` ASC))
ENGINE = MyISAM
PACK_KEYS = 1;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
