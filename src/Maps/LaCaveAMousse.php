<?php

namespace Pyl\Mud\Maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;
use Pyl\Mud\Items\Doliprane;
use Pyl\Mud\Npcs\Goat;

class LaCaveAMousse extends Blueprint {

    private Position $position;

    public function __construct()
    {
        $this->position = new Position(2,5);
    }

    public function name() : string {
        return "La Cave à Mousse";
    }

    public function description() : string {
        return " Bar à bières spécialisé, convivial et rustique";
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