# Sistema-de-Cadastro
1. Introdução
Nome do Projeto: Cadastrop

## 1 Introdução
O Sistema_Login é uma aplicação simples desenvolvida em PHP com MySQL que permite autenticação de usuários. Ele serve como base para sistemas maiores, garantindo que apenas usuários cadastrados possam acessar áreas protegidas do sistema.

Tecnologias Utilizadas:
PHP, MySQL, HTML,, Visual Studio Code

Autores:Pietra Massarotti e Maria Cecília da Conceição Pinto


Data de Início:
16/06/2025

## 2 Estrutura do Projeto


## Estrutura do Projeto
Cadastro/
│
├── config/
│   └── Database.php             # Configurações de conexão com o banco de dados
│
├── models/
│   ├── Usuario.php              # Modelo/Entidade Usuário
│   └── UsuarioDAO.php           # Data Access Object para operações com usuários
│
├── public/
│   ├── cadastro.php             # Página de cadastro de usuários
│   ├── criar_user.php           # Script para criação de usuários (provavelmente processa o formulário de cadastro)
│   ├── index.php                # Página inicial
│   ├── login.php                # Página de login
│   └── process_login.php        # Script para processar o login
│
├── utils/
│   ├── Sanit.php                # Utilitários para sanitização de dados
│   ├── SenhaValida.php          # Utilitário para validação de senhas
│   └── ver-senha.php            # Utilitário para visualização de senhas (provavelmente para debug)
│
├── CriarBanco.txt               # Instruções para criação do banco de dados
└── sistema_login.sql            # Script SQL para criação da estrutura do banco de dados

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
git clone https://github.com/mimistudies90/Cadastro_2.git
Importe o banco de dados:

Use o phpMyAdmin ou o MySQL para importar o arquivo sistema_login.sql.

Configure o banco de dados:

No arquivo config/Database.php, edite os dados de conexão conforme seu ambiente:

php
Copiar
Editar
private $host = 'localhost';
private $db_name = 'sistema_login';
private $username = 'root';
private $password = '(A senha do seu banco)';
Acesse o sistema:

Execute o servidor local (como XAMPP) e acesse http : http://localhost/Cadastro/public/cadastro.php
## 4 Estrutura do Banco de Dados 


CREATE DATABASE sistema_login;
USE sistema_login;


CREATE TABLE usuarios (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    senha_hash VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO usuarios (email, senha_hash) 
VALUES ('usuario@exemplo.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi');
