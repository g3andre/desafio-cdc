# Desafio Casa do Código

## Descrição do projeto
Este projeto é um desafio técnico do curso Dev+ Eficiente simulando a Casa do Código, desenvolvido em PHP com o framework Laravel. 

## Execução do projeto

### Requisitos
- PHP 8.2 ou superior
- Composer

ou

- Docker

## Instalação
### Utilizando o Docker e Sail
- Necessário ter o Docker instalado na sua máquina. 

Para executar o projeto utilizando o Docker, siga os passos abaixo:

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
3. Inicie o ambiente Docker utilizando o Sail:
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
7. Execute a suite de testes
```bash
./vendor/bin/sail test
```
8. Acesse a aplicação no navegador:
```
http://localhost
```
---
### Utilizando o Composer
- Necessário ter o PHP 8.2 ou superior e o Composer instalados na sua máquina.

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
6. Execute a suite de testes
```bash
php artisan test
```
7. Inicie o servidor de desenvolvimento:
```bash
php artisan serve
```
8. Acesse a aplicação no navegador:
```
http://localhost
```
