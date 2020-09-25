<?php

namespace Database\Seeders;

use App\Models\{Company, User, UserCompany};
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
        $this->call([
            UserSeeder::class,
            CountrySeeder::class,
        ]);

         User::factory(50)->create();
         Company::factory(20)->create();
         UserCompany::factory(50)->create();
    }
}
