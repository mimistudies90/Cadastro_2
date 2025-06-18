# Cadastro_2

# Sistema-de-Login
1. Introdução
Nome do Projeto: Sistema_Login

## 1 Introdução
O Sistema_Login é uma aplicação simples desenvolvida em PHP com MySQL que permite autenticação de usuários. Ele serve como base para sistemas maiores, garantindo que apenas usuários cadastrados possam acessar áreas protegidas do sistema.

Tecnologias Utilizadas:
PHP, MySQL, HTML,, Visual Studio Code

Autores:Júlia Carla do Carmo Júlio , Maria Cecília da Conceição Pinto
Responsável: Paula Maria da Rocha Celidorio

Data de Início:
06/06/2025

## 2 Estrutura do Projeto

Cadastro/
│
├── config/
│ └── Database.php # Configurações do banco de dados
│
├── models/
│ ├── Usuario.php # Entidade Usuário
│ └── UsuarioDAO.php # Operações com o banco
│
├── public/
│ ├── cadastro.php # Página de cadastro
│ ├── criar_user.php # Processa cadastro
│ ├── index.php # Página inicial
│ ├── login.php # Página de login
│ └── process_login.php # Valida credenciais
│
├── utils/
│ ├── Sanit.php # Limpeza de dados
│ ├── SenhaValida.php # Validador de senha
│ └── ver-senha.php # Utilitário (dev)
│
├── CriarBanco.txt # Guia de setup
└── sistema_login.sql # Script SQL completo

## 3 Configuração do Ambiente ### **Requisitos**
    • Servidor XAMP
    • Visual Studio Code[1.98.2]
    • MySQL  Workbench[8.0.36]
    • Sistema operacinal: Windows 11;
    ### **Instalação**
    
# 4 Como Executar o Projeto
Clone o repositório:

bash
Copiar
Editar
git clone https://github.com/mimistudies90/Sistema-de-Login2.git
Importe o banco de dados:

Use o phpMyAdmin ou o MySQL para importar o arquivo sistema_login.sql.

Configure o banco de dados:

No arquivo config/Database.php, edite os dados de conexão conforme seu ambiente:

php
Copiar
Editar
private $host = 'localhost';
private $db_name = 'nome_do_banco';
private $username = 'root';
private $password = '';
Acesse o sistema:

Execute o servidor local (como XAMPP) e acesse http://localhost/Sistema_Login/public/login.php.

## 4 Estrutura do Banco de Dados 

  CREATE DATABASE sistema_login;
USE sistema_login;
-- Cria a tabela de usuários
CREATE TABLE usuarios (
    id INT PRIMARY KEY AUTO_INCREMENT,
    email VARCHAR(255) NOT NULL UNIQUE,
    senha_hash VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
-- Insere um usuário de exemplo (senha = 'senha123')
INSERT INTO usuarios (email, senha_hash) 
