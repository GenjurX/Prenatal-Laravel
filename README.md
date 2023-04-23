#This app was built with Laravel

To run this application, first clone the project in your local repository.

Make sure to import the database, which you can find in root directory to your database.

composer install
$ cp .env.example .env
$ Set up .env file
$ php artisan key:generate
$ php artisan storage:link
$ php artisan migrate:fresh --seed
$ php artisan serve
Then visit http://127.0.0.1:8000
