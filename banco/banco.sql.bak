CREATE DATABASE petshop;

-- -----------------------------------------------------
-- Table `petshop`.`clientes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `petshop`.`clientes` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nomeCompleto` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `cpf` BIGINT NOT NULL,
  `telefone` BIGINT NOT NULL,
  `CEP` BIGINT NOT NULL,
  `numero` INT(6) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `petshop`.`funcionarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `petshop`.`funcionarios` (
  `id` INT NULL AUTO_INCREMENT,
  `nomeCompleto` VARCHAR(255) NOT NULL,
  `cpf` BIGINT NOT NULL,
  `telefone` BIGINT NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `petshop`.`pets`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `petshop`.`pets` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(255) NULL,
  `raca` VARCHAR(255) NOT NULL,
  `dataNasc` DATE NULL,
  `clientes_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_pets_clientes_idx` (`clientes_id` ASC) ,
  CONSTRAINT `fk_pets_clientes`
    FOREIGN KEY (`clientes_id`)
    REFERENCES `petshop`.`clientes` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `petshop`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `petshop`.`usuario` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(255) NOT NULL,
  `senha` CHAR(32) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `petshop`.`servicos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `petshop`.`servicos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `descricao` VARCHAR(255) NOT NULL,
  `valor` DECIMAL(6,2) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `petshop`.`agendamento`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `petshop`.`agendamento` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `data` DATE NOT NULL,
  `status` ENUM('0', '1', '2', '3') NOT NULL COMMENT '0 = Em aberto\n1 = Em andamento \n2 = Concluido\n3 = Cancelado',
  `horarioInicio` TIME NOT NULL,
  `horarioFinal` TIME NOT NULL,
  `pets_id` INT NOT NULL,
  `funcionarios_id` INT NOT NULL,
  `servicos_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_agendamento_pets1_idx` (`pets_id` ASC) ,
  INDEX `fk_agendamento_servicos1_idx` (`servicos_id` ASC) ,
  INDEX `fk_agendamento_funcionarios1_idx` (`funcionarios_id` ASC) ,
  CONSTRAINT `fk_agendamento_pets1`
    FOREIGN KEY (`pets_id`)
    REFERENCES `petshop`.`pets` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_agendamento_servicos1`
    FOREIGN KEY (`servicos_id`)
    REFERENCES `petshop`.`servicos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_agendamento_funcionarios1`
    FOREIGN KEY (`funcionarios_id`)
    REFERENCES `petshop`.`funcionarios` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `petshop`.`multa`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `petshop`.`multa` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `valor` DECIMAL(6,2) NOT NULL,
  `agendamento_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_multa_agendamento1_idx` (`agendamento_id` ASC) ,
  CONSTRAINT `fk_multa_agendamento1`
    FOREIGN KEY (`agendamento_id`)
    REFERENCES `petshop`.`agendamento` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

