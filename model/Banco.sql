-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 29-Out-2022 às 21:48
-- Versão do servidor: 8.0.27
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `hospital`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administração_recep`
--

DROP TABLE IF EXISTS `administração_recep`;
CREATE TABLE IF NOT EXISTS `administração_recep` (
  `cpf_adm` varchar(14) NOT NULL,
  `cpf_recepcao` varchar(14) NOT NULL,
  `crm_med` varchar(15) NOT NULL,
  PRIMARY KEY (`cpf_adm`,`cpf_recepcao`,`crm_med`),
  KEY `crm_med` (`crm_med`),
  KEY `cpf_recepcao` (`cpf_recepcao`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `administriçao_med`
--

DROP TABLE IF EXISTS `administriçao_med`;
CREATE TABLE IF NOT EXISTS `administriçao_med` (
  `cpf_adm` varchar(14) NOT NULL,
  `crm_med` varchar(15) NOT NULL,
  PRIMARY KEY (`cpf_adm`,`crm_med`),
  KEY `crm_med` (`crm_med`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cad_paciente`
--

DROP TABLE IF EXISTS `cad_paciente`;
CREATE TABLE IF NOT EXISTS `cad_paciente` (
  `cpf_recepcao` varchar(14) NOT NULL,
  `cpf_paciente` varchar(14) NOT NULL,
  `dt_cad` datetime NOT NULL,
  PRIMARY KEY (`cpf_recepcao`,`cpf_paciente`),
  KEY `cpf_paciente` (`cpf_paciente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `consulta`
--

DROP TABLE IF EXISTS `consulta`;
CREATE TABLE IF NOT EXISTS `consulta` (
  `id_consulta` int NOT NULL AUTO_INCREMENT,
  `cpf_paciente` varchar(14) NOT NULL,
  `crm_med` varchar(15) NOT NULL,
  `id_leitos` int DEFAULT NULL,
  `cpf_recepcao` varchar(14) NOT NULL,
  `hr_inicio` time NOT NULL,
  `hr_fim` time NOT NULL,
  PRIMARY KEY (`id_consulta`),
  KEY `cpf_recepcao` (`cpf_recepcao`),
  KEY `cpf_paciente` (`cpf_paciente`),
  KEY `crm_med` (`crm_med`),
  KEY `id_leitos` (`id_leitos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `escala`
--

DROP TABLE IF EXISTS `escala`;
CREATE TABLE IF NOT EXISTS `escala` (
  `id` int NOT NULL AUTO_INCREMENT,
  `hr_inicio` time NOT NULL,
  `hr_fim` time NOT NULL,
  `data` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `escala_med`
--

DROP TABLE IF EXISTS `escala_med`;
CREATE TABLE IF NOT EXISTS `escala_med` (
  `id_escala` int NOT NULL,
  `crm_med` varchar(15) NOT NULL,
  PRIMARY KEY (`id_escala`,`crm_med`),
  KEY `crm_med` (`crm_med`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

DROP TABLE IF EXISTS `funcionario`;
CREATE TABLE IF NOT EXISTS `funcionario` (
  `cpf` varchar(14) NOT NULL,
  `id_hospital` int NOT NULL,
  `nome_funcao` enum('medico','recepcao','gestor') NOT NULL,
  `usuario_id` int NOT NULL,
  `id` int NOT NULL,
  `nome` varchar(50) NOT NULL,
  PRIMARY KEY (`cpf`),
  KEY `id_hospital` (`id_hospital`),
  KEY `usuario_id` (`usuario_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`cpf`, `id_hospital`, `nome_funcao`, `usuario_id`, `id`, `nome`) VALUES
('222.222.222-22', 1, 'medico', 6, 6, 'Shayra Kelly'),
('333.333.333-33', 1, 'gestor', 2, 2, 'Gessika Júlia'),
('444.444.444-44', 1, 'medico', 3, 3, 'Igor Guerra'),
('555.555.555-55', 1, 'medico', 5, 5, 'Ana Luiza'),
('666.666.666-66', 1, 'recepcao', 4, 4, 'Luiz Guilherme'),
('777.777.777.77', 1, 'recepcao', 1, 1, 'Hiago Carlos');

-- --------------------------------------------------------

--
-- Estrutura da tabela `hospital`
--

DROP TABLE IF EXISTS `hospital`;
CREATE TABLE IF NOT EXISTS `hospital` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `hospital`
--

INSERT INTO `hospital` (`id`, `nome`) VALUES
(1, 'Hospital - Goiás');

-- --------------------------------------------------------

--
-- Estrutura da tabela `leitos`
--

DROP TABLE IF EXISTS `leitos`;
CREATE TABLE IF NOT EXISTS `leitos` (
  `id_leitos` int NOT NULL,
  `cpf_paciente` varchar(14) NOT NULL,
  PRIMARY KEY (`id_leitos`),
  KEY `cpf_paciente` (`cpf_paciente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `usuario_id` int NOT NULL AUTO_INCREMENT,
  `usuario` varchar(200) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `data_cadastro` datetime NOT NULL,
  PRIMARY KEY (`usuario_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`usuario_id`, `usuario`, `senha`, `nome`, `data_cadastro`) VALUES
(1, 'Hiago', '123', 'Hiago Carlos', '2022-10-21 21:57:15'),
(2, 'Gessika', '455', 'Gessika Júlia', '2022-10-21 21:59:47'),
(3, 'Igor', '157', 'Igor Guerra', '2022-10-21 21:59:47'),
(4, 'Luiz', '117', 'Luiz Guilherme', '2022-10-21 21:59:47'),
(5, 'Ana', '112', 'Ana Luiza', '2022-10-21 21:59:47'),
(6, 'Shayra', '765', 'Shayra Kelly', '2022-10-21 21:59:47');

-- --------------------------------------------------------

--
-- Estrutura da tabela `medico`
--

DROP TABLE IF EXISTS `medico`;
CREATE TABLE IF NOT EXISTS `medico` (
  `crm` varchar(15) NOT NULL,
  `escala_med` int NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `dt_nasc` date NOT NULL,
  `salario` float NOT NULL,
  `especialidade` varchar(15) NOT NULL,
  PRIMARY KEY (`crm`),
  UNIQUE KEY `cpf` (`cpf`),
  KEY `escala_med` (`escala_med`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `paciente`
--

DROP TABLE IF EXISTS `paciente`;
CREATE TABLE IF NOT EXISTS `paciente` (
  `cpf` varchar(14) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `dt_nasc` date NOT NULL,
  `situacao` varchar(20) NOT NULL,
  `plano_saude` varchar(30) NOT NULL,
  `parente` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`cpf`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `paciente`
--

INSERT INTO `paciente` (`cpf`, `nome`, `telefone`, `dt_nasc`, `situacao`, `plano_saude`, `parente`) VALUES
('000.111.000.77', 'Stich Ohana', '(64) 99004-8952', '2002-04-03', 'Internação', 'IPASGO', 'Lilo Ohana (Irmã)'),
('111.111.777.77', 'João Frango', '(64) 99654-7812', '1984-09-27', 'Coma Induzido', 'Não', 'Raquel Teixeira (Esposa)');

-- --------------------------------------------------------

--
-- Estrutura da tabela `recepcao`
--

DROP TABLE IF EXISTS `recepcao`;
CREATE TABLE IF NOT EXISTS `recepcao` (
  `cpf` varchar(14) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `horaFuncionamento` time NOT NULL,
  PRIMARY KEY (`cpf`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `recepcao`
--

INSERT INTO `recepcao` (`cpf`, `nome`, `horaFuncionamento`) VALUES
('777.777.777.77', 'Hiago Carlos', '11:21:10');

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `administração_recep`
--
ALTER TABLE `administração_recep`
  ADD CONSTRAINT `administração_recep_ibfk_1` FOREIGN KEY (`crm_med`) REFERENCES `medico` (`crm`),
  ADD CONSTRAINT `administração_recep_ibfk_2` FOREIGN KEY (`cpf_recepcao`) REFERENCES `recepcao` (`cpf`);

--
-- Limitadores para a tabela `administriçao_med`
--
ALTER TABLE `administriçao_med`
  ADD CONSTRAINT `administriçao_med_ibfk_1` FOREIGN KEY (`cpf_adm`) REFERENCES `funcionario` (`cpf`),
  ADD CONSTRAINT `administriçao_med_ibfk_2` FOREIGN KEY (`crm_med`) REFERENCES `medico` (`crm`);

--
-- Limitadores para a tabela `cad_paciente`
--
ALTER TABLE `cad_paciente`
  ADD CONSTRAINT `cad_paciente_ibfk_1` FOREIGN KEY (`cpf_recepcao`) REFERENCES `recepcao` (`cpf`),
  ADD CONSTRAINT `cad_paciente_ibfk_2` FOREIGN KEY (`cpf_paciente`) REFERENCES `paciente` (`cpf`);

--
-- Limitadores para a tabela `consulta`
--
ALTER TABLE `consulta`
  ADD CONSTRAINT `consulta_ibfk_1` FOREIGN KEY (`cpf_recepcao`) REFERENCES `recepcao` (`cpf`),
  ADD CONSTRAINT `consulta_ibfk_10` FOREIGN KEY (`id_leitos`) REFERENCES `leitos` (`id_leitos`),
  ADD CONSTRAINT `consulta_ibfk_2` FOREIGN KEY (`cpf_paciente`) REFERENCES `paciente` (`cpf`),
  ADD CONSTRAINT `consulta_ibfk_3` FOREIGN KEY (`crm_med`) REFERENCES `medico` (`crm`),
  ADD CONSTRAINT `consulta_ibfk_4` FOREIGN KEY (`cpf_recepcao`) REFERENCES `recepcao` (`cpf`),
  ADD CONSTRAINT `consulta_ibfk_5` FOREIGN KEY (`cpf_paciente`) REFERENCES `paciente` (`cpf`),
  ADD CONSTRAINT `consulta_ibfk_6` FOREIGN KEY (`crm_med`) REFERENCES `medico` (`crm`),
  ADD CONSTRAINT `consulta_ibfk_7` FOREIGN KEY (`cpf_recepcao`) REFERENCES `recepcao` (`cpf`),
  ADD CONSTRAINT `consulta_ibfk_8` FOREIGN KEY (`cpf_paciente`) REFERENCES `paciente` (`cpf`),
  ADD CONSTRAINT `consulta_ibfk_9` FOREIGN KEY (`crm_med`) REFERENCES `medico` (`crm`);

--
-- Limitadores para a tabela `escala_med`
--
ALTER TABLE `escala_med`
  ADD CONSTRAINT `escala_med_ibfk_1` FOREIGN KEY (`id_escala`) REFERENCES `escala` (`id`),
  ADD CONSTRAINT `escala_med_ibfk_2` FOREIGN KEY (`crm_med`) REFERENCES `medico` (`crm`),
  ADD CONSTRAINT `escala_med_ibfk_3` FOREIGN KEY (`id_escala`) REFERENCES `escala` (`id`),
  ADD CONSTRAINT `escala_med_ibfk_4` FOREIGN KEY (`crm_med`) REFERENCES `medico` (`crm`),
  ADD CONSTRAINT `escala_med_ibfk_5` FOREIGN KEY (`id_escala`) REFERENCES `escala` (`id`),
  ADD CONSTRAINT `escala_med_ibfk_6` FOREIGN KEY (`crm_med`) REFERENCES `medico` (`crm`);

--
-- Limitadores para a tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD CONSTRAINT `funcionario_ibfk_1` FOREIGN KEY (`id_hospital`) REFERENCES `hospital` (`id`),
  ADD CONSTRAINT `funcionario_ibfk_2` FOREIGN KEY (`usuario_id`) REFERENCES `login` (`usuario_id`);

--
-- Limitadores para a tabela `leitos`
--
ALTER TABLE `leitos`
  ADD CONSTRAINT `leitos_ibfk_1` FOREIGN KEY (`cpf_paciente`) REFERENCES `paciente` (`cpf`);

--
-- Limitadores para a tabela `medico`
--
ALTER TABLE `medico`
  ADD CONSTRAINT `medico_ibfk_1` FOREIGN KEY (`escala_med`) REFERENCES `escala` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
