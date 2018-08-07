<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Sale;
class DetailSale extends Model
{
	protected $fillable = [
		"sale_id", "article_id", "articles", "quantity", "import", "sale_price",
   	
          ];

    public function sale()
    {
        return $this->belongsTo(Sale::class);
    }
}
