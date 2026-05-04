Aqui vai um README profissional e bem organizado pro seu projeto 👇

🚀 Projeto Laravel - Curso Professor João Ribeiro

Este projeto foi desenvolvido durante o curso do professor João Ribeiro, utilizando o framework Laravel com ambiente totalmente containerizado via Docker e Laravel Sail.

O objetivo é praticar conceitos modernos de desenvolvimento backend com PHP, organização de projeto e ambiente de desenvolvimento padronizado.

🧰 Tecnologias Utilizadas
PHP 8.5
Laravel
Docker
Docker Compose
Laravel Sail
MySQL 8.4
phpMyAdmin
⚙️ Ambiente de Desenvolvimento

O projeto utiliza Laravel Sail, que é uma interface leve para trabalhar com Docker no Laravel.

📦 Estrutura dos Containers

O ambiente é composto por:

app (laravel.test) → aplicação Laravel
mysql → banco de dados
phpmyadmin → interface web para gerenciamento do banco
🚀 Como executar o projeto

1. Clone o repositório
   git clone <seu-repositorio>
   cd <nome-do-projeto>
2. Instale as dependências
   composer install
3. Configure o ambiente

Copie o arquivo .env:

cp .env.example .env 4. Suba os containers com Sail
./vendor/bin/sail up -d 5. Gere a chave da aplicação
./vendor/bin/sail artisan key:generate 6. Execute as migrations
./vendor/bin/sail artisan migrate
🌐 Acessos
Aplicação: http://localhost
Vite (frontend): http://localhost:5173
phpMyAdmin: http://localhost:8080
🗄️ Banco de Dados

Configuração padrão via .env:

DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=sail
DB_PASSWORD=password
🐳 Docker Compose

Principais serviços configurados:

🔹 App (Laravel + Sail)
Porta: 80
Hot reload com Vite
Volume sincronizado com o projeto local
🔹 MySQL
Versão: 8.4
Volume persistente (sail-mysql)
🔹 phpMyAdmin
Porta: 8080
Conectado automaticamente ao MySQL
📌 Comandos úteis

Subir containers:

./vendor/bin/sail up -d

Parar containers:

./vendor/bin/sail down

Acessar container:

./vendor/bin/sail shell

Rodar artisan:

./vendor/bin/sail artisan <comando>

Rodar npm:

./vendor/bin/sail npm run dev
📚 Aprendizados

Durante o desenvolvimento deste projeto foram praticados:

Estrutura do Laravel
Uso do Docker no desenvolvimento
Configuração de ambiente com Sail
Integração com banco de dados MySQL
Uso de migrations e artisan

🧑‍💻 Autor

Diego Ferraz.

📄 Licença

Este projeto é apenas para fins educacionais.
