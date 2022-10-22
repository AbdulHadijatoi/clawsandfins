<?php

namespace Database\Seeders;

use App\Models\Settings;
use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $settings=[
            ['field'=> 'contact_us_mailer','value'=>'']
        ];

        Settings::insert($settings);
    }
}
