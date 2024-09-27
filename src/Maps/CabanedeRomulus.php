<?php

namespace Pyl\Mud\Maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;
use Pyl\Mud\Items\Doliprane;
use Pyl\Mud\Npcs\Goat;

class CabanedeRomulus extends Blueprint {

    private Position $position;

    public function __construct()
    {
        $this->position = new Position(1,3);
    }

    public function name() : string {
        return "Cabane de Romulus";
    }

    public function description() : string {
        return "Conviviale, avec une terrasse agréable en été.";
    }

    public function position() : Position {
        return $this->position;
    }

    public function npcs() : array {
        return [new Goat()];
    }

    public function items() : array {
        return [new Doliprane()];
    }

    public function monsters() : array {
        return [];
    }
}