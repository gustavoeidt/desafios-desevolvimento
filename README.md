# desafios-desevolvimento

## Tecnologias
Laravel 8 (PHP)
MySQL

## Instalação:
laravel new desafio-euax --jet
cd desafio-euax
php artisan migrate
npm install
npm run dev


1. Criação dos arquivos de migration
2. Criação dos arquivos de modelo
3. Criação das rotas (resources)
4. Criação dos Controllers
5. Criação das Ações de CRUD
6. Criação das Views do CRUD


## Tasks

esse projeto pode ter 1 ou N atividades que também precisam ser cadastradas com as datas de início e data de fim. 

Após ter feito todos os cadastros precisamos saber quantos % dos projetos já temos finalizados e também se o projeto terá atrasos ou não. 

Para saber a % de andamento do projeto deve ser considerado o número de atividades finalizadas e quantidade de atividades ainda sem finalizar.

Para saber se o projeto terá atraso considere a maior data final das atividades e compare com a data final do projeto, 

se for maior que a data final, o projeto terminará com atrasos.