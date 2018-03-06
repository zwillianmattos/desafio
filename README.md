## O B J E T I V O   P R I N C I P A L
O objetivo desse projeto consiste em exibir meus conhecimentos em
desenvolvimento web utilizando as ferramentas:
* Lumen\Laravel;
* GitHub;
* Composer;
* PHP OO;
* Mysql;
* HTML5 + CSS3;
* JAVASCRIPT;

## P Á G I N A S   W E B
Landing Page => https://finchai.000webhostapp.com/
Painel Administrativo => https://finchai.000webhostapp.com/admin

## S O B R E   O   P R O J E T O
Neste projeto criei uma empresa fictícia, que está no ramo de Desenvolvimento
e Pesquisas em AI.
Na Landing Page é exibida uma página da Empresa explicando o que ela
faz, quais seus objetivos, seus projetos e pesquisas.
A Landing Page possui uma área onde os usuários podem contribuir com os
projetos ou pesquisas através de doações ou através de um feedback positivo.

## F E R R A M E N T A S   U T I L I Z A D A S
Para o desenvolvimento do projeto, foram utilizadas as seguintes ferramentas:
* Composer;
* GitHub;
* Atom Editor;
* CINEMA 4D - utilizado para renderizar as imagens da SAFIRA;
* Photoshop 2017 cc - utilizado para otimizar as imagens;
* Utilização de Frameworks: Lumen\Laravel, Materialize;

# Tutorial

## I N I C I A L I Z A N D O   O  S E R V I D O R   P H P
Para inicializar o servidor PHP, basta apenas iniciar o arquivo "install_finch.bat" e
depois o arquivo "start_finch.bat" localizado no diretório raiz do projeto.
Em caso de erro, execute no cmd do windows:
```
>> php -S localhost:8000 -t public
````
## B A N C O D E D A D O S
Crie um banco de dados em sua rede local e coloque o acesso no arquivo ".env"
localizado no diretório raiz do projeto.

Mysql: 
```
>> CREATE DATABASE `finchai`;
```
.env:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=finchAI
DB_USERNAME=root
DB_PASSWORD=senha
```
