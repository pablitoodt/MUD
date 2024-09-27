<?php

namespace Pyl\Mud\Maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;
use Pyl\Mud\Items\Vodka;
use Pyl\Mud\Npcs\Goat;
use Pyl\Mud\NpcsBlueprint;

class BelleEpoque extends NpcsBlueprint {

    private Position $position;

    public function __construct()
    {
        $this->position = new Position(0,5);
    }

    public function name() : string {
        return "Belle époque";
    }

    public function description() : string {
        return "le ginTo violette t'attend";
    }

    public function position() : Position {
        return $this->position;
    }

    public function npcs() : array {
        return $this->npcs;
    }

    public function items() : array {
        return [new Vodka()];
    }

    public function monsters() : array {
        return [];
    }
}