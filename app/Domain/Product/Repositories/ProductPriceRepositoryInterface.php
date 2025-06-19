<?php

namespace App\Domain\Product\Repositories;

use App\Domain\Product\Models\ProductPrice;

interface ProductPriceRepositoryInterface {
    public function create(array $data): ProductPrice;
    public function findByProduct(int $productId);
}