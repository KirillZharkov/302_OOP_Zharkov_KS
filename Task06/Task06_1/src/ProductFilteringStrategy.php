<?php

namespace App;

use App\Product;

interface ProductFilteringStrategy
{
    public function filter(Product ...$products): array;
}
