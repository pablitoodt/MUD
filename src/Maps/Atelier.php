<?php

namespace Pyl\Mud\Maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;
use Pyl\Mud\Items\JaggerBomb;
use Pyl\Mud\Npcs\Goat;
use Pyl\Mud\NpcsBlueprint;

class Atelier extends NpcsBlueprint {

    private Position $position;

    public function __construct()
    {
        $this->position = new Position(0,1);
    }

    public function name() : string {
        return "Atelier";
    }

    public function description() : string {
        return "Bar à vin, très chill avec une belle carte de tapas, 40 Rue de la Monnaie, 37000 Tours.";
    }

    public function position() : Position {
        return $this->position;
    }

    public function npcs() : array {
        return $this->npcs;
    }

    public function items() : array {
        return [new JaggerBomb()];
    }

    public function monsters() : array {
        return [];
    }
}