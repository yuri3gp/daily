<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Keyword;
use App\Models\Daily;
use App\Models\Dailykeyword;

class DailykeywordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Dailykeyword::factory(30)
        ->has(Daily::factory()->count(30))
        ->has(Keyword::factory()->count(30))
        ->create();
    }
}
