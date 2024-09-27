<?php

namespace Pyl\Mud\Maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;
use Pyl\Mud\Items\Biere;
use Pyl\Mud\NpcsBlueprint;

class BateauIvre extends NpcsBlueprint {

    private Position $position;

    public function __construct()
    {
        $this->position = new Position(0,4);
    }

    public function name() : string {
        return "BateauIvre";
    }

    public function description() : string {
        return "Concerts et événements culturels, très dynamique, 146 Rue Edouard Vaillant, 37000 Tours";
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