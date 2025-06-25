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
│   ├── Sanitizacao.php          # Utilitários para sanitização de dados
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

# Como executar o processo de recriptografia:
O sistema utiliza criptografia de senha para garantir a segurança dos dados dos usuários. As senhas presentes no arquivo dump do banco de dados já estão criptografadas, porém, devido à natureza da função password_hash() do PHP, os hashes podem variar de servidor para servidor.

Por isso, é necessário recriptografar as senhas no seu próprio ambiente, garantindo que o sistema funcione corretamente no seu servidor.

Passo a Passo do Processo
1 – Acesse as Senhas Originais
No final desse README estão as senhas dos usuários em texto puro, exclusivamente para facilitar o processo de recriptografia.

2 – Gere os Novos Hashes no Seu Servidor
Abra no Visual Studio Code o arquivo ver-senha.php que está na pasta utils.

Mude o valor da variável $senha com a senha que deseja criptografar.

Abra o arquivo no seu navegador.
Exemplo(http://localhost/Cadastro/utils/ver-senha.php)

Este arquivo irá:
🔸 Ler as senhas.
🔸 Gerar novos hashes utilizando password_hash(), agora no seu servidor, com a configuração e ambiente específicos.
🔸 Exibir na tela os hashes atualizados prontos para uso.

3 – Substituir os Hashes no Dump do Banco
Abra o arquivo dump.sql em um editor de texto.

Localize os hashes antigos (as senhas criptografadas que vieram no dump).

Substitua cada hash antigo pelo novo hash gerado no seu servidor, mantendo a correspondência correta com cada usuário.

4 – Importar o Dump Atualizado
Após substituir os hashes no dump, importe o banco de dados atualizado no seu servidor normalmente.

O sistema estará funcionando corretamente, com as senhas criptografadas de acordo com seu ambiente.

5 – Segurança Após o Processo
Após finalizar o processo, é altamente recomendado:
🔸 Garanta que esses arquivos não fiquem acessíveis publicamente, evitando riscos de segurança.

Observação Importante
Este processo deve ser realizado sempre que você importar o banco de dados a partir do dump em um novo servidor ou ambiente.

Isso garante que o sistema de login funcione corretamente, pois os hashes estarão compatíveis com o seu servidor.

# Senha & Hash




| Nome | E-mail | Senha | Hash atual da senha|
|------|---------|-------|------|
|Pietra Massarotti	|pietra@email| 		Pietra21 	| $10$CziSg7NdfJVlaBJe0vrTuu1g400FMKuLrJzF1QdgsSu3VUi1e9/b. |
|Maria Cecília	|	maria@email 	|	MariaC12 	| $2y$10$cFA3Ybrq5M1A6glexP1Ij.CXZWFXc4hd6.WUDVr5F0ZqCf.TeSyO2 |
|Pedro Augusto 	|	pedro@gmail 	|	Pedro457 	| $10$eaPk9NdIbqBSgiN6uHv4UeZtX21AIFLdNnuSQ0ofdo9v1r5K9.Ga6 |
|Júlia Carla 	|	julinha@hotmail |	Julinha19 |	$2y$10$BJSruAQp6CY9dnFZCCtMh./Fk2r7ivtXiEQW6P7dosVN/VKMY8kE. |
|Henry Gabriel| 		henry@gmail |		Henry231 |	$2y$10$qPx/aHJF5xWbHxKPHEvB3.aDk7wGJHQgaysJ1u2.EWCgVm2P/HE92 |
|Teste| 			    teste@email |		Teste12345 |	$10$fgxX52GBZ.mUdGCPff/xH.sRemXfCBQA.WweWpcoQbzmypURpCbWu |














