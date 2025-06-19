<?php
namespace App\Domain\Product\Models;

use App\Domain\Product\Models\Currency;
use Illuminate\Database\Eloquent\Model;
use App\Domain\Product\Models\ProductPrice;

class Product extends Model {
    protected $fillable = ['name', 'description', 'price', 'currency_id', 'tax_cost', 'manufacturing_cost'];

    public function currency() {
        return $this->belongsTo(Currency::class);
    }

    public function prices() {
        return $this->hasMany(ProductPrice::class);
    }
}