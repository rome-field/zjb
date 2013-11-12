SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `zjb` DEFAULT CHARACTER SET utf8 ;
USE `zjb` ;

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


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
