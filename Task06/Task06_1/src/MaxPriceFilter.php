<?php

namespace App;

class MaxPriceFilter implements ProductFilteringStrategy
{
    private $maxPrice;

    public function __construct($maxPrice)
    {
        $this->maxPrice = $maxPrice;
    }

    public function filter(Product ...$products): array
    {
        $newList = array();

        foreach ($products as $product) {
            if (
                (isset($product->sellingPrice)
                    && ($product->sellingPrice <= $this->maxPrice))
                || ($product->listPrice <= $this->maxPrice)
            ) {
                array_push($newList, $product);
            }
        }

        return $newList;
    }
}
