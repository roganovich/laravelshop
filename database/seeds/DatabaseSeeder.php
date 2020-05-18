<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        //factory(\App\Models\Brand::class,10)->create();
        //factory(\App\Models\Catalog::class,5)->create();
        //factory(\App\Models\Product::class,100)->create();
        factory(\App\Models\Article::class,100)->create();


        // $this->call(UserSeeder::class);
    }
}
