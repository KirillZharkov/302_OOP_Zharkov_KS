<?php

namespace App;

use App\Room;

class LuxeRoom implements Room
{
    public function getTotalPrice()
    {
        return 3000;
    }
    public function getDescription()
    {
        return "Люкс";
    }
}
