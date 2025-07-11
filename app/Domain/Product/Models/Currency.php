<?php
namespace App\Domain\Product\Models;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model {
    protected $fillable = ['name', 'symbol', 'exchange_rate'];
}