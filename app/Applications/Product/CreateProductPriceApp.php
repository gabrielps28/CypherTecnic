<?php

namespace App\Applications\Product;

use App\Domain\Product\Repositories\ProductPriceRepositoryInterface;

class CreateProductPriceApp {
    public function __construct(protected ProductPriceRepositoryInterface $repo) {}

    public function handle(array $data) {
        return $this->repo->create($data);
    }
}