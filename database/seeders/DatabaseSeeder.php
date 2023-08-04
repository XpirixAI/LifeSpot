<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\PriceContent;
use App\Models\XpirixContent;
use \App\Models\User;

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
        


        User::factory(10)->create();
        XpirixContent::factory()->count(5)->create();
        PriceContent::factory()->count(5)->create();
    }
}
