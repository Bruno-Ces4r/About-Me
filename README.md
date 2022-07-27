# About-Me
<h4 align="center"> 
	 Status: 🚧Em andamento.
</h4>
<h3> <b>Qual o objetivo do projeto? </b></h3>
<p>Site criado com o intuito de apresentar minhas experiências profissionais e competências que conquistei no decorrer da caminhada profissional.</p>
<hr>
<h3 align='center'> <b> Página Inicial </b> </h3>
<hr>

<h3 align='center'>Table do Admin</h3>
<hr>

create table tb_admin(
    id int not null primary key auto_increment,
    nome varchar(255) not null,
    email varchar(255) not null,
    matricula varchar(255) not null,
    senha varchar(255) not null,
    dia_inclusao datetime not null,
    dia_exclusao datetime,
    username_inclusao varchar(255) not null,
    username_exclusao varchar(255),
    validacao int not null
);

<h3 align='center'>Table Contatos</h3>
<hr>

create table tb_contact(
	id int not null primary key auto_increment,
    nome varchar(255) not null,
    email varchar(255) not null,
    oportunidade varchar(255) not null,
    dia_inclusao datetime not null
    );


