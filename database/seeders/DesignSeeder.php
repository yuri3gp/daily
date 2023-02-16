<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Design;
use App\Models\Daily;

class DesignSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Design::factory(30)->has(Daily::factory()->count(30))->create();
    }
}
