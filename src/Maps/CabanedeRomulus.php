<?php

namespace Pyl\Mud\Maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;
use Pyl\Mud\Items\Shot;
use Pyl\Mud\Npcs\Goat;
use Pyl\Mud\NpcsBlueprint;

class CabanedeRomulus extends NpcsBlueprint {

    private Position $position;

    public function __construct()
    {
        $this->position = new Position(1,3);
    }

    public function name() : string {
        return "Cabane de Romulus";
    }

    public function description() : string {
        return "Conviviale, avec une terrasse agréable en été.";
    }

    public function position() : Position {
        return $this->position;
    }

    public function npcs() : array {
        return $this->npcs;
    }

    public function items() : array {
        return [new Shot()];
    }

    public function monsters() : array {
        return [];
    }
}