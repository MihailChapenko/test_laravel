<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->insert([
            ['name' => 'Canada', 'created_at' => now()],
            ['name' => 'USA', 'created_at' => now()],
            ['name' => 'France', 'created_at' => now()],
            ['name' => 'Spain', 'created_at' => now()],
            ['name' => 'Italy', 'created_at' => now()],
            ['name' => 'Germany', 'created_at' => now()],
            ['name' => 'Ukraine', 'created_at' => now()],
            ['name' => 'Poland', 'created_at' => now()],
            ['name' => 'Greece', 'created_at' => now()],
            ['name' => 'Portugal', 'created_at' => now()],
        ]);
    }
}
