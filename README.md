# desafios-desevolvimento

## Tecnologias
Laravel 8 (PHP)
MySQL

## Instalação:
git clone url_do_repositório
configurar o arquivo config/database.php
cd desafio-euax
php artisan migrate
npm install
npm run dev
php artisan serve

## Passo a passo do desenvolvimento
1. Criação dos arquivos de migration
2. Criação dos arquivos de modelo
3. Criação das rotas (resources)
4. Criação dos Controllers
5. Criação das Ações de CRUD
6. Criação das Views do CRUD
7. Exibição do progresso do projeto
8. Verificação do atraso do projeto
9. Quality Assurance

# Instruções de uso
### Login
Clique em "Registro" e realize um cadastro
Clique em Login e faça o login usando as suas credenciais

### Novo Projeto
Na Dashboard, clique em "Projetos" para exibir a lista de projetos relacionadas ao seu usuário.
Clique em "+ Novo Projeto" e realize o cadastro do seu primeiro projeto

### Novas atividades
Na listagem de projetos, clique em "Gerenciar Atividades" para acessar a lista de atividades do projeto
Clique no botão "+ Adicionar Atividade" e cadastre quantas atividades desejar para o projeto

### Concluir atividades
Na listagem de atividades do projeto, clique no nome da atividade para abrir o painel de edição.
Marque o campo "Atividade Finalizada" e atualize

### Andamento dos projetos
Você pode verificar o andamento na tabela de projetos
Uma barra indicará a porcentagem de atividades concluídas e o projeto estará em atraso caso uma ou mais atividades não concluídas tenha o prazo final superior ao do projeto.