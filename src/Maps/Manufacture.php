<?php

namespace Pyl\Mud\Maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;
use Pyl\Mud\Items\Doliprane;
use Pyl\Mud\Npcs\Goat;

class Manufacture extends Blueprint {

    private Position $position;

    public function __construct()
    {
        $this->position = new Position(3,5);
    }

    public function name() : string {
        return "Manufacture map";
    }

    public function description() : string {
        return "vient mon copaing";
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