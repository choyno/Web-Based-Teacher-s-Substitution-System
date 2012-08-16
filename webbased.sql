SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `teachers`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `teachers` ;

SHOW WARNINGS;
CREATE  TABLE IF NOT EXISTS `teachers` (
  `id` INT NOT NULL ,
  `firstname` VARCHAR(30) NULL ,
  `lastname` VARCHAR(30) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `subjects`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `subjects` ;

SHOW WARNINGS;
CREATE  TABLE IF NOT EXISTS `subjects` (
  `id` INT NOT NULL ,
  `code` VARCHAR(30) NULL ,
  `name` VARCHAR(30) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `day_codes`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `day_codes` ;

SHOW WARNINGS;
CREATE  TABLE IF NOT EXISTS `day_codes` (
  `id` INT NOT NULL ,
  `name` VARCHAR(45) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `teachers_subjects`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `teachers_subjects` ;

SHOW WARNINGS;
CREATE  TABLE IF NOT EXISTS `teachers_subjects` (
  `id` INT NOT NULL ,
  `teacher_id` INT NOT NULL ,
  `subject_id` INT NOT NULL ,
  `time_start` TIME NULL ,
  `time_end` TIME NULL ,
  `room_num` VARCHAR(45) NULL ,
  `day_code_id` INT NOT NULL ,
  `section` VARCHAR(45) NULL ,
  `type` VARCHAR(45) NULL ,
  PRIMARY KEY (`id`, `teacher_id`, `subject_id`, `day_code_id`) )
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `reasons`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `reasons` ;

SHOW WARNINGS;
CREATE  TABLE IF NOT EXISTS `reasons` (
  `id` INT NOT NULL ,
  `name` VARCHAR(30) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `user_types`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `user_types` ;

SHOW WARNINGS;
CREATE  TABLE IF NOT EXISTS `user_types` (
  `id` INT NOT NULL ,
  `name` VARCHAR(30) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `departments`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `departments` ;

SHOW WARNINGS;
CREATE  TABLE IF NOT EXISTS `departments` (
  `id` INT NOT NULL ,
  `name` VARCHAR(30) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `users`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `users` ;

SHOW WARNINGS;
CREATE  TABLE IF NOT EXISTS `users` (
  `id` INT NOT NULL ,
  `fullname` VARCHAR(30) NULL ,
  `username` VARCHAR(30) NULL ,
  `password` VARCHAR(30) NULL ,
  `user_type_id` INT NOT NULL ,
  `department_id` INT NOT NULL ,
  PRIMARY KEY (`id`, `user_type_id`, `department_id`) )
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `status`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `status` ;

SHOW WARNINGS;
CREATE  TABLE IF NOT EXISTS `status` (
  `id` INT NOT NULL ,
  `name` VARCHAR(30) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `substitutes`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `substitutes` ;

SHOW WARNINGS;
CREATE  TABLE IF NOT EXISTS `substitutes` (
  `id` INT NOT NULL ,
  `subtitute_teacher_id` INT NOT NULL ,
  `category_id` INT NOT NULL ,
  `teachers_subject_id` INT NOT NULL ,
  `planned` TINYINT(1) NULL ,
  `requested_at` DATETIME NULL ,
  `notes` TEXT NULL ,
  `assigned_by_user_id` INT NOT NULL ,
  `approved_at` DATETIME NULL ,
  `approved_by_userd_id` INT NULL ,
  `status_id` INT NOT NULL ,
  PRIMARY KEY (`id`, `subtitute_teacher_id`, `category_id`, `teachers_subject_id`, `assigned_by_user_id`, `status_id`) )
ENGINE = InnoDB;

SHOW WARNINGS;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
