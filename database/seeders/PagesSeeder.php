<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Seeder;

class PagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Page::truncate();
        Page::updateOrCreate(['name'=>'Home','slug'=>'home']);
        Page::updateOrCreate(['name'=>'Updates','slug'=>'updates']);
        Page::updateOrCreate(['name'=>'Supply & Auction','slug'=>'supply-and-auction']);
        Page::updateOrCreate(['name'=>'Distributor Picture Gallery','slug'=>'distributor-picture-gallery']);
        Page::updateOrCreate(['name'=>'Investor Picture Gallery','slug'=>'investor-picture-gallery']);
        Page::updateOrCreate(['name'=>'Future Ideas','slug'=>'future-ideas']);
        Page::updateOrCreate(['name'=>'Financial Updates','slug'=>'financial-updates']);
        Page::updateOrCreate(['name'=>'Soft Shelled Mudcrabs','slug'=>'soft-shelled-mudcrabs']);
        Page::updateOrCreate(['name'=>'Hard Shelled Mudcrabs','slug'=>'hard-shelled-mudcrabs']);
        Page::updateOrCreate(['name'=>'Information','slug'=>'information']);
        Page::updateOrCreate(['name'=>'Where to Buy','slug'=>'where-to-buy']);
        Page::updateOrCreate(['name'=>'Contact us','slug'=>'contact-us']);
        Page::updateOrCreate(['name'=>'Distributors','slug'=>'distributors']);
        Page::updateOrCreate(['name'=>'Become Distributor','slug'=>'become-distributor']);
        Page::updateOrCreate(['name'=>'Become Investor','slug'=>'become-investor']);
        Page::updateOrCreate(['name'=>'Forgot Password','slug'=>'forgot-password']);
        Page::updateOrCreate(['name'=>'Confirm Email','slug'=>'confirm-email']);
        Page::updateOrCreate(['name'=>'Login','slug'=>'login']);
        Page::updateOrCreate(['name'=>'Admin Login','slug'=>'admin-login']);
        Page::updateOrCreate(['name'=>'Account Add User','slug'=>'account-add-user']);
        Page::updateOrCreate(['name'=>'Settings','slug'=>'settings']);

        // home
        // soft-shelled-mudcrabs
        // hard-shelled-mudcrabs
        // information
        // where-to-buy
        // contact-us
        // distributors
        // become-distributor
        // become-investor
        // forgot-password
        // confirm-email
        // login
        // admin-login
        // account-add-user
        // settings
    }
}