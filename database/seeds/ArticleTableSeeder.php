<?php

use Illuminate\Database\Seeder;
use App\Article;
class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Article::create([
       		     "name"=>"polosport",
       		      "description"=>"perfume para caballero",
       		      "origin"=>"inglaterra",
       		      "stock"=>5,
       		      "price"=>900,
       		      "provider_id"=>1,
       		      "photo"=>"",


       	]);
    }
}
