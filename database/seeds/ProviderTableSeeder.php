<?php

use Illuminate\Database\Seeder;
use App\Provider;
class ProviderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       		Provider::create ([
       			"name"=>"polo",
       			 "last_name"=>"club",
       			 "adress"=>"Nueva zelanda",
       			 "email"=>"polo",
       			 "mobile_phone"=>"5522312526",
       			 "home_phone"=>"",
       			 ]);

    }
}
