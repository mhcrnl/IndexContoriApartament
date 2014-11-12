In fila app/config/database.php linia 29 schimbam 'default'=> 'mysql' cu 'default'=> 'sqlite'.
Acum creem baza de date utilizand comanda din directorul in care avem aplicatia:
  $ php artisan migrate: make create_indexcontori
  '''
  mhcrnl@mhcrnl:~/Desktop/IndexContoriApartament$ php artisan migrate:make create_indexcontori
Created Migration: 2014_11_12_163814_create_indexcontori
Generating optimized class loader
Compiling common classes
Compiling views
mhcrnl@mhcrnl:~/Desktop/IndexContoriApartament$
'''
In urma executarii codului obtinem:
```
<?php //app/database/migrations/2014_11_12_163814_create_indexcontori

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIndexcontori extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    //
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    //
  }

}

'''
Modifica aceasta fila dupa cum urmeaza:
'''
<?php //app/database/migrations/2014_11_12_163814_create_indexcontori

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIndexcontori extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    //
    Schema::create('indexcontori', function($table){
      $table->increments('id');
      $table->integer('Bucatarie apa rece');
      $table->integer('Bucatarie apa calda');
      $table->integer('Baie apa rece');
      $table->integer('Baie apa calda');
      $table->integer('Gaze');
      $table->integer('Calorifer 6263 sufragerie');
      $table->integer('Calorifer 6262 dormitor1');
      $table->integer('Calorifer 6261 dormitor2');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    //
    Schema::drop('indexcontori');
  }

}

```
Rulam in linia de comanda urmatoarea comanda:
'
mhcrnl@mhcrnl:~/Desktop/IndexContoriApartament$ php artisan migrate
**************************************
*     Application In Production!     *
**************************************

Do you really wish to run this command?
Migration table created successfully.
Migrated: 2014_11_12_163814_create_indexcontori
mhcrnl@mhcrnl:~/Desktop/IndexContoriApartament$

'

'''
<?php //app/controllers/HomeController.php

class HomeController extends BaseController {

  /*
  |--------------------------------------------------------------------------
  | Default Home Controller
  |--------------------------------------------------------------------------
  |
  | You may wish to use controllers instead of, or in addition to, Closure
  | based routes. That's great! Here is an example controller method to
  | get you started. To route to this controller, just add the route:
  |
  |	Route::get('/', 'HomeController@showWelcome');
  |
  */

  public function index()
  {
    return View::make('index');
  }
  public function create()
  {
    return View::make('create');
  }
  public function handleCreate()
  {

  }
  public function edit(Game $game)
  {
    return View::make('edit');
  }
  public function handleEdit()
  {

  }
  public function delete()
  {
    return View::make('delete');
  }
  public function handleDelete()
  {

  }

}
'''
## Laravel PHP Framework

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/downloads.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, and caching.

Laravel aims to make the development process a pleasing one for the developer without sacrificing application functionality. Happy developers make the best code. To this end, we've attempted to combine the very best of what we have seen in other web frameworks, including frameworks implemented in other languages, such as Ruby on Rails, ASP.NET MVC, and Sinatra.

Laravel is accessible, yet powerful, providing powerful tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.

## Official Documentation

Documentation for the entire framework can be found on the [Laravel website](http://laravel.com/docs).

### Contributing To Laravel

**All issues and pull requests should be filed on the [laravel/framework](http://github.com/laravel/framework) repository.**

### License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
