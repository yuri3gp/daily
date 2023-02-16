<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Daily;
use App\Models\User;

class DailySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Daily::factory(30)
        ->has(User::factory()->count(30))
        ->create();
    }
}
