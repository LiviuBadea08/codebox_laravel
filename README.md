# The project
This project is part of a bootcamp by FactoriaF5 where the main goal is to aquire the ability to create a fully functional database which can be accessed by MVC (Model View Controller) method using PHP (Laravel) and make a fully functional webpage with user and admin roles, where the admin can CRUD (create, read, update and delete) the products (tech events) and the user can sign up to them.

# Codebox
Codebox is a project designed to be a non-profit association with an online platform that offers free workshops, courses, talks and training related to IT.
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
```bash
npm install
```
```bash
npm run dev
```
Copy the example env file and make the required configuration changes in the .env file
```bash
cp .env.example .env
```
Create a database clalled codebox_laravel and make de required changes in the env file (.env). Run the database migrations and the seed to se some event exaples
```bash
php artisan migrate:fresh --seed
```
Start the local development server
```bash
php artisan serve
```
You can now access the server at http://localhost

![landing page pic](https://github.com/LiviuBadea08/codebox_laravel/blob/dev/resources/img/websitepic.png?raw=true)
![](public\images\codebox1.png)
![](public\images\codebox2.png)
![](public\images\codebox3.png)

## Future versions
For next versions our team wants to add a the superadmin role that can choose who is admin, whe also want to givem more power to the admin so he can ban users from the platform and delete many events at the same time.
We also would like to test better our code and implement some quality of life improvements for the user. 

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
