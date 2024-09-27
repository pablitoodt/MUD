<?php

namespace Pyl\Mud\Maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;
use Pyl\Mud\Items\Doliprane;
use Pyl\Mud\Npcs\Goat;
use Pyl\Mud\NpcsBlueprint;

class Damier extends NpcsBlueprint {

    private Position $position;

    public function __construct()
    {
        $this->position = new Position(1,5);
    }

    public function name() : string {
        return "Damier";
    }

    public function description() : string {
        return "Ambiance lounge avec une belle carte de cocktails";
    }

    public function position() : Position {
        return $this->position;
    }

    public function npcs() : array {
        return $this->npcs;
    }

    public function items() : array {
        return [new Doliprane()];
    }

    public function monsters() : array {
        return [];
    }
}