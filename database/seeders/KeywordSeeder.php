<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Keyword;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class KeywordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Keyword::factory()
        ->count(30)
        ->create();
    }
}
