<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Country;
use App\Models\Distributor;
use App\Models\Investor;
use App\Models\State;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

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
            CountriesDataSeeder::class,
            AdminUserSeeder::class,
            DistributorUserSeeder::class,
            InvestorUserSeeder::class,
            CandidateUserSeeder::class,
            PermissionsSeeder::class,
            PagesSeeder::class,
        ]);
    }
}
