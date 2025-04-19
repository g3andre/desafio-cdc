# Desafio Casa do Código

## Descrição do projeto
Este projeto é um desafio técnico para a Casa do Código, desenvolvido em PHP com o framework Laravel. O objetivo é criar uma aplicação simples de gerenciamento de livros.

## Execução do projeto

### Requisitos
- PHP 8.0 ou superior
- Composer
- MySQL ou outro banco de dados suportado pelo Laravel
- Node.js e NPM (opcional, para compilar assets)

### Instalação
#### Utilizando o Docker e Sail
- Necessário ter o Docker e o Docker Compose instalados na sua máquina.
- Para executar o projeto utilizando o Docker, siga os passos abaixo:

1. Instale as dependências do projeto:
```bash
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php84-composer:latest \
    composer install --ignore-platform-reqs
```
2. Copie o arquivo `.env.example` para `.env`:
```bash
cp .env.example .env
```
3. Inicie o ambiente Docker:
```bash
./vendor/bin/sail up -d
```
4. Gere a chave de aplicativo:
```bash
./vendor/bin/sail artisan key:generate
```
5. Crie o banco de dados e execute as migrações:
```bash
./vendor/bin/sail artisan migrate
```
6. Popule o banco de dados com dados fictícios (opcional):
```bash
./vendor/bin/sail artisan db:seed
```
7. Acesse a aplicação no navegador:
```
http://localhost
```

#### Utilizando o Composer
Para executar o projeto, siga os passos abaixo:

1. Instale as dependências:
```bash
composer install
```
2. Crie um arquivo `.env` com as variáveis de ambiente necessárias. Você pode usar o arquivo `.env.example` como modelo:
```bash
cp .env.example .env
```
3. Gere a chave de aplicativo:
```bash
php artisan key:generate
```
4. Crie o banco de dados e execute as migrações:
```bash
php artisan migrate
```
5. Popule o banco de dados com dados fictícios (opcional):
```bash
php artisan db:seed
```
6. Inicie o servidor de desenvolvimento:
```bash
php artisan serve
```
7. Acesse a aplicação no navegador:
```
http://localhost
```
