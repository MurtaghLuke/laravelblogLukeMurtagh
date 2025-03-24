
#### Luke Murtagh CA2. Website is called Discover Ireland. The irish tourist boards website.

#### Make sure to cd into this folder
## C:\Projects\laravelblogLukeMurtagh\laravelblogLukeMurtagh

## and run 'npm run watch' before running 'php artisan serve'


## Added 6 blogs based on irish tourist attractions.
## unique feature - comment section under the blogs. using mvc architecture.
## added a page called attractions which contains cards in a grid with the best irish attractions. Utilised tailwind for this page.
## added about us page, also utilising tailwind for design
## added faq page
## made changes to layout of home screen

## used https://www.youtube.com/watch?v=37meCaoQcrg&ab_channel=SebGates   for google fonts.

## Followed the exact steps in https://www.youtube.com/watch?v=iRUz6SymIxY&ab_channel=SebGates
## for branching and merging.



## DB_CONNECTION=mysql
## DB_HOST=127.0.0.1
## DB_PORT=3306
## DB_DATABASE=laravelblog2
## DB_USERNAME=root
## DB_PASSWORD=




## Laravel 8 Complete Blog

This repository is linked to [this youtube video](https://www.youtube.com/watch?v=HKJDLXsTr8A&t=4710s) where I show you how to create a complete blog in Laravel 8 using best practices.

•	Author: Code With Dary <br>
•	Twitter: [@codewithdary](https://twitter.com/codewithdary) <br>
•	Instagram: [@codewithdary](https://www.instagram.com/codewithdary/) <br>

## Requirements
•	PHP 7.3 or higher <br>
•	Node 12.13.0 or higher <br>

## Usage <br>
Setting up your development environment on your local machine: <br>
```
git clone git@github.com:codewithdary/laravel-8-complete-blog.git
cd laravel-8-complete-blog
cp .env.example .env
composer install
php artisan key:generate
php artisan cache:clear && php artisan config:clear
php artisan serve
```

## Before starting <br>
Create a database <br>
```
mysql
create database laravelblog;
exit;
```

Setup your database credentials in the .env file <br>
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravelblog
DB_USERNAME={USERNAME}
DB_PASSWORD={PASSWORD}
```

Migrate the tables
```
php artisan migrate
```

## Contributing
Do not hesitate to contribute to the project by adapting or adding features ! Bug reports or pull requests are welcome.
