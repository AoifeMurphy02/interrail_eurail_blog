## Laravel Interrail and Eurorail Blog
![Logo](https://i.imgur.com/XY54koz.png)


 This youtube video(https://www.youtube.com/watch?v=HKJDLXsTr8A&t=4710s) linked with this github repo (git@github.com:codewithdary/laravel-8-complete-blog.git) was uses as starter code for this project

•	Author: Aoife Murphy <br>

## Requirements
•	PHP 7.3 or higher <br>
•	Node 12.13.0 or higher <br>

## Technologies Used <img src="https://emojigraph.org/media/microsoft/woman-technologist_1f469-200d-1f4bb.png" alt="alt text" width="50">

• XAMPP, Visual Studio code
<br>
• CSS, JavaScript,
<br>
•  Tailwind <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d5/Tailwind_CSS_Logo.svg/320px-Tailwind_CSS_Logo.svg.png" alt="alt text" width="30">
<br>
• HTML, PHP <img src="https://w7.pngwing.com/pngs/163/513/png-transparent-php-logos-and-brands-line-filled-icon.png" alt="alt text" width="30">
<br>
• Larvel <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1200px-Laravel.svg.png" alt="alt text" width="30">
<br>
• MailHog <img src="https://media.licdn.com/dms/image/D5612AQE6B2VBO7Cdtw/article-cover_image-shrink_600_2000/0/1688551272350?e=2147483647&v=beta&t=MVtXLjm5a6dvclCE6NymXnCAkv4eruCupdV_KUJGSEM" alt="alt text" width="30">

## Features 
• View blog posts about Interrail and eurail.
<br>
<img src="https://i.imgur.com/l9QroXj.png" alt="alt text" width="600">
<br>
• Create, Edit and Delete blog posts.
<br>
<img src="https://i.imgur.com/thVVd0k.png" alt="alt text" width="600">
<br>
• Plan your trip using pins on google maps tells the user the distance between pins.
<br>
<img src="https://i.imgur.com/V2OQ66B.png" alt="alt text" width="600">
<br>
• Contact Us page. 
<br>
<img src="https://i.imgur.com/rrxdZdw.png" alt="alt text" width="600">
<br>
• Gallery Page including a carousel.
<br>
<img src="https://i.imgur.com/skpfyAA.png" alt="alt text" width="600">
<br>
## Video Runthrough of the Project <img src="https://i.pngimg.me/thumb/f/720/m2i8m2b1Z5A0A0N4.jpg" alt="alt text" width="40">
https://www.youtube.com/watch?v=qsWxp_75LnA

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
<br>

## To compile laravel mix <img src="https://since1979.dev/wp-content/uploads/2019/05/laravel-mix-logo.jpeg" alt="alt text" width="50">

```
composer require laravel-frontend-presets/tailwindcss --dev
php artisan ui tailwindcss --auth
npm remove laravel-mix
npm install laravel-mix --save-dev
npm install cross-env --save-dev
npm run watch
```


### Running MailHog  <img src="https://media.licdn.com/dms/image/D5612AQE6B2VBO7Cdtw/article-cover_image-shrink_600_2000/0/1688551272350?e=2147483647&v=beta&t=MVtXLjm5a6dvclCE6NymXnCAkv4eruCupdV_KUJGSEM" alt="alt text" width="50">
You can download MailHog from the [official GitHub releases page](https://github.com/mailhog/MailHog/releases).

After downloading MailHog:

1. **Open the File**: Locate the downloaded MailHog file and open it.

2. **Access MailHog Web Interface**: MailHog provides a web interface for managing emails. To access it, open your web browser and navigate to [http://localhost:8025/](http://localhost:8025/).

## Contributing
Do not hesitate to contribute to the project by adapting or adding features Bug reports or pull requests are welcome.
