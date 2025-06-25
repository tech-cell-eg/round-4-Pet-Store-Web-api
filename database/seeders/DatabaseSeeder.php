<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // $this->call([DogSeeder::class ,
        //  CustomerSeeder::class ,
        //   BlogSeeder::class ,
        //    SellerSeeder::class ,
        // ProductSeeder::class]);

         $this->call(DogSeeder::class);
         $this->call(CustomerSeeder::class);
         $this->call(BlogSeeder::class);
         $this->call(SellerSeeder::class);
         $this->call(ProductSeeder::class);


    }
}
