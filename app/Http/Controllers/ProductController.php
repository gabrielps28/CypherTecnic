<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Requests\Product\StoreProductRequest;
use App\Applications\Product\CreateProductApp;
use App\Requests\Product\StoreProductPriceRequest;
use App\Applications\Product\CreateProductPriceApp;
use App\Domain\Product\Repositories\ProductRepositoryInterface;
use App\Domain\Product\Repositories\ProductPriceRepositoryInterface;

class ProductController extends Controller {

    public function __construct(
        protected ProductRepositoryInterface $productRepo,
        protected ProductPriceRepositoryInterface $priceRepo,
        protected CreateProductApp $createApp,
        protected CreateProductPriceApp $priceApp
    ) {}

    public function index() {
        return response()->json($this->productRepo->all());
    }

    public function store(StoreProductRequest $request) {
        $product = $this->createApp->handle($request->validated());
        return response()->json([
            'message' => 'Product successfully created.',
            'data' => $product
        ], 201);
    }

    public function show($id) {
        $product = $this->productRepo->find($id);
        if (!$product) return response()->json(['message' => 'Product not found.'], 404);
        return response()->json($product);
    }

    public function update(Request $request, $id) {
        $product = $this->productRepo->find($id);
        if (!$product) return response()->json(['message' => 'Product not found.'], 404);
        $product = $this->productRepo->update($product, $request->all());
        return response()->json([
            'message' => 'Product successfully updated.',
            'data' => $product
        ]);
    }

    public function destroy($id) {
        $product = $this->productRepo->find($id);
        if (!$product) return response()->json(['message' => 'Product not found.'], 404);
        $this->productRepo->delete($product);
        return response()->json(['message' => 'Product successfully deleted.'], 204);
    }

    public function prices($id) {
        $productPrice = $this->priceRepo->findByProduct($id);
        if ($productPrice->isEmpty()) return response()->json(['message' => 'Product List not found.'], 404);
        return response()->json($productPrice);
    }

    public function storePrice(StoreProductPriceRequest $request, $id) {
        $data = $request->validated();
        $data['product_id'] = $id;
        $price = $this->priceApp->handle($data);
        return response()->json([
            'message' => 'Product price successfully created.',
            'data' => $price
        ], 201);
    }
}