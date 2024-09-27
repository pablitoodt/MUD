<?php

namespace Pyl\Mud\Maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;
use Pyl\Mud\Items\Doliprane;
use Pyl\Mud\Npcs\Goat;

class AuFutEtAMesure extends Blueprint {

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
        return [new Goat()];
    }

    public function items() : array {
        return [new Doliprane()];
    }

    public function monsters() : array {
        return [];
    }
}