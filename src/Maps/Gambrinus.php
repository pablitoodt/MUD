<?php

namespace Pyl\Mud\Maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;
use Pyl\Mud\Items\EauDeVie;
use Pyl\Mud\Npcs\Goat;
use Pyl\Mud\NpcsBlueprint;

class Gambrinus extends NpcsBlueprint {

    private Position $position;

    public function __construct()
    {
        $this->position = new Position(2,0);
    }

    public function name() : string {
        return "Gambrinus";
    }

    public function description() : string {
        return "Bar à bières avec une belle sélection internationale";
    }

    public function position() : Position {
        return $this->position;
    }

    public function npcs() : array {
        return $this->npcs;
    }

    public function items() : array {
        return [new EauDeVie()];
    }

    public function monsters() : array {
        return [];
    }
}