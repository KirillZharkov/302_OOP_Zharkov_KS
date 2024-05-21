<?php

namespace App;

use App\Dinner;
use App\LuxeRoom;
use App\EconomRoom;
use App\DiliveryFood;
use App\AdditionalSofa;
use PHPUnit\Framework\TestCase;

class DecoratorTest extends TestCase
{
    public function testDecorator()
    {
        $luxeRoom = new LuxeRoom();

        $this->assertEquals(3000, $luxeRoom->getTotalPrice());
        $this->assertEquals('Люкс', $luxeRoom->getDescription());

        $luxeRoom = new AdditionalSofa($luxeRoom);

        $this->assertEquals(3500, $luxeRoom->getTotalPrice());
        $this->assertEquals('Люкс + доп диван', $luxeRoom->getDescription());

        $luxeRoom = new Dinner($luxeRoom);

        $this->assertEquals(4300, $luxeRoom->getTotalPrice());
        $this->assertEquals('Люкс + доп диван + ужин', $luxeRoom->getDescription());


        $economRoom = new EconomRoom();

        $this->assertEquals(1000, $economRoom->getTotalPrice());
        $this->assertEquals('Эконом', $economRoom->getDescription());

        $economRoom = new DiliveryFood($economRoom);

        $this->assertEquals(1300, $economRoom->getTotalPrice());
        $this->assertEquals('Эконом + доставка еды', $economRoom->getDescription());
    }
}
