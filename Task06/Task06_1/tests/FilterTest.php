<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\ManufacturerFilter;
use App\MaxPriceFilter;
use App\Product;
use App\ProductCollection;

final class FilterTest extends TestCase
{
    public function testFilterManudacturer()
    {
        $p1 = new Product();
        $p1->name = 'Шоколад';
        $p1->listPrice = 100;
        $p1->sellingPrice = 50;
        $p1->manufacturer = 'Красный Октябрь';

        $p2 = new Product();
        $p2->name = 'Мармелад';
        $p2->listPrice = 100;
        $p2->manufacturer = 'Ламзурь';

        $collection = new ProductCollection($p1, $p2);

        $resultCollection = $collection->filter(new ManufacturerFilter('Ламзурь'));

        $resultCollectionArr = $resultCollection->getProductsArray();
        $this->assertSame(1, count($resultCollectionArr));
        $this->assertEquals($p2, $resultCollectionArr[0]);
    }

    public function testFilter()
    {
        $p1 = new Product();
        $p1->name = 'Шоколад';
        $p1->listPrice = 100;
        $p1->sellingPrice = 50;
        $p1->manufacturer = 'Красный Октябрь';

        $p2 = new Product();
        $p2->name = 'Мармелад';
        $p2->listPrice = 100;
        $p2->manufacturer = 'Ламзурь';

        $collection = new ProductCollection($p1, $p2);

        $resultCollection = $collection->filter(new MaxPriceFilter(50));
        $resultCollectionArr = $resultCollection->getProductsArray();
        $this->assertSame(1, count($resultCollectionArr));
        $this->assertEquals($p1, $resultCollectionArr[0]);

        $resultCollection = $collection->filter(new MaxPriceFilter(100));
        $resultCollectionArr = $resultCollection->getProductsArray();
        $this->assertSame(2, count($resultCollectionArr));
    }
}
