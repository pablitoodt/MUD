<?php

namespace Pyl\Mud\Maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;
use Pyl\Mud\Items\Doliprane;
use Pyl\Mud\Npcs\Goat;

class Corsaire extends Blueprint {

    private Position $position;

    public function __construct()
    {
        $this->position = new Position(1,4);
    }

    public function name() : string {
        return "Corsaire";
    }

    public function description() : string {
        return "Bar à cocktails avec une thématique pirate, cadre unique et original";
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