<?php

namespace App;

use App\Product;
use App\ProductFilteringStrategy;

class ProductCollection
{
    private $products = array();

    public function __construct(Product ...$products)
    {
        $this->products = $products;
    }

    public function getProductsArray(): array
    {
        return $this->products;
    }

    public function filter(ProductFilteringStrategy $filterStrategy): ProductCollection
    {
        return new ProductCollection(...$filterStrategy->filter(...$this->products));
    }
}
