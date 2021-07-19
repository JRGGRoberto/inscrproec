CREATE USER extunesparrg@localhost IDENTIFIED by 'DEFINIR_SENHA';
GRANT ALL PRIVILEGES ON *.* TO extunesparrg@localhost REQUIRE NONE WITH GRANT OPTION MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0;
CREATE DATABASE IF NOT EXISTS extunesparrg CHARACTER SET utf8 COLLATE utf8_general_ci;
GRANT ALL PRIVILEGES ON extunesparrg.* TO extunesparrg@localhost;

create table inscricao(
  id varchar(38),
  nome varchar(45) not null,
  rg  varchar(15) not null,
  cpf  varchar(14) not null,
  dt_nasc date not null,
  ender  varchar(45) not null,
  bairro varchar(40) not null,
  cidade varchar(40) not null,
  estados varchar(2) not null,
  cep varchar(9) not null,
  tel1 varchar(15) not null,
  tel2 varchar(15),
  email varchar(45) not null,
  curso_id varchar(38) not null, 
  serie int not null,
  prof_id varchar(38) not null,
  bolsa varchar(5) not null,
  rg_img varchar(50),
  cpf_img varchar(50),
  ip_address varchar(60),
  created_at timestamp default now(),
  primary key (id)
);

create table professor(
  id varchar(38),
  nome varchar(45) not null,
  email varchar(45) not null,
  created_at timestamp default now(),
  primary key (id)
);