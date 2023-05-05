﻿# MecanicaSenai
Projeto desenvolvido em grupo no 4 Semestre do Senai.

<h2> Como Rodar o projeto XAMPP</h2>
<ul>
  <li>Baixe OU Clone o projeto no seu ambiente</li>
  <li>Instale XAMPP de acordo com seu Sistema Operacional</li>
  <li>Coloque a pasta do projeto na pasta "htdocs" no diretório do xampp"</li>
  <li>Inicie o serviços APACHE & MySQL do XAMPP</li>
  <li>Rode o SQL para a criação do banco de dados em seu ambiente</li>
  <li>Acesse localhost/mecanicasenai </li>
</ul>

<h2>Rodar Projeto em DOCKER </h2>
<ul>
  <li>Baixe OU Clone o projeto no seu ambiente</li>
  <li>Instale Docker & Docker compose de acordo com seu Sistema Operacional https://www.docker.com/</li>
  <li>Abra o terminal na pasta raiz do projeto clonado no seu ambiente</li>
  <li>No terminal rode o comando <i><b> docker-compose up -d </b></i> OU <i><b> docker compose up -d </b></i> </li>
  <li>Divita-se acessando o endereço <b>localhost</b></li>
  <li>Para parar & desfazer o container do projeto digite <i><b> docker-compose down </b></i> OU <i><b> docker compose down </b></i></li>
</ul>

ToDo:
PIN de professor, ter acesso para cadastrar outros PINS estudantes & Professores.
PIN estudantes não poderam deletar ou editar qualquer coisa, seja carro, motor, atividades etc..
Apenas pins com nivel professor (is_dev = 1) poderam fazer essas ações.

cadastro de pin:
deve conter um campo para digitar o PIN que será usado manualmente
deve conter um campo para definir o nome do resposavel daquele pin
deve conter um select para selecionar se é Professor (ADM, permissão total) OU Estudante (acesso apenas a consultas)
