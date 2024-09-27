<?php

namespace Pyl\Mud\Maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;
use Pyl\Mud\Items\JaggerBomb;
use Pyl\Mud\NpcsBlueprint;

class LaReserve extends NpcsBlueprint {

    private Position $position;

    public function __construct()
    {
        $this->position = new Position(3,0);
    }

    public function name() : string {
        return "LaReserve";
    }

    public function description() : string {
        return "Bar à cocktail élégant, parfait pour une soirée plus sophistiquée";
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