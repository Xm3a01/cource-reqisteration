<?php

namespace App\Traits;


trait Mapping
{
    public function convert_to_map($collection)
    {
        $collection->map(function($convert) {
            return $convert['image'] = $convert->getMedia('products');
        });
    }


    public function convert_relation($orders)
    {
        $orders->map(function ($order) {
            $order->product['image'] = $order->product->getMedia('products');
        });
    }
}