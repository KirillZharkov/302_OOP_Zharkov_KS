<?php

namespace App;

use App\Room;

class StandartRoom implements Room
{
    public function getTotalPrice()
    {
        return 2000;
    }
    public function getDescription()
    {
        return "Стандарт";
    }
}
