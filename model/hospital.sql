#==========================================================   CRIAÇÃO DAS TABELAS   ==========================================================
drop database hospital;
create database hospital;
use hospital;

CREATE TABLE hospital(
  id int NOT NULL AUTO_INCREMENT,
  nome varchar(50) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB;

CREATE TABLE funcionario(
  cpf varchar(14) NOT NULL,
  nome varchar(50) NOT NULL,
  nome_funcao enum('Médico','Recepção','Gestor') NOT NULL,
  dt_nasc date NOT NULL,
  salario float NOT NULL,
  id_hospital int NOT NULL,
  PRIMARY KEY (cpf),
  KEY id_hospital (id_hospital)
) ENGINE=InnoDB;

CREATE TABLE login(
  id int NOT NULL AUTO_INCREMENT,
  usuario varchar(200) NOT NULL,
  senha varchar(32) NOT NULL,
  data_cadastro datetime NOT NULL,
  cpf_funcionario varchar(14) NOT NULL,
  PRIMARY KEY (id),
  UNIQUE KEY cpf_funcionario (cpf_funcionario)
) ENGINE=InnoDB;

CREATE TABLE recepcao(
  id int NOT NULL AUTO_INCREMENT,
  cpf varchar(14) NOT NULL,
  horaFuncionamento varchar(11) NOT NULL,
  PRIMARY KEY (id),
  KEY (cpf)
) ENGINE=InnoDB;

CREATE TABLE escala(
  id int NOT NULL AUTO_INCREMENT,
  hr_inicio time NOT NULL,
  hr_fim time NOT NULL,
  dia_semana varchar(20) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB;

CREATE TABLE escala_med(
  id_escala int NOT NULL,
  crm_med varchar(15) NOT NULL,
  PRIMARY KEY (id_escala, crm_med),
  KEY crm_med (crm_med)
) ENGINE=InnoDB;

CREATE TABLE medico(
  crm varchar(15) NOT NULL,
  cpf varchar(14) NOT NULL,
  especialidade varchar(15) NOT NULL,
  PRIMARY KEY (crm),
  UNIQUE KEY cpf (cpf)
) ENGINE=InnoDB;

CREATE TABLE administracao_recep(
  cpf_adm varchar(14) NOT NULL,
  id_recepcao int NOT NULL,
  PRIMARY KEY (cpf_adm, id_recepcao),
  KEY id_recepcao (id_recepcao)
) ENGINE=InnoDB;

CREATE TABLE administricao_med(
  cpf_adm varchar(14) NOT NULL,
  crm_med varchar(15) NOT NULL,
  PRIMARY KEY (cpf_adm, crm_med),
  KEY crm_med (crm_med)
) ENGINE=InnoDB;

CREATE TABLE paciente(
  id int NOT NULL AUTO_INCREMENT,
  cpf varchar(14) NOT NULL,
  nome varchar(50) NOT NULL,
  telefone varchar(15) NOT NULL,
  dt_nasc date NOT NULL,
  situacao varchar(20) NOT NULL,
  plano_saude varchar(30) NOT NULL,
  parente varchar(50) DEFAULT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB;

CREATE TABLE cad_paciente (
  id_recepcao int NOT NULL,
  id_paciente int NOT NULL,
  dt_cad datetime NOT NULL,
  PRIMARY KEY (id_recepcao, id_paciente),
  KEY id_paciente (id_paciente)
) ENGINE=InnoDB;

CREATE TABLE leitos(
  id_leitos VARCHAR(5) NOT NULL,
  id_paciente int NULL,
  PRIMARY KEY (id_leitos),
  KEY id_paciente (id_paciente)
) ENGINE=InnoDB;

CREATE TABLE consulta(
  id_consulta int NOT NULL AUTO_INCREMENT,
  id_paciente int NOT NULL,
  crm_med varchar(15) NOT NULL,
  id_leitos VARCHAR(5) DEFAULT NULL,
  id_recepcao int NOT NULL,
  hr_inicio datetime NOT NULL,
  hr_fim datetime NULL,
  PRIMARY KEY (id_consulta),
  KEY id_recepcao (id_recepcao),
  KEY id_paciente (id_paciente),
  KEY crm_med (crm_med),
  KEY id_leitos (id_leitos)
) ENGINE=InnoDB;


#==========================================================   ALTERAÇÕES DAS TABELAS   ==========================================================

ALTER TABLE funcionario
  ADD CONSTRAINT funcionario_ibfk_1 FOREIGN KEY (id_hospital) REFERENCES hospital (id);
  
ALTER TABLE login
  ADD CONSTRAINT login_ibfk_1 FOREIGN KEY (cpf_funcionario) REFERENCES funcionario (cpf);
  
ALTER TABLE recepcao
  ADD CONSTRAINT recepcao_ibfk_1 FOREIGN KEY (cpf) REFERENCES funcionario (cpf);
  
ALTER TABLE escala_med
  ADD CONSTRAINT escala_med_ibfk_1 FOREIGN KEY (id_escala) REFERENCES escala (id),
  ADD CONSTRAINT escala_med_ibfk_2 FOREIGN KEY (crm_med) REFERENCES medico (crm);
  
  ALTER TABLE medico
  ADD CONSTRAINT medico_ibfk_2 FOREIGN KEY (cpf) REFERENCES funcionario (cpf);
  
ALTER TABLE administracao_recep
  ADD CONSTRAINT administracao_recep_ibfk_1 FOREIGN KEY (cpf_adm) REFERENCES funcionario (cpf),
  ADD CONSTRAINT administracao_recep_ibfk_2 FOREIGN KEY (id_recepcao) REFERENCES recepcao (id);
  
ALTER TABLE administricao_med
  ADD CONSTRAINT administricao_med_ibfk_1 FOREIGN KEY (cpf_adm) REFERENCES funcionario (cpf),
  ADD CONSTRAINT administricao_med_ibfk_2 FOREIGN KEY (crm_med) REFERENCES medico (crm);

ALTER TABLE leitos
  ADD CONSTRAINT leitos_ibfk_1 FOREIGN KEY (id_paciente) REFERENCES paciente (id);

ALTER TABLE consulta
  ADD CONSTRAINT consulta_ibfk_1 FOREIGN KEY (id_recepcao) REFERENCES recepcao (id),
  ADD CONSTRAINT consulta_ibfk_2 FOREIGN KEY (id_paciente) REFERENCES paciente (id),
  ADD CONSTRAINT consulta_ibfk_3 FOREIGN KEY (crm_med) REFERENCES medico (crm),
  ADD CONSTRAINT consulta_ibfk_4 FOREIGN KEY (id_leitos) REFERENCES leitos (id_leitos);
  
ALTER TABLE cad_paciente
  ADD CONSTRAINT cad_paciente_ibfk_1 FOREIGN KEY (id_recepcao) REFERENCES recepcao (id),
  ADD CONSTRAINT cad_paciente_ibfk_2 FOREIGN KEY (id_paciente) REFERENCES paciente (id);
COMMIT;



#==========================================================   INSERINDO DADOS   ==========================================================

INSERT INTO hospital (nome) VALUES
('Hospital - Goiás');

INSERT INTO funcionario (cpf, nome, nome_funcao, dt_nasc, salario, id_hospital) VALUES
('222.222.222-22', 'Shayra Kelly', 'Médico', '1984-04-20', '15200', 1),
('333.333.333-33', 'Gessika Júlia', 'Gestor', '1987-05-30', '3920',  1),
('444.444.444-44', 'Igor Guerra', 'Médico', '1980-12-15', '101100', 1),
('555.555.555-55', 'Ana Luiza', 'Médico', '1982-01-19', '10000', 1),
('666.666.666-66', 'Luiz Guilherme', 'Recepção', '1960-03-12', '2560', 1),
('777.777.777-77', 'Hiago Carlos', 'Recepção', '1988-08-23', '2560', 1);

INSERT INTO login (usuario, senha, cpf_funcionario, data_cadastro) VALUES
('Shayra', '765', '222.222.222-22', NOW()),
('Gessika', '455', '333.333.333-33', NOW()),
('Igor', '157', '444.444.444-44', NOW()),
('Ana', '112', '555.555.555-55', NOW()),
('Luiz', '117', '666.666.666-66', NOW()),
('Hiago', '123', '777.777.777-77', NOW());

INSERT INTO recepcao (cpf, horaFuncionamento) VALUES
('777.777.777-77', '06:00-13:00'),
('666.666.666-66', '13:00-20:00');

INSERT INTO escala (hr_inicio, hr_fim, dia_semana) VALUES
('00:00:00', '12:00:00', 'Domingo'),
('12:00:00', '00:00:00', 'Domingo'),
('00:00:00', '12:00:00', 'Segunda-Feira'),
('12:00:00', '00:00:00', 'Segunda-Feira'),
('00:00:00', '12:00:00', 'Terça-Feira'),
('12:00:00', '00:00:00', 'Terça-Feira'),
('00:00:00', '12:00:00', 'Quarta-Feira'),
('12:00:00', '00:00:00', 'Quarta-Feira'),
('00:00:00', '12:00:00', 'Quinta-Feira'),
('12:00:00', '00:00:00', 'Quinta-Feira'),
('00:00:00', '12:00:00', 'Sexta-Feira'),
('12:00:00', '00:00:00', 'Sexta-Feira'),
('00:00:00', '12:00:00', 'Sábado'),
('12:00:00', '00:00:00', 'Sábado');

INSERT INTO medico (crm, cpf, especialidade) VALUES
('12345-GO', '222.222.222-22', 'Oftalmologista'),
('56789-GO', '444.444.444-44', 'Cardiologista'),
('25896-GO', '555.555.555-55', 'Psiquiatra');

INSERT INTO escala_med (id_escala, crm_med) VALUES
('1', '12345-GO'),
('2', '56789-GO'),
('3', '25896-GO'),
('4', '12345-GO'),
('5', '56789-GO'),
('6', '25896-GO'),
('7', '12345-GO'),
('8', '56789-GO'),
('9', '25896-GO'),
('10', '12345-GO'),
('11', '56789-GO'),
('12', '25896-GO'),
('13', '12345-GO'),
('14', '56789-GO');

INSERT INTO administracao_recep (cpf_adm, id_recepcao) VALUES
('333.333.333-33', 1),
('333.333.333-33', 2);

INSERT INTO administricao_med (cpf_adm, crm_med) VALUES
('333.333.333-33', '12345-GO'),
('333.333.333-33', '56789-GO'),
('333.333.333-33', '25896-GO');

INSERT INTO paciente (cpf, nome, telefone, dt_nasc, situacao, plano_saude, parente) VALUES
('000.111.000.77', 'Stich Ohana', '(64) 99004-8952', '2002-04-03', 'Internação', 'IPASGO', 'Lilo Ohana - (Irmã)'),
('111.111.777.77', 'João Frango', '(64) 99654-7812', '1984-09-27', 'Coma Induzido', 'Não', 'Raquel Teixeira - (Esposa)');

INSERT INTO cad_paciente (id_recepcao, id_paciente, dt_cad) VALUES
(1, 1, '2022/10/28'),
(2, 2, NOW());

INSERT INTO leitos (id_leitos, id_paciente) VALUES
('Q1-L1', 1),
('Q1-L2', 2);

INSERT INTO leitos (id_leitos) VALUES
('Q2-L1'),
('Q2-L2'),
('Q3-L1'),
('Q3-L2'),
('Q4-L1'),
('Q4-L2'),
('Q5-L1'),
('Q5-L2'),
('Q6-L1'),
('Q6-L2'),
('Q7-L1'),
('Q7-L2'),
('Q8-L1'),
('Q8-L2');


INSERT INTO consulta (id_paciente, crm_med, id_leitos, id_recepcao, hr_inicio) VALUES
(1, '12345-GO', 'Q1-L1', 1, NOW()),
(2, '56789-GO', 'Q1-L2', 2, NOW());