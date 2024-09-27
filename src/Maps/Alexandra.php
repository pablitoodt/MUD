<?php

namespace Pyl\Mud\Maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;
use Pyl\Mud\Items\Doliprane;
use Pyl\Mud\Npcs\Lucas;
use Pyl\Mud\NpcsBlueprint;

class Alexandra extends NpcsBlueprint {

    private Position $position;

    public function __construct()
    {
        $this->position = new Position(3,5);
    }

    public function name() : string {
        return "alexandra";
    }

    public function description() : string {
        return "Au alexandra la cuite t'y attendra";
    }

    public function position() : Position {
        return $this->position;
    }

    public function npcs() : array {
        $this->npcs[] = new Lucas();
        return $this->npcs;
    }

    public function items() : array {
        return [new Doliprane()];
    }

    public function monsters() : array {
        return [];
    }
}