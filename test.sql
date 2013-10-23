SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `zjb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `zjb` ;

-- -----------------------------------------------------
-- Table `zjb`.`zjb_house`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `zjb`.`zjb_house` ;

CREATE TABLE IF NOT EXISTS `zjb`.`zjb_house` (
  `id` INT UNSIGNED NOT NULL DEFAULT 0,
  `title` CHAR(40) NOT NULL DEFAULT '',
  `house_kind` ENUM('普通住宅','高层住宅','民房','别墅','公寓','写字楼','商铺','厂房','其他') NOT NULL COMMENT '普高民别寓写字楼等',
  `parlors` TINYINT UNSIGNED NOT NULL DEFAULT 1 COMMENT '客厅',
  `rooms` TINYINT UNSIGNED NOT NULL DEFAULT 2 COMMENT '房间',
  `bathromms` TINYINT UNSIGNED NOT NULL COMMENT '卫生间数',
  `floors` TINYINT UNSIGNED NOT NULL COMMENT '总楼层',
  `floor_of` TINYINT UNSIGNED NOT NULL COMMENT '当前楼层',
  `year` YEAR NOT NULL COMMENT '住宅建年',
  `price` SMALLINT UNSIGNED NOT NULL DEFAULT 0,
  `equipment` SET('床','家具','煤气','暖气','宽带','电视','空调','冰箱','洗衣机','热水器','厨房设施') NULL,
  `cover` VARCHAR(250) NOT NULL,
  `discribe_text` TEXT NOT NULL,
  `discribe_pic` BLOB NULL,
  `address` CHAR(40) NOT NULL COMMENT '小区地址名称',
  `finish_level` ENUM('毛坯','简单装修','中等装修','精装修','豪华装修') NOT NULL COMMENT '毛坯，简单装修，精装修',
  `rent_sell` BIT(1) NOT NULL DEFAULT 0,
  `area` SMALLINT(4) UNSIGNED NOT NULL,
  `bus_info` VARCHAR(255) NULL,
  `contact` VARCHAR(20) NOT NULL DEFAULT '' COMMENT '联系人，不一定是发布者',
  `contact_phone` CHAR(14) NOT NULL DEFAULT '' COMMENT '联系人号码\n',
  PRIMARY KEY (`id`),
  INDEX `title` (`title` ASC),
  INDEX `addr` (`address` ASC))
ENGINE = MyISAM;


-- -----------------------------------------------------
-- Table `zjb`.`zjb_info`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `zjb`.`zjb_info` ;

CREATE TABLE IF NOT EXISTS `zjb`.`zjb_info` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `poster_type` BIT(1) NOT NULL DEFAULT 0 COMMENT 'default:common member',
  `poster_id` INT UNSIGNED NOT NULL DEFAULT 0,
  `info_catagory` ENUM('卖房','租房','卖车','租车','贷款','理财') NOT NULL COMMENT '对应当前的六种类型的信息\n',
  `catagory_id` INT UNSIGNED NOT NULL,
  `edit_time` TIMESTAMP NOT NULL,
  `is_verified` BIT NOT NULL DEFAULT 0 COMMENT 'default:not verified',
  `city_id` SMALLINT UNSIGNED NOT NULL COMMENT '城市ID',
  `zone_id` SMALLINT UNSIGNED NOT NULL COMMENT '区县ID',
  `post_time` INT(10) UNSIGNED NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`))
ENGINE = MyISAM;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
