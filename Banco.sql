create database test;
use test;

Create table formulario(
id int not null auto_increment,
nome varchar(120),
dt_nascimento date,
cep char(9),
logradouro varchar(120),
numero varchar(5),
complemento varchar(25),
bairro varchar(25),
cidade varchar(25),
telefone char(14), 
celular char(15),
data_hora varchar(50),
primary key (id)
) ENGINE=InnoDB;

use test;
create table servico(
idServico int not null auto_increment,
id int,
descricao varchar (300),
primary key (idServico)
) ENGINE=InnoDB;

alter table servico
add constraint fk_servico
foreign key(id) 
references formulario(id);