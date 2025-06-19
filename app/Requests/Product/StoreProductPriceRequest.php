<?php
namespace App\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductPriceRequest extends FormRequest {
    public function rules() {
        return [
            'currency_id' => 'required|exists:currencies,id',
            'price' => 'required|numeric|min:0',
        ];
    }
}