<?php

namespace Pyl\Mud\Maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;
use Pyl\Mud\Items\Mojito;
use Pyl\Mud\Npcs\Mayor;
use Pyl\Mud\NpcsBlueprint;

class TroisOrfevres extends NpcsBlueprint {

    private Position $position;

    public function __construct()
    {
        $this->position = new Position(4,5);
    }

    public function name() : string {
        return "TroisOrfevres";
    }

    public function description() : string {
        return "Bar à vin cosy, parfait pour une dégustation";
    }

    public function position() : Position {
        return $this->position;
    }

    public function npcs() : array {
        $this->npcs[] = new Mayor();
        return $this->npcs;
    }

    public function items() : array {
        return [new Mojito()];
    }

    public function monsters() : array {
        return [];
    }
}