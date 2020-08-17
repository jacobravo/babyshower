# Babytuto demonstration system: Babyshower

This project is a demo version of a babyshower system, made especially for Babytuto company.

## Deployment 🚀

This guide is made for a Docker mount system, but is possible to clone it into any LAMP-like system. Just clone the project into the Apache /www folder and follow the instructions.

### Pre-requisites 📋

1. Docker for Desktop if you run it in docker. RECOMMENDED
2. A LAMP-like system. In Linux distributions, you need Apache, MySQL or MariaDB installed, and PHP 7.4 or superior. In Windows, XAMPP would be useful. If you use Docker, use the mattrayner/lamp container.
3. Git client to clone the project.
4. Composer software. The deployment guide says how to install it by console.


### Installation 🔧

_NOTICE: If you don't use Docker, jump to step 3._

STEP 1. 
_Open a system terminal (cmd in Windows) and write the following. In the HOST_PORT field write the port where you want to enter from the host system._
```
#>docker run -d -p <HOST_PORT>:80 --name babyshower -v /var/www:/var/www/ mattrayner/lamp:latest-1804
```
STEP 2. 
_Go to the Docker terminal. In Windows, you can open it in the dashboard, in the container options._

STEP 3.
_In the Docker console or in the Linux terminal if you use LAMP architecture and is completely installed, write the following:_
```
#>bash
#>mysql
#>create database babyshower;
#>exit;
```
_If throws an alert when you enter the "mysql" command, please try again_

STEP 4.
_Clone the project using Git:_
```
#>cd /var/www
#>mkdir html
#>cd html
#>git clone https://github.com/jacobravo/babyshower.git
#>cd babyshower
```
STEP 5.
_Enable project._
```
#>composer install
#>composer update
#>composer dump-autoload
#>php artisan migrate
```

_"composer update" command may take a few minutes_

STEP 6.
_Enable access._
```
#>chown -R www-data:www-data /var/www
```
## Testing ⚙️
The following tests has been made:
_1. Create a new babyshower filling all form fields. The system only leaves schedule babyshowers in the next 4 months._
_2. Test both generated links._
_3. In the first generated link, the user can add or delete items from the list, again and again._
_4. In the second link the user can buy and block items and can't buy it again or enable it._
_5. This tests has been tried with different babyshower instances, and they can not interfer between them._

## Deployment 📦
_To enter the system, go to the following URL from the host:_
```
localhost:<HOST_PORT>/babyshower/public/index
```

## Built using the following tools 🛠️
-Docker desktop for Windows
-Visual Studio Code
-Laragon integating Apache, MySQL and PHP 7.4
-Git for Windows

*Coded in Windows 10 and deployed in Docker container*

## Author ✒️
_Javier Cortes Bravo. Github user jacobravo_
