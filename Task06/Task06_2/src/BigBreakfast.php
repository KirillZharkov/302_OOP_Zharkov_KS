<?php

namespace App;

use App\Room;

class BigBreakfast implements Room
{
    protected $room;

    public function __construct(Room $room)
    {
        $this->room = $room;
    }

    public function getTotalPrice(): float
    {
        return $this->room->getTotalPrice() + 500;
    }

    public function getDescription(): string
    {
        return $this->room->getDescription() . ' + шведский стол на завтрак';
    }
}
