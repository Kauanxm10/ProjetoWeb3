# ProjetoWeb3 - Sistema de Delivery (Módulo)

Este projeto é um módulo de um sistema de delivery, responsável pelo gerenciamento de endereços, produtos e tipos de produtos. Ele permite que administradores tenham controle total sobre essas entidades, enquanto usuários podem visualizá-las sem permissão de edição.

## 🚀 Tecnologias Utilizadas

- **Laravel** - Framework PHP para desenvolvimento robusto
- **Bootstrap e CSS** - Estilização e design responsivo
- **MySQL** - Banco de dados para armazenamento de informações

## 📌 Funcionalidades

- 📍 **Gerenciamento de Endereços** (apenas para administradores)
- 🍔 **Cadastro, edição e remoção de Produtos** (restrito a administradores)
- 🏷️ **Gerenciamento de Tipos de Produtos** (somente administradores)
- 👥 **Usuários podem visualizar os dados, mas sem permissão de edição**
- 🎨 **Interface estilizada com Bootstrap**

## ⚙️ Como Instalar e Rodar

1. Clone este repositório:
   ```sh
   git clone https://github.com/Kauanxm10/ProjetoWeb3.git
   ```
2. Instale as dependências do Laravel:
   ```sh
   composer install
   ```
3. Configure o arquivo `.env` com os dados do banco de dados MySQL
4. Gere a chave da aplicação:
   ```sh
   php artisan key:generate
   ```
5. Execute as migrações para criar as tabelas:
   ```sh
   php artisan migrate
   ```
6. Inicie o servidor local:
   ```sh
   php artisan serve
   ```
7. Acesse o projeto no navegador: `http://127.0.0.1:8000`

## 📩 Contato
Desenvolvido por **Kauan Xavier Moreira**
- [GitHub](https://github.com/Kauanxm10)

---

Contribuições são bem-vindas! 🚀
