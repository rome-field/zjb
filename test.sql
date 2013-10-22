SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `zjb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
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
  `city_id` MEDIUMINT(8) UNSIGNED NOT NULL COMMENT '城市id',
  `zone_id` MEDIUMINT(8) UNSIGNED NULL COMMENT '市县级id',
  `telephone` CHAR(13) NOT NULL,
  `company_type` ENUM('房产中介','汽车服务','金融担保') NOT NULL,
  `logo` VARCHAR(255) NOT NULL,
  `is_verified` BIT(1) NOT NULL DEFAULT 0,
  `business` VARCHAR(60) NOT NULL,
  `username` CHAR(20) NOT NULL,
  `mobile` CHAR(14) NOT NULL,
  `create_at` INT(10) UNSIGNED NOT NULL DEFAULT 0,
  `re_time` INT(10) UNSIGNED NOT NULL DEFAULT 0,
  `recommends` INT UNSIGNED NOT NULL DEFAULT 0 COMMENT '推荐人数',
  `password` CHAR(32) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `name` (`name` ASC),
  INDEX `address` (`address` ASC),
  INDEX `cityid` (`city_id` ASC))
ENGINE = MyISAM;


-- -----------------------------------------------------
-- Table `zjb`.`zjb_house`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `zjb`.`zjb_house` ;

CREATE TABLE IF NOT EXISTS `zjb`.`zjb_house` (
  `id` INT UNSIGNED NOT NULL DEFAULT 0,
  `title` CHAR(40) NOT NULL DEFAULT '',
  `house_kind` ENUM('0','1','2','3','4','5','6','7','8') NOT NULL DEFAULT '0' COMMENT '普高民别寓写字楼等',
  `parlors` TINYINT UNSIGNED NOT NULL,
  `rooms` TINYINT UNSIGNED NOT NULL DEFAULT 2,
  `year` YEAR NOT NULL,
  `price` SMALLINT UNSIGNED NOT NULL,
  `cover_pic` VARCHAR(80) NOT NULL,
  `discribe_text` VARCHAR(45) NOT NULL,
  `discribe_pic` VARCHAR(45) NULL,
  `address` VARCHAR(45) NOT NULL,
  `floors` TINYINT UNSIGNED NOT NULL,
  `floor_of` TINYINT UNSIGNED NOT NULL,
  `bathromms` TINYINT UNSIGNED NOT NULL,
  `finish_level` ENUM('0','1','2') NOT NULL COMMENT '毛坯，简单装修，精装修',
  `rent_sell` TINYINT(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`))
ENGINE = MyISAM;


-- -----------------------------------------------------
-- Table `zjb`.`zjb_car`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `zjb`.`zjb_car` ;

CREATE TABLE IF NOT EXISTS `zjb`.`zjb_car` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(45) NOT NULL,
  `brand` ENUM('0','1') NOT NULL COMMENT '宝马，大众',
  `type` ENUM('0','1') NOT NULL COMMENT '轿车，商务，面包',
  `miles` SMALLINT NULL DEFAULT 0 COMMENT '里程数',
  `insure_date` YEAR NOT NULL COMMENT '保险到期时间',
  `reg_date` YEAR NOT NULL COMMENT '上牌时间',
  `price` SMALLINT NOT NULL,
  `series` ENUM('0','1') NOT NULL COMMENT '车系',
  `check_date` YEAR NULL COMMENT '年检时间',
  `accident` VARCHAR(45) NOT NULL COMMENT '重大事故',
  `maintain` VARCHAR(45) NOT NULL COMMENT '保养维护',
  `output` VARCHAR(45) NOT NULL COMMENT '排量',
  `speedgear` ENUM('0','1') NOT NULL COMMENT '变速',
  `describe_text` VARCHAR(45) NOT NULL,
  `describe_pics` VARCHAR(45) NOT NULL,
  `cover_pic` VARCHAR(45) NOT NULL,
  `seats` ENUM('0','1') NULL COMMENT '座位数',
  `include_insure` TINYINT(1) NULL DEFAULT 1,
  `plege` SMALLINT NULL DEFAULT 0 COMMENT '押金',
  `miles_perday` SMALLINT NULL DEFAULT 0 COMMENT '日里程\n',
  PRIMARY KEY (`id`))
ENGINE = MyISAM;


-- -----------------------------------------------------
-- Table `zjb`.`zjb_area`
-- -----------------------------------------------------


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
  `poster_type` BIT NOT NULL DEFAULT 0 COMMENT 'default:common member',
  `poster_id` INT UNSIGNED NOT NULL,
  `info_catagory` ENUM('0','1','2','3','4','5') NOT NULL COMMENT '对应当前的六种类型的信息\n',
  `catagory_id` INT UNSIGNED NOT NULL,
  `post_time` TIMESTAMP NOT NULL,
  `is_verified` BIT NOT NULL DEFAULT 0 COMMENT 'default:not verified',
  `city_id` SMALLINT UNSIGNED NOT NULL COMMENT '城市ID',
  `zone_id` SMALLINT UNSIGNED NOT NULL COMMENT '区县ID',
  PRIMARY KEY (`id`))
ENGINE = MyISAM;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
