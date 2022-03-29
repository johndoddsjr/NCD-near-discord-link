CREATE TABLE `discordlink`.`discord` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(45) NOT NULL,
    `hash` VARCHAR(64) NOT NULL,
    `timestamp` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`));


CREATE TABLE `discordlink`.`near` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `wallet` VARCHAR(45) NOT NULL,
    `hash` VARCHAR(64) NOT NULL,
    `timestamp` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`));


CREATE TABLE `discordlink`.`link` (
      `id` INT NOT NULL AUTO_INCREMENT,
      `discordId` VARCHAR(64) NOT NULL,
      `nearId` VARCHAR(64) NOT NULL,
      `timestamp` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
      PRIMARY KEY (`id`));
