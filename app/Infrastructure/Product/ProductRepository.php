<?php

namespace App\Infrastructure\Product;

use App\Domain\Product\Models\Product;
use App\Domain\Product\Repositories\ProductRepositoryInterface;


class ProductRepository implements ProductRepositoryInterface {
    public function all() {
        return Product::with('currency')->get();
    }

    public function find(int $id): ?Product {
        return Product::with(['currency', 'prices.currency'])->find($id);
    }

    public function create(array $data): Product {
        return Product::create($data);
    }

    public function update(Product $product, array $data): Product {
        $product->update($data);
        return $product;
    }

    public function delete(Product $product): bool {
        return $product->delete();
    }
}