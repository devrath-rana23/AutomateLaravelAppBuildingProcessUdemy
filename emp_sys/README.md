<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

# Blueprint is an artisan command with four commands

We will create first yml file using php artisan blueprint:new

# Make yaml 
draft and then run blueprint:build artisan command

# Run migration:fresh artisan command

Gives error

# remove already created blueprints using blueprint:erase

# create new blueprint and migrate fresh

# php artisan db:seed

# Make shell(blueprint.sh) file
sudo chmod +x blueprint.sh -> giving execute permission to shell file
./blueprint.sh -> run this command

# The file (.blueprint) contains the last built details, the files that are created and details about the models and it's a yml file as well.That how the erase command know what to delete.

# Name change existing draft file to draft2.yaml

# now create new draft file using blueprint:new

# Now writing in draft file table details in a single line in object form syntax

# Rename draft file again and make new draft file

# Blueprint allows us to make different modifiers like enum and run ./blueprint.sh command

# Defining auto increment type gives error SQLSTATE[42000]: Syntax error or access violation: 1075 Incorrect table definition; there can be only one auto column and it must be defined as a Primary key

# change type run shell

# change type and add index to type and add nullable to type and run shell

# https://stackoverflow.com/questions/36208460/hasmany-vs-belongstomany-in-laravel-5-x

hasMany is used in a One To Many relationship while belongsToMany refers to a Many To Many relationship. They are both distinct relationship types and each require a different database structure - thus they take different parameters.

The key difference is that in a One To Many relationship, you only need the two database tables that correspond to the related models. This is because the reference to the relation is stored on the owned model's table itself. For instance, you might have a Country model and a City model. A Country has many cities. However, each City only exists in one country. Therefore, you would store that country on the City model itself (as country_id or something like that).

However, a Many To Many relationship requires a third database table, called a pivot table. The pivot table stores references to both the models and you can declare it as a second parameter in the relationship declaration. For example, imagine you have your City model and you also have a Car model. You want a relationship to show the types of cars people drive in each city. Well, in one city people will drive many different types of car. However, if you look at one car type you will also know that it can be driven in many different cities. Therefore it would be impossible to store a city_id or a car_id on either model because each would have more than one. Therefore, you put those references in the pivot table.

As a rule of thumb, if you use a belongsToMany relationship, it can only be paired with another belongsToMany relationship and means that you have a third pivot table. If you use a hasMany relationship, it can only be paired with a belongsTo relationship and no extra database tables are required.

In your example, you just need to make the inverse relation into a belongsToMany and add your custom table again, along with the foreign and local keys (reversing the order from the other model).


# Run 
php artisan blueprint:erase
# Run php artisan vendor:publish --tag=blueprint-config -> this will copy the files from blueprint vendor folder to laravel config folder

# Make changes to blueprint config file

# Make controller configurations in draft.yaml
Let's blueprint our first controller along with one action, which is test first :controllers keyword,

then a list of controllers with a wider indentation, then the actions under each controller with an

extra indentation, then a fourth level for statements inside each action.

There are several statements that we can use inside the action.

The statement is a key followed by a colon and then several parameters.

First and most important is query, which will generate simple and medium queries.

Unfortunately, queries generated this way are not ready to be consumed instantly.

They should have a human look and some mapping before they are ready to be consumed.

Putting all will make us return all of the employees and it will return everything and put them in a

collection based on our batch and see what it generated for us.

Let's bring this employee collection.

Blueprint will build a route for our action as well.

In the Web php

This is a fully qualified route.

Let's serve our application on port 8000 using artisan serve.

Let's request our action.

And here are all of the employees that resides inside our database.

# Make a job ComputeSalary -> php artisan make:job ComputeSalary

# Write a statement to dispatch this job

# fire event script in yaml and run shell

# php artisan make:listener to generate listeners and code further
