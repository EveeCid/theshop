<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Article;
class Provider extends Model
{
	protected $fillable = [
		"name", "last_name", "adress", "email", "mobile_phone", "home_phone",
        
    ];
    public function articles()
    {
        return $this->hasMany(Article::class);
    } 
}
