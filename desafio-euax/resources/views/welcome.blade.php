<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Cadastre-se</a>
                        @endif
                    @endif
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <h1>Desafio EUAX</h1>
                <h3>Sobre o Grupo EUAX</h3>
                <p>Se você chegou a esta página e não sabe do que se trata entre no nosso site e conheça um pouco mais sobre o [Grupo EUAX](https://grupoeuax.com.br/carreira/) e depois aproveite para participar de nosso desafio para Web Developer.</p>
                <h3>Desafio Web Developer</h3>
                <p>Olá, você acaba de ser contratado como desenvolvedor em uma grande empresa e começa a receber seus primeiros projetos para trabalhar. Sua empresa não usa o ARTIA como solução para acompanhamento de projetos e tarefas então como você precisa ter uma visibilidade melhor das suas atividades resolve desenvolver uma solução para acompanhar suas entregas.</p>
                <h3>Problema</h3>
                <p>Você precisa criar um cadastro de projetos com a data de início e data final para a entrega, esse projeto pode ter 1 ou N atividades que também precisam ser cadastradas com as datas de início e data de fim. Após ter feito todos os cadastros precisamos saber quantos % dos projetos já temos finalizados e também se o projeto terá atrasos ou não. Para saber a % de andamento do projeto deve ser considerado o número de atividades finalizadas e quantidade de atividades ainda sem finalizar. Para saber se o projeto terá atraso considere a maior data final das atividades e compare com a data final do projeto, se for maior que a data final, o projeto terminará com atrasos. Abaixo segue exemplo das tabelas para cadastros.</p>
                <h3>Tabela Projetos</h3>
                <pre>
                | Campo           | Tipo    | Obrigatório  |
                | :-------------- | :-----: | -----------: |
                | Nome do Projeto | Texto   | Sim          |
                | Data Início     | Data    | Sim          |
                | Data de fim     | Data    | Sim          |
                </pre>
                <h3>Tabela Atividades</h3>
                <pre>
                | Campo             | Tipo    | Obrigatório  |
                | :--------------   | :-----: | -----------: |
                | ID do Projeto     | Inteiro | Sim          |
                | Nome da Atividade | Texto   | Sim          |
                | Data Início       | Data    | Sim          |
                | Data de fim       | Data    | Sim          |
                | Finalizada?       | Boolean | Não          |
                </pre>
                <h3>Exemplos</h3>
                <p><strong>Exempo 1</strong></p>
                <pre>
                | ID Projeto | Nome Projeto | Data Inicio | Data Fim   | % Completo | Atrasado |
                | :--------- | :----------: | ----------: | ---------: | ---------: | -------: |
                | 1          | Projeto 1    | 01/01/2019  | 31/01/2019 | 50%        | Não      |
                </pre>
                <pre>
                | ID Atividade | ID Projeto | Nome Atividade | Data Inicio | Data Fim   | Finalizada? |
                | :---------- | :---------: | -------------: | ----------: | ---------: | ----------: |
                | 1          | 1            | Atividade 1    | 06/01/2019  | 15/01/2019 | Sim         |
                | 2          | 1            | Atividade 2    | 16/01/2019  | 31/01/2019 | Não         |
                </pre>
                <p><strong>Exempo 2</strong></p>
                <pre>
                | ID Projeto | Nome Projeto | Data Inicio | Data Fim   | % Completo | Atrasado |
                | :--------- | :----------: | ----------: | ---------: | ---------: | -------: |
                | 2          | Projeto 2    | 01/02/2019  | 28/02/2019 | 0%         | Sim      |
                </pre>
                <pre>
                | ID Atividade | ID Projeto | Nome Atividade | Data Inicio | Data Fim   | Finalizada? |
                | :---------- | :---------: | -------------: | ----------: | ---------: | ----------: |
                | 1          | 2            | Atividade 1    | 01/02/2019  | 10/02/2019 | Não         |
                | 2          | 2            | Atividade 2    | 11/02/2019  | 20/02/2019 | Não         |
                | 3          | 2            | Atividade 3    | 21/02/2019  | 02/03/2019 | Não         |
                </pre>
                <h3>Avaliação</h3>
                <p>No arquivo README do projeto explique o funcionamento e quais tecnologias foram utilizadas para implementação do desafio.</p>
                <ul>
                    <li>Use sua criatividade e conhecimentos para montar as telas de cadastros e listagens;</li>
                    <li>Use a linguagem e tecnologias que se sentir à vontade, em nossa conversa repassaremos os pontos abordados na solução;</li>
                    <li>Mantenha um código limpo e organizado, isso contará bastante;</li>
                    <li>Será avaliado apenas o cadastro e listagem dos projetos e atividades, mas caso queira trabalhar com edição e exclusão também contará pontos extras.</li>
                </ul>
                <h3>Observações</h3>
                <p>Caso não consiga completar o desafio ou enfrente qualquer dificuldade, nos envie mesmo assim, pois seu esforço também será avaliado na entrega.</p>
                <p>Boa Sorte</p>
            </div>
        </div>
    </body>
</html>
