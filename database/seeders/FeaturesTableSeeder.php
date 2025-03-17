<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeaturesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('features')->insert([
            [
                'name' => 'Model',
                'description' => 'represents a database table and provides an easy way to interact with the data using Eloquent ORM. It allows you to perform database operations like creating, reading, updating, and deleting records.',
            ],
            [
                'name' => 'View',
                'description' => 'is a template file used to present the user interface. It contains HTML and can include dynamic data passed from a controller, typically using Blade, Laravel templating engine.',
               
            ],
            [
                'name' => 'Controller',
                'description' => 'is responsible for handling user requests, processing data, and returning a response, typically by passing data to a view.',
               
            ],
            [
                'name' => 'Route',
                'description' => 'defines the URL structure and links it to a specific controller or closure that will handle the request.',
               
            ],
            [
                'name' => 'Middleware',
                'description' => 'is a layer of code that sits between the incoming request and the applications response. It can inspect, filter, or modify requests before they reach the controller, or manipulate the response before its sent to the user.',
               
            ],
            [
                'name' => 'Blade Templates',
                'description' => 'is the templating engine used to build dynamic views. It allows you to write clean, concise code with simple syntax, and it compiles to efficient PHP code.',
               
            ],
            [
                'name' => 'Migration',
                'description' => 'is used to define and manage database schema changes. They allow you to version control your database structure and make it easy to share and apply changes across different environments.',
               
            ],
            [
                'name' => 'Seeder',
                'description' => 'is used to populate your database with sample or default data. Seeders allow you to quickly fill your database with records for testing or initial setup.',
               
            ],
            [
                'name' => 'Database',
                'description' => 'refers to the system that stores, retrieves, and manages your applications data. Laravel provides a variety of tools to interact with databases, including Eloquent ORM, Query Builder, and Migrations.',
               
            ],
            [
                'name' => 'Eloquent ORM',
                'description' => 'Eloquent ORM in Laravel provides an active record implementation for working with your database. It allows you to interact with database records as if they were objects, making it easy to create, read, update, and delete records using intuitive methods.',
               
            ],
        ]);
    }
}
