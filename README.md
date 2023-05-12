# barber-system
Um sistema de agendamentos para barbeiros e profissionais de beleza. 

## Stack
- Laravel 10
- Laradock
- Postgres 15+
- Bootstrap 
- Docker com laradock

## Rodando o projeto localmente com laradock
1- clone o repositório
```bash
$ git clone https://github.com/dbastosdev/barber-system.git

# clone o laradock para dentro do projeto barber-system
git clone https://github.com/Laradock/laradock.git
```
2- acesse o repositório via terminal e entre na pasta do laradock
```bash
$ cd laradock
```
3- Crie e configure o .env do laradock e o .env da aplicação laravel. 

No laradock: 

- COMPOSE_PROJECT_NAME=barber-app
- PHP_VERSION=8.2
- POSTGRES_VERSION=alpine
- POSTGRES_CLIENT_VERSION=15
- POSTGRES_DB=barber-db
- POSTGRES_USER=default
- POSTGRES_PASSWORD=secret
- POSTGRES_PORT=5432
- POSTGRES_ENTRYPOINT_INITDB=./postgres/docker-entrypoint-initdb.d

Na aplicação laravel: 

- APP_NAME=Barber-app
- DB_CONNECTION=pgsql
- DB_HOST=postgres
- DB_PORT=5432
- DB_DATABASE=barber-db
- DB_USERNAME=default
- DB_PASSWORD=secret


4- faça o build da aplicação
* antes de rodar o comando abaixo, inicialize o docker em seu computador.
* essa operação pode demorar algum tempo. 
```bash
$ docker-compose up -d nginx mysql
```
5- dentro da pasta do laradock, siga as seguintes instruções iniciais
```bash
$ docker-compose exec workspace bash
$ composer install
# conecte-se ao banco de dados postgres e crie um banco de dados chamado barber-db
$ php artisan migrate
$ php artisan db:seed
$ php artisan key:generate
```
6- para encerrar ou iniciar novamente a aplicação utilize os comandos abaixo 
```bash
$ docker compose stop
$ docker compose start
```

7- Acesse o projeto via localhost no navegador: 
localhost

Nota o mesmo procedimento pode ser realizado para o banco de dados mysql, maria db. 
