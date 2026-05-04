# 🚀 Projeto Laravel - Sistema de Posts com Gates

## About The Project

Este projeto foi desenvolvido durante o curso do professor João Ribeiro, utilizando o framework Laravel com ambiente totalmente containerizado via Docker e Laravel Sail.

A aplicação consiste em um sistema de **criação e gerenciamento de posts**, com foco principal na implementação de **controle de acesso utilizando Gates do Laravel**.

O objetivo é praticar conceitos modernos de desenvolvimento backend com PHP, incluindo:

- Organização de projeto
- Controle de permissões com Gates
- Boas práticas no Laravel
- Ambiente de desenvolvimento padronizado com Docker

---

## 🧰 Tecnologias Utilizadas

- PHP 8.5
- Laravel
- Docker
- Docker Compose
- Laravel Sail
- MySQL 8.4
- phpMyAdmin

---

## ⚙️ Como executar o projeto

```bash
git clone <seu-repositorio>
cd <nome-do-projeto>

composer install
cp .env.example .env

./vendor/bin/sail up -d
./vendor/bin/sail artisan key:generate
./vendor/bin/sail artisan migrate
```

---

## 🌐 Acessos

- Aplicação: http://localhost
- phpMyAdmin: http://localhost:8080

---

## 📚 Objetivo

Praticar o uso de **Gates no Laravel** para controle de autorização em ações como criação, edição e exclusão de posts.

---

## 🧑‍💻 Autor

Diego Ferraz

---

## 📄 Licença

Projeto para fins educacionais.
