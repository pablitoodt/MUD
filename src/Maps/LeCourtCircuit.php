<?php

namespace Pyl\Mud\Maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;
use Pyl\Mud\Items\DoubleJaggerBomb;
use Pyl\Mud\NpcsBlueprint;

class LeCourtCircuit extends NpcsBlueprint {

    private Position $position;

    public function __construct()
    {
        $this->position = new Position(3,2);
    }

    public function name() : string {
        return "LeCourtCircuit";
    }

    public function description() : string {
        return "Un bar associatif et militant, ambiance engagée et conviviale";
    }

    public function position() : Position {
        return $this->position;
    }

    public function npcs() : array {
        return $this->npcs;
    }

    public function items() : array {
        return [new DoubleJaggerBomb()];
    }

    public function monsters() : array {
        return [];
    }
}