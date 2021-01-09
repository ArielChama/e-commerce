<h1 align="center"> E-commerce </h1>

<p align="justify"> Uma e-commerce simples</p>

### Configurando o ambiente

## Criando o banco de dados e o usuário

> CREATE DATABASE e_commerce;

> CREATE USER e_commerce_user@'%' IDENTIFIED BY 'BEh3pY9q3C6pZPA';

> GRANT ALL TO e_commerce.* TO e_commerce_user@'%';

## Instalando modulos

> git clone https://github.com/ArielChama/e-commerce

> cd e-commerce

<p align="justify"> Rodando o vueJs: </p>

> npm install && npm run dev

<p align="justify"> Executando as migrações: </p>

> php artisan migrate

## Rodando a aplicação :arrow_forward:

> php artisan serve :signal_strength:

<p align="justify">Abra seu navegador e acesse: </p>

> localhost:8000/


> Estado do Projeto: Em desenvolvimento :warning:
