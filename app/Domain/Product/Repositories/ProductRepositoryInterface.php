<?php 

namespace App\Domain\Product\Repositories;

use App\Domain\Product\Models\Product;

interface ProductRepositoryInterface {
    public function all();
    public function find(int $id): ?Product;
    public function create(array $data): Product;
    public function update(Product $product, array $data): Product;
    public function delete(Product $product): bool;
}
