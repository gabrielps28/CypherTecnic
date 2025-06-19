<?php

namespace App\Applications\Product;

use App\Domain\Product\Repositories\ProductRepositoryInterface;

class CreateProductApp {
    public function __construct(protected ProductRepositoryInterface $repo) {}

    public function handle(array $data) {
        return $this->repo->create($data);
    }
}