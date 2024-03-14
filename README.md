## Laravel Interrail and Eurorail Blog
![Alt Text](https://i.pinimg.com/originals/49/a8/5f/49a85ff2855bbce54d4229ff75fa14a2.gif)


 This youtube video(https://www.youtube.com/watch?v=HKJDLXsTr8A&t=4710s) linked with this github repo (git@github.com:codewithdary/laravel-8-complete-blog.git) was uses as starter code for this project

•	Author: Aoife Murphy <br>

## Requirements
•	PHP 7.3 or higher <br>
•	Node 12.13.0 or higher <br>

## Usage <br>
Setting up your development environment on your local machine: <br>
```
git clone https://github.com/AoifeMurphy02/interrail_eurail_blog.git
cd interrail_eurail_blog
composer install
php artisan key:generate
php artisan cache:clear 
php artisan config:clear
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
