-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema odontologico
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema odontologico
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `odontologico` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `odontologico` ;

-- -----------------------------------------------------
-- Table `odontologico`.`Pacientes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `odontologico`.`Pacientes` (
  `idPacientes` INT NOT NULL AUTO_INCREMENT,
  `codigoLegado` INT NULL,
  `nome` VARCHAR(255) NULL,
  `dtNascimento` DATE NULL,
  `sexo` ENUM('M', 'F') NULL,
  `email` VARCHAR(100) NULL,
  PRIMARY KEY (`idPacientes`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `odontologico`.`Telefones`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `odontologico`.`Telefones` (
  `idTelefones` INT NOT NULL AUTO_INCREMENT,
  `telefone` VARCHAR(30) NULL,
  `tipo` VARCHAR(20) NULL,
  `Pacientes_idPacientes` INT NOT NULL,
  PRIMARY KEY (`idTelefones`),
  INDEX `fk_Telefones_Pacientes_idx` (`Pacientes_idPacientes` ASC),
  CONSTRAINT `fk_Telefones_Pacientes`
    FOREIGN KEY (`Pacientes_idPacientes`)
    REFERENCES `odontologico`.`Pacientes` (`idPacientes`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `odontologico`.`Enderecos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `odontologico`.`Enderecos` (
  `idEndereços` INT NOT NULL AUTO_INCREMENT,
  `logradouro` VARCHAR(255) NULL,
  `numero` VARCHAR(7) NULL,
  `complemento` VARCHAR(100) NULL,
  `bairro` VARCHAR(100) NULL,
  `cidade` VARCHAR(100) NULL,
  `uf` VARCHAR(2) NULL,
  `cep` VARCHAR(9) NULL,
  `Pacientes_idPacientes` INT NOT NULL,
  PRIMARY KEY (`idEndereços`),
  INDEX `fk_Endereços_Pacientes1_idx` (`Pacientes_idPacientes` ASC),
  CONSTRAINT `fk_Endereços_Pacientes1`
    FOREIGN KEY (`Pacientes_idPacientes`)
    REFERENCES `odontologico`.`Pacientes` (`idPacientes`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `odontologico`.`Convenios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `odontologico`.`Convenios` (
  `idConvenios` INT NOT NULL AUTO_INCREMENT,
  `nomeConvenio` VARCHAR(100) NULL,
  `diaPagamento` VARCHAR(2) NULL,
  `desconto` VARCHAR(3) NULL,
  `telefone` VARCHAR(30) NULL,
  `contato` VARCHAR(50) NULL,
  `ativo` ENUM('S', 'N') NULL DEFAULT 'S',
  PRIMARY KEY (`idConvenios`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `odontologico`.`Anamneses`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `odontologico`.`Anamneses` (
  `idAnamneses` INT NOT NULL AUTO_INCREMENT,
  `Pacientes_idPacientes` INT NOT NULL,
  `descricao` TEXT(65535) NULL,
  PRIMARY KEY (`idAnamneses`),
  INDEX `fk_Anamneses_Pacientes1_idx` (`Pacientes_idPacientes` ASC),
  CONSTRAINT `fk_Anamneses_Pacientes1`
    FOREIGN KEY (`Pacientes_idPacientes`)
    REFERENCES `odontologico`.`Pacientes` (`idPacientes`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `odontologico`.`Odontogramas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `odontologico`.`Odontogramas` (
  `idOdontogramas` INT NOT NULL AUTO_INCREMENT,
  `Pacientes_idPacientes` INT NOT NULL,
  `descricao` TEXT(65535) NULL,
  `dataOdontograma` DATE NOT NULL,
  PRIMARY KEY (`idOdontogramas`),
  INDEX `fk_Odontogramas_Pacientes1_idx` (`Pacientes_idPacientes` ASC),
  CONSTRAINT `fk_Odontogramas_Pacientes1`
    FOREIGN KEY (`Pacientes_idPacientes`)
    REFERENCES `odontologico`.`Pacientes` (`idPacientes`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `odontologico`.`Convenios_Pacientes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `odontologico`.`Convenios_Pacientes` (
  `Convenios_idConvenios` INT NOT NULL AUTO_INCREMENT,
  `Pacientes_idPacientes` INT NOT NULL,
  `codigoAssociado` VARCHAR(50) NULL,
  `ativo_convenio` ENUM('S', 'N') NULL,
  PRIMARY KEY (`Convenios_idConvenios`, `Pacientes_idPacientes`),
  INDEX `fk_Convenios_has_Pacientes_Pacientes1_idx` (`Pacientes_idPacientes` ASC),
  INDEX `fk_Convenios_has_Pacientes_Convenios1_idx` (`Convenios_idConvenios` ASC),
  CONSTRAINT `fk_Convenios_has_Pacientes_Convenios1`
    FOREIGN KEY (`Convenios_idConvenios`)
    REFERENCES `odontologico`.`Convenios` (`idConvenios`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Convenios_has_Pacientes_Pacientes1`
    FOREIGN KEY (`Pacientes_idPacientes`)
    REFERENCES `odontologico`.`Pacientes` (`idPacientes`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `odontologico`.`Agenda`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `odontologico`.`Agenda` (
  `idAgenda` INT NOT NULL AUTO_INCREMENT,
  `segunda` VARCHAR(45) NULL,
  `terca` VARCHAR(45) NULL,
  `quarta` VARCHAR(45) NULL,
  `quinta` VARCHAR(45) NULL,
  `sexta` VARCHAR(45) NULL,
  `sabado` VARCHAR(45) NULL,
  `intervalo` VARCHAR(45) NULL,
  `qtd_encaixes` INT NULL,
  PRIMARY KEY (`idAgenda`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `odontologico`.`Dentistas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `odontologico`.`Dentistas` (
  `idDentistas` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(255) NULL,
  `telefoneCelular` VARCHAR(30) NULL,
  `Agenda_idAgenda` INT NOT NULL,
  PRIMARY KEY (`idDentistas`),
  INDEX `fk_Dentistas_Agenda1_idx` (`Agenda_idAgenda` ASC),
  CONSTRAINT `fk_Dentistas_Agenda1`
    FOREIGN KEY (`Agenda_idAgenda`)
    REFERENCES `odontologico`.`Agenda` (`idAgenda`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `odontologico`.`Consulta`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `odontologico`.`Consulta` (
  `Dentistas_idDentistas` INT NOT NULL,
  `Pacientes_idPacientes` INT NOT NULL,
  `dia` DATE NULL,
  `hora` VARCHAR(5) NULL,
  `compareceu` TINYINT(1) NULL,
  `encaixe` TINYINT(1) NULL,
  PRIMARY KEY (`Dentistas_idDentistas`, `Pacientes_idPacientes`),
  INDEX `fk_Dentistas_has_Pacientes_Pacientes1_idx` (`Pacientes_idPacientes` ASC),
  INDEX `fk_Dentistas_has_Pacientes_Dentistas1_idx` (`Dentistas_idDentistas` ASC),
  CONSTRAINT `fk_Dentistas_has_Pacientes_Dentistas1`
    FOREIGN KEY (`Dentistas_idDentistas`)
    REFERENCES `odontologico`.`Dentistas` (`idDentistas`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Dentistas_has_Pacientes_Pacientes1`
    FOREIGN KEY (`Pacientes_idPacientes`)
    REFERENCES `odontologico`.`Pacientes` (`idPacientes`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
