<?php

namespace Pyl\Mud\Maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;
use Pyl\Mud\Items\Ricard;
use Pyl\Mud\NpcsBlueprint;

class LeHaka extends NpcsBlueprint {

    private Position $position;

    public function __construct()
    {
        $this->position = new Position(3,3);
    }

    public function name() : string {
        return "LeHaka";
    }

    public function description() : string {
        return "Bar sportif, ambiance énergique pendant les matchs";
    }

    public function position() : Position {
        return $this->position;
    }

    public function npcs() : array {
        return $this->npcs;
    }

    public function items() : array {
        return [new Ricard()];
    }

    public function monsters() : array {
        return [];
    }
}