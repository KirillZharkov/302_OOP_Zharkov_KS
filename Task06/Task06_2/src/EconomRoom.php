<?php

namespace App;

use App\Room;

class EconomRoom implements Room
{
    public function getTotalPrice()
    {
        return 1000;
    }
    public function getDescription()
    {
        return "Эконом";
    }
}
