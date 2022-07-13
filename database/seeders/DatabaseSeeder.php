<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
        $this->call(UserSeeder::class);
        $this->call(BranchSeeder::class);
        $this->call(CitySeeder::class);
        $this->call(DistrikOperationSeeder::class);
        $this->call(InfraTypeSeeder::class);
        $this->call(NetworkServiceSeeder::class);
        $this->call(ProgressHQSeeder::class);
        $this->call(ProgressRegionalSeeder::class);
        $this->call(SimpleProgressSeeder::class);
        $this->call(SiteSeeder::class);
        $this->call(TowerProviderSeeder::class);
    }
}
