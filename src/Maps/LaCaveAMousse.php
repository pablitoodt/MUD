<?php

namespace Pyl\Mud\Maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;
use Pyl\Mud\Items\Biere;
use Pyl\Mud\NpcsBlueprint;

class LaCaveAMousse extends NpcsBlueprint {

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
        return $this->npcs;
    }

    public function items() : array {
        return [new Biere()];
    }

    public function monsters() : array {
        return [];
    }
}