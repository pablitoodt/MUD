<?php

namespace Pyl\Mud\Maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;
use Pyl\Mud\Items\Mojito;
use Pyl\Mud\Npcs\Goat;
use Pyl\Mud\NpcsBlueprint;

class Bartok extends NpcsBlueprint {

    private Position $position;

    public function __construct()
    {
        $this->position = new Position(0,3);
    }

    public function name() : string {
        return "Bartok";
    }

    public function description() : string {
        return "Cosy et un peu jazzy, parfait pour un verre entre amis, 30 Rue de la Paix, 37000 Tours";
    }

    public function position() : Position {
        return $this->position;
    }

    public function npcs() : array {
        return $this->npcs;
    }

    public function items() : array {
        return [new Mojito()];
    }

    public function monsters() : array {
        return [];
    }
}