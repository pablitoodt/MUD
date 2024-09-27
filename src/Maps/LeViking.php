<?php

namespace Pyl\Mud\Maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;
use Pyl\Mud\Items\Doliprane;
use Pyl\Mud\Npcs\Goat;

class LeViking extends Blueprint {

    private Position $position;

    public function __construct()
    {
        $this->position = new Position(2,2);
    }

    public function name() : string {
        return "LeViking";
    }

    public function description() : string {
        return "le ginTo cola t'attend";
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