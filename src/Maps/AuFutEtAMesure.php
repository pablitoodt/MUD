<?php

namespace Pyl\Mud\Maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;
use Pyl\Mud\Items\DoubleJaggerBomb;
use Pyl\Mud\Npcs\Goat;
use Pyl\Mud\NpcsBlueprint;

class AuFutEtAMesure extends NpcsBlueprint {

    private Position $position;

    public function __construct()
    {
        $this->position = new Position(0,2);
    }

    public function name() : string {
        return "Au Fût et à Mesure";
    }

    public function description() : string {
        return "Original avec son concept de service à la pompe directement à ta table, 7 Rue Nationale, 37000 Tours";
    }

    public function position() : Position {
        return $this->position;
    }

    public function npcs() : array {
        return $this->npcs;
    }

    public function items() : array {
        return [new DoubleJaggerBomb()];
    }

    public function monsters() : array {
        return [];
    }
}