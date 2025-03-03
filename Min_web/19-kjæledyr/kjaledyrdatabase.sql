-- MySQL Script generated by MySQL Workbench
-- Tue Feb 25 10:04:21 2025
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema kjaledyr
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema kjaledyr
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `kjaledyr` DEFAULT CHARACTER SET utf8 ;
USE `kjaledyr` ;

-- -----------------------------------------------------
-- Table `kjaledyr`.`kjaledyr`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `kjaledyr`.`kjaledyr` (
  `Merkenummer` INT NOT NULL,
  `Navn` VARCHAR(20) NOT NULL,
  `Art` VARCHAR(25) NOT NULL,
  `Fødselsdato` VARCHAR(20) NOT NULL,
  `Kjønn` VARCHAR(10) NOT NULL,
  PRIMARY KEY (`Merkenummer`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
