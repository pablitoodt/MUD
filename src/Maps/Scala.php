<?php

namespace Pyl\Mud\Maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;
use Pyl\Mud\Items\Doliprane;
use Pyl\Mud\Npcs\Goat;

class Scala extends Blueprint {

    private Position $position;

    public function __construct()
    {
        $this->position = new Position(4,2);
    }

    public function name() : string {
        return "Scala";
    }

    public function description() : string {
        return "Atmosphère festive, avec musique et cocktails en soirée";
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