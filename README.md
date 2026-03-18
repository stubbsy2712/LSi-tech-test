# LSi Coding Exercise - completed

## Work done

- Added Tailwind for the CSS library, it is not used everywhere, but is noticeable in the new enquiry form
- Added a URL slug for products in the database
- Added a new table for multiple images per product, kept the old image so it can be used as a thumbnail. The new images area all displayed on the product page
- Added a product enquiry form which sends an email, however the .env was set to use `MAIL_MAILER` as `log`, so emails were recorded to `storage/logs/laravel.log`
- Used SQLite as the database

## Setting up the project

The project requires [Git](https://git-scm.com/download/win), [Composer](https://getcomposer.org/download/), [NPM](https://nodejs.org/en) and [PHP 8.1+](https://www.php.net/downloads.php) with the following non-default extensions enabled:

- fileinfo
- pdo_sqlite

These instructions presume you're installing the project in Windows on your C:\\ drive. However, feel free do do this your own way.

`git clone https://github.com/scott-lsi/exercise.git`

`cd exercise`

`composer install`

It may display an error after completing this but it's ok, it's because you've not configured your database connection yet.

`copy .env.example .env`

Configure your database connection in the .env file. For simplicity, you can create a file at `database\database.sqlite` then set the following environment variables:


	DB_CONNECTION=sqlite
	DB_DATABASE="C:\\exercise\\database\\database.sqlite"
	DB_FOREIGN_KEYS=true


`php artisan key:generate`

`php artisan migrate --seed`

`npm install`

`php artisan serve`

...and, at the same time...

`npm run dev`