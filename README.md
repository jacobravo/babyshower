ESTO ES PARA UN DOCKER DESDE 0. SI DOCKER EXISTE Y TIENE GIT, PHP, APACHE Y COMPOSER INSTALADO,
SE SALTA AL PASO 4

1. En una terminal de sistema
docker run -d -p puerto_host:80 --name babyshower -v /var/www:/var/www/ mattrayner/lamp:latest-1804

2. Entrar en la consola de docker por dashboard

3. Crear base de datos
bash
mysql
create database babyshower;
exit;

4. Clonar proyecto de git
cd /var/www/html
git clone https://github.com/jacobravo/babyshower.git
cd babyshower/

5. Habilitar proyecto
composer install
composer update
composer dump-autoload
php artisan migrate

6. Habilitar accesos
chown -R www-data:www-data /var/www/html
