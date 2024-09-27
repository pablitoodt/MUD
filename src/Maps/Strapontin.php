<?php

namespace Pyl\Mud\Maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;
use Pyl\Mud\Items\Doliprane;
use Pyl\Mud\Items\Shot;
use Pyl\Mud\Npcs\Goat;
use Pyl\Mud\NpcsBlueprint;

class Strapontin extends NpcsBlueprint {

    private Position $position;

    public function __construct()
    {
        $this->position = new Position(4,4);
    }

    public function name() : string {
        return "Strapontin";
    }

    public function description() : string {
        return "Petit bar intimiste, parfait pour une soirée tranquille";
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