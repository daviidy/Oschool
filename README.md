# Oschool
Learning Management System in Saas

![screenshot](./images/screenshot.png)

This project consists of building a software that allows companies to create their own e-elarning platform. The client wanted something similar like teachable.com.

## Description

###Admin
* Can perform CRUD operations on users and assign roles to them
* Can perform CRUD operations on schools
* Can perform CRUD operations on courses, course curriculum, categories, authors, events, messages, payment gateways, prices
* Can perform API request with their Zoom Account

###Authors
* Can perform CRUD operations on their own courses
* Can perform CRUD operations on their own schools
* Can perform API request with their Zoom Account

##Student
* Can view basic info of all courses like title, thumbnail, general description (not the actual course data), author, creation date.
* Can send enroll request to the course author.
* Can only read course contents which he/she is enrolled in.
* Can unenroll himself/herself from a course.
* Can mark a course as completed.
* Has student dashboard where he/she can see all the enrolled courses.
* Has a profile page to update personal details.

## Guest/Visitor
* Can view listing of all the courses.
* Can register as a author or student.


## Built With

- Laravel 7
- JQuery 3
- Bootstrap 4
- Librairies: Quill Editor, Font Awesome

## Live Demo

[Live Demo Link](https://oschoolelearning.com/)

## Authors

👤 **David YAO**

- GitHub: [@daviidy](https://github.com/daviidy)
- Twitter: [@davidyao3](https://twitter.com/DavidYao3)
- LinkedIn: [@daviidy](https://www.linkedin.com/in/david-yao-6bb95299/)
- Personal Website: [@daviidy](http://david-yao.com)


## 🤝 Contributing

Contributions, issues, and feature requests are welcome!

Feel free to check the [issues page](issues/).

## Show your support

Give a ⭐️ if you like this project!



# How to use the repository ?

## 1- Connect

- install composer on your system
- install git on your system
- clone the repo by using: <code>git clone repo_url</code>
- ##Windows users:

- Download wamp: http://www.wampserver.com/en/
- Download and extract cmder mini: https://github.com/cmderdev/cmder/releases/download/v1.1.4.1/cmder_mini.zip
- Update windows environment variable path to point to your php install folder (inside wamp installation dir) (here is how you can do this http://stackoverflow.com/questions/17727436/how-to-properly-set-php-environment-variable-to-run-commands-in-git-bash)
- cmder will be refered as console

## 2- Install Laravel

##Mac Os, Ubuntu and windows users continue here:

- Create a database locally named elavoo_db utf8_general_ci
- Download composer https://getcomposer.org/download/
- Pull Laravel/php project from git provider.
- Rename .env.example file to .envinside your project root and fill the database information. (windows wont let you do it, so you have to open your console cd your project root directory and run mv .env.example .env )
- Open the console and cd your project root directory
- Run <code>composer install</code> or php composer.phar install
- Run <code>php artisan key:generate</code>
- Run <code>php artisan migrate</code>
- Run <code>php artisan db:seed</code> to run seeders, if any.
- Run <code>php artisan serve</code>

#####You can now access your project at localhost:8000 :)
