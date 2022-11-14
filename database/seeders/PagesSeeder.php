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
        
        Page::create(['name'=>'More About Soft-shell','slug'=>'more-about-soft-shell']);
        Page::create(['name'=>'Updates','slug'=>'updates']);
        Page::create(['name'=>'Supply & Auction','slug'=>'supply-and-auction']);
        Page::create(['name'=>'Picture Gallery','slug'=>'picture-gallery']);
        Page::create(['name'=>'Future Ideas','slug'=>'future-ideas']);
        Page::create(['name'=>'Financial Updates','slug'=>'financial-updates']);
    }
}