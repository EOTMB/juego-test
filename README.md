
## Quizz Example

Ejemplo de juego de preguntas y respuestas desarrollado en laravel

### Instalar Localmente
```shell
    docker run --rm -v $(pwd):/app composer install
    sudo chown -R $USER:$USER $(pwd)
    cp .env.example .env

    cp ./build/docker-compose.yml.dist ./docker-compose.yml
    docker-compose up -d
    docker-compose exec app php artisan key:generate
    docker-compose exec app php artisan config:cache
    docker-compose exec app php artisan migrate
```
