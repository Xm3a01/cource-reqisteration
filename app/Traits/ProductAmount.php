<?php


namespace App\Traits;

use App\Product;

/**
 * This traits to descris amount
 */
trait ProductAmount
{
    public function amount($id , $quantity)
    {
        $product =  Product::findOrFail($id);

        $product->productAmount  = $product->productAmount - $quantity;
        $product->save();
    }
}
