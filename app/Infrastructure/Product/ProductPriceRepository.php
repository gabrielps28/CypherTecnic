<?php

namespace App\Infrastructure\Product;

use App\Domain\Product\Models\ProductPrice;
use App\Domain\Product\Repositories\ProductPriceRepositoryInterface;


class ProductPriceRepository implements ProductPriceRepositoryInterface {
    public function create(array $data): ProductPrice {
        return ProductPrice::create($data);
    }

    public function findByProduct(int $productId) {
        return ProductPrice::with('currency')->where('product_id', $productId)->get();
    }
}