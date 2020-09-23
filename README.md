 Proiectul trebuie instalat in fisierul 'htdocs' din Xampp. (.\xampp\htdocs). Baza de date trebuie sa se numeasca: webarticle. Mailurile se trimit prin mailtrap (https://mailtrap.io/). Va trebui sa editati datele din mailtrap din fisierul .env.example cu cele pe care le aveti voi in contul de mailtrap. (prea mult maitrap, mailtrap).
 
Comenzile din git bash

git clone https://github.com/Ddelia/webarticle.git

cd webarticle
composer install
cp .env.example .env
php artisan key:generate
php artisan config:cache
php artisan migrate
php artisan db:seed
php artisan serve
