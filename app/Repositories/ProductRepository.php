<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;
use App\Models\Product as Product;

class ProductRepository
{

    public function getProduct()
    {
        try {
            // Validate the value...
            $product = DB::table('products')->get();
        } catch (\Throwable $e) {
            report($e);

            return false;
        }

        return $product;
    }

}