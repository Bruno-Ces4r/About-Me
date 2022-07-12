# About-Me
<h4 align="center"> 
	 Status: 🚧Em andamento.
</h4>
<h3> <b>Qual o objetivo do projeto? </b></h3>
<p>Site criado com o intuito de apresentar minhas experiências profissionais e competências que conquistei no decorrer da caminhada profissional.</p>
<hr>
<h3 align='center'> <b> Página Inicial </b> </h3>
<hr>

<h2>Comando SQL</h2>
<hr>
<h3>Table do Admin</h3>
<hr>

create table tb_admin(
    id int not null primary key auto_increment,<hr>
    nome varchar(255) not null,<hr>
    email varchar(255) not null,<hr>
    matricula varchar(255) not null,<hr>
    senha varchar(255) not null,<hr>
    dia_inclusao datetime not null,<hr>
    dia_exclusao datetime,<hr>
    username_inclusao varchar(255) not null,<hr>
    username_exclusao varchar(255),<hr>
    validacao int not null<hr>
);


