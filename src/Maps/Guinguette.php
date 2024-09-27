<?php

namespace Pyl\Mud\Maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;
use Pyl\Mud\Items\Doliprane;
use Pyl\Mud\Npcs\Goat;

class Guinguette extends Blueprint {

    private Position $position;

    public function __construct()
    {
        $this->position = new Position(2,1);
    }

    public function name() : string {
        return "Guiguette";
    }

    public function description() : string {
        return "Festive, en plein air, au bord de la Loire";
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