CREATE DATABASE radajori;

USE radajori;

CREATE TABLE `usuariopin` (
  `id_userpin` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `pin` varchar(255) NOT NULL,
  `is_dev` tinyint not null
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `motor` (
  `id_motor` int(11) NOT NULL,
  `numeracao_motor` varchar(255) not null,
  `descricao_motor` varchar(255) NOT NULL,
  `base` varchar(50)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `ordem_servico` (
  `id_os` int(11) NOT NULL,
  `descricao_atividade` varchar(255) NOT NULL,
  `motor` varchar(100) NOT NULL,
  `data_os` date NOT NULL,
  `periodo` varchar(100) NOT NULL,
  `turma` varchar(100) NOT NULL,
  `veiculo` varchar(255) not null, 
  `responsavel` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `veiculos` (
  `id_veiculo` int(11) NOT NULL,
  `modelo` varchar(255) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `cor` varchar(50) NULL,
  `descricao` text NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `motor`
  ADD PRIMARY KEY (`id_motor`);

ALTER TABLE `ordem_servico`
  ADD PRIMARY KEY (`id_os`);

ALTER TABLE `usuariopin`
  ADD PRIMARY KEY (`id_userpin`);

ALTER TABLE `veiculos`
  ADD PRIMARY KEY (`id_veiculo`);

ALTER TABLE `usuariopin`
  MODIFY `id_userpin` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `motor`
  MODIFY `id_motor` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `ordem_servico`
  MODIFY `id_os` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `veiculos`
  MODIFY `id_veiculo` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

INSERT INTO usuariopin(nome,pin,is_dev) VALUES('DEV','radajori',1);
