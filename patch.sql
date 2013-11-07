SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `zjb` DEFAULT CHARACTER SET utf8 ;
USE `zjb` ;

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
