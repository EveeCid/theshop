<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Customers;
use App\DeatailSale;
class Sale extends Model
{
	protected $fillable = [
		"customer_id", "total_count", "customer_id", "customers",
   	    
    ];

    public function customers()
    {
        return $this->hasMany(Customer::class);
    }
     public function details()
    {
        return $this->hasMany(DetailSale::class);
    } 
}
