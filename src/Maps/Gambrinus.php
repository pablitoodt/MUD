<?php

namespace Pyl\Mud\Maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;
use Pyl\Mud\Items\Doliprane;
use Pyl\Mud\Npcs\Goat;

class Gambrinus extends Blueprint {

    private Position $position;

    public function __construct()
    {
        $this->position = new Position(2,0);
    }

    public function name() : string {
        return "Gambrinus";
    }

    public function description() : string {
        return "Bar à bières avec une belle sélection internationale";
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