# docker-nginx-php-fpm-codeception
Simple docker boilerplate for nginx php-fpm and codeception with selenium

clone

run docker-compose -d

composer install

to run tests:


docker exec -it 'container id' ./vendor/bin/codecept run
