<?php

namespace App;

class ManufacturerFilter implements ProductFilteringStrategy
{
    private $manufacturer;

    public function __construct($manufacturer)
    {
        $this->manufacturer = $manufacturer;
    }

    public function filter(Product ...$products): array
    {
        $newList = array();

        foreach ($products as $product) {
            if ($product->manufacturer == $this->manufacturer) {
                array_push($newList, $product);
            }
        }

        return $newList;
    }
}
