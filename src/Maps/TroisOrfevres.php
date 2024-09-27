<?php

namespace Pyl\Mud\Maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;
use Pyl\Mud\Items\Doliprane;
use Pyl\Mud\Npcs\Goat;
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
        return $this->npcs;
    }

    public function items() : array {
        return [new Doliprane()];
    }

    public function monsters() : array {
        return [];
    }
}