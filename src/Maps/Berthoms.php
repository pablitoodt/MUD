<?php

namespace Pyl\Mud\Maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;
use Pyl\Mud\Items\Ricard;
use Pyl\Mud\NpcsBlueprint;

class Berthoms extends NpcsBlueprint {

    private Position $position;

    public function __construct()
    {
        $this->position = new Position(1,1);
    }

    public function name() : string {
        return "Berthoms";
    }

    public function description() : string {
        return "un grand choix de bières, ambiance plutôt détendue, 39 Rue du Grand Marché, 37000 Tours";
    }

    public function position() : Position {
        return $this->position;
    }

    public function npcs() : array {
        return $this->npcs;
    }

    public function items() : array {
        return [new Ricard()];
    }

    public function monsters() : array {
        return [];
    }
}