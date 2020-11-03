# php-test
A simple CRUD app built with PHP for a job test.

## :gear: Installation
```bash
git clone https://github.com/Wendryl/php-test.git
cd php-test
composer install
```
## :minidisc: Database Setup
```bash
mysql -u root -p
{your_password}
```
Inside mysql shell create a database called car_store
```bash
create database car_store
exit
```
Import car_store.sql file to mysql
```bash
mysql -u root -p car_store < car_store.sql
{your_password}
```
