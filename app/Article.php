<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Provider;
class Article extends Model
{
  	protected $fillable = [
        "name", "description", "origin", "stock", "price", "provider_id","photo",
    ];

    public function providers()
    {
        return $this->hasMany(Provider::class);
    } 
 }
