# Codebox
Codebox is a spanish masterclasses, webinars, and events hub, where you can enrole into your favorite masterclasses.
# Getting started
## Installation
Please check the official laravel installation guide for server requirements before you start. [Official Documentation](https://laravel.com/docs/5.4/installation#installation)
Clone the repository
```bash
git clone https://github.com/LiviuBadea08/codebox_laravel.git
```
Switch to the repo folder
```bash
cd codebox_laravel
```
Install all the dependencies using composer
```bash
composer install
```
Copy the example env file and make the required configuration changes in the .env file
```bash
cp .env.example .env
```
Run the database migrations (Set the database connection in .env before migrating)
```bash
php artisan migrate
```
Start the local development server
```bash
php artisan serve
```
You can now access the server at [http://localhost:8000](http://localhost:8000)
## Database seeding
Populate the database with seed data with relationships which includes users, articles, comments, tags, favorites and follows. This can help you to quickly start testing the api or couple a frontend and start using it with ready content.
Open the DummyDataSeeder and set the property values as per your requirement
```bash
database/seeds/DummyDataSeeder.php
```
Run the database seeder and you're done
```bash
php artisan db:seed
```
Note : It's recommended to have a clean database before seeding. You can refresh your migrations at any point to clean the database by running the following command
```bash
php artisan migrate:refresh
```
![landing page pic](https://github.com/LiviuBadea08/codebox_laravel/blob/dev/resources/img/websitepic.png?raw=true)
## Build with
For the development of this app we've used:
- Figma
- HTML
- CSS
- Bootstrap
- PHP Vanilla
- Laravel
- DrawSQL
- Tailwind
- mySql
## Team
- Liviu Badea
- Oriol Codina
- Daniel Calvo
- Jhon Vázquez
- Albert Martinez
- Abde Belkhialat
## Contributing
Pull requests are not welcome as long as this is a Bootcamp project.

## Thanks to FactoriaF5 for making this project possible.