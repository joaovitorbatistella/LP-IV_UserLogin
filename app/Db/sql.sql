CREATE DATABASE lpiv_crud;

use lpiv_crud;

CREATE TABLE `user` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `company` VARCHAR(30) NULL,
    `username` VARCHAR(15) NOT NULL,
    `email` VARCHAR(60) NOT NULL,
    `first_name` VARCHAR(50) NOT NULL,
    `last_name` VARCHAR(50) NOT NULL,
    `address` VARCHAR(50) NOT NULL,
    `city` VARCHAR(35) NULL,
    `country` VARCHAR(35) NULL,
    `postal_code` VARCHAR(20) NULL,
    `about_me` TEXT NULL,
    `created_at` DATETIME NOT NULL,
    `updated_at` DATETIME NOT NULL,
    CONSTRAINT `pk_user` PRIMARY KEY (id)
);