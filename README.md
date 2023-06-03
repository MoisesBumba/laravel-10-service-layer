# Setup Docker Para Projetos Laravel (10)
[Assine a Forma-te, e Seja VIP!](https://forma-te.co.ao/)

### Passo a passo
Clone Repositório
```sh
git clone -b setup-docker-laravel https://github.com/MoisesBumba/setup-docker-laravel.git
```

```sh
cd app-laravel/
```

Crie o Arquivo .env
```sh
cp .env.example .env
```

Atualize as variáveis de ambiente do arquivo .env
```
APP_NAME="Forma-te"
APP_URL=http://localhost:8989

DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=nome_que_desejar_db
DB_USERNAME=nome_usuario
DB_PASSWORD=senha_aqui

CACHE_DRIVER=redis
QUEUE_CONNECTION=redis
SESSION_DRIVER=redis

REDIS_HOST=redis
REDIS_PASSWORD=null
REDIS_PORT=6379

```

Suba os containers do projeto
```sh
docker-compose up -d
```


Acessar o container
```sh
docker-compose exec app bash
```


Instalar as dependências do projeto
```sh
composer install
```


Gerar a key do projeto Laravel
```sh
php artisan key:generate
```


Acessar o projeto
[http://localhost:8989](http://localhost:8989)