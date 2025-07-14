To make component
>php artisan make:component header

To make model and migration table
>php artisan make:migration create_book_table
or use below command
>php artisan name:model Book -mfs
m- migrate
f- factory
s- seeder

>php artisan migrate
>php artisan migrate:fresh

//Use run seeder 
>php artisan migrate:fresh --seed

>php artisan tinker
------------------------
use App\Models\Author
> Author::factory()->count(50)->create()

Author::all()
Author::find(2)


Author::create(['name'=>'samir biswas', age=>20]);

> php artisan tinker
Psy Shell v0.12.9 (PHP 8.3.6 — cli) by Justin Hileman
> use App\Models\Book
> Book::factory()->count(50)->create();