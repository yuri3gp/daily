<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Design;
use App\Models\Daily;
use App\Models\Keyword;
use App\Models\Dailykeyword;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $amount = 10;

        User::factory($amount)->create();

        Daily::factory($amount)
        ->has(User::factory()->count($amount))
        ->create();
        
        Design::factory($amount)
        ->has(Daily::factory()
        ->count($amount))
        ->create();
        
        Keyword::factory()
        ->count($amount)
        ->create();

        Dailykeyword::factory($amount)
        ->has(Daily::factory()->count($amount))
        ->has(Keyword::factory()->count($amount))
        ->create();
    }
}
