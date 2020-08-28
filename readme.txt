docker-machine start
docker-machine ssh
cd /c/Users/Sun/1/lumen-clean-template/docker
./docker-compose up --build -d --remove-orphans --force-recreate
./docker-compose exec php sh
cd ..
apk update
apk add curl
curl -s https://getcomposer.org/installer | php
mv composer.phar /usr/local/bin/composer
ln -s /usr/local/bin/composer.phar /usr/local/bin/composer
composer --version