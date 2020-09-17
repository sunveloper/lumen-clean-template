# laravel-lumen-docker
Laravel, Lumen platform dockerization

# Versions
```sh
Lumen 8.0.1
Laravel 8.0
```

## First Start environment
To start docker environment, you must install [Docker](https://www.docker.com/get-started) and digit this command in your favorite terminal:
```sh
docker-machine start
docker-machine ssh
cd lumen-docker/docker
./docker-compose up --build -d --remove-orphans --force-recreate
./docker-compose exec php sh
cd ..
apk update
apk add curl
curl -s https://getcomposer.org/installer | php
mv composer.phar /usr/local/bin/composer
ln -s /usr/local/bin/composer.phar /usr/local/bin/composer
composer install
```
When the process finished you can open your browser and digit http://192.168.99.100:8181 to se you app works!

## Start environment
To start docker environment, you must install [Docker](https://www.docker.com/get-started) and digit this command in your favorite terminal:
```sh
docker-machine start
docker-machine ssh
cd lumen-docker/docker
./docker-compose up -d
```
When the process finished you can open your browser and digit http://192.168.99.100:8181 to se you app works!

## Stop environment
To stop your environment you must digit this command in your favorite terminal:
```sh
docker-machine start
docker-machine ssh
cd lumen-docker/docker
./docker-compose stop
```