<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Sale;
class Customer extends Model
{
	protected $fillable = [
   		"name", "last_name", "email", "mobile_phone", "home_phone",
        
    ];

	public function sales()
    {
        return $this->hasMany(Sale::class);
    } 
}
