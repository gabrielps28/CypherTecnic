<?php
namespace App\Domain\Product\Models;

use App\Domain\Product\Models\Currency;
use Illuminate\Database\Eloquent\Model;

class ProductPrice extends Model {
    protected $fillable = ['product_id', 'currency_id', 'price'];

    public function currency() {
        return $this->belongsTo(Currency::class);
    }
}