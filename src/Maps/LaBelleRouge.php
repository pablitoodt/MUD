<?php

namespace Pyl\Mud\Maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;
use Pyl\Mud\Items\Vodka;
use Pyl\Mud\Npcs\Goat;
use Pyl\Mud\NpcsBlueprint;

class LaBelleRouge extends NpcsBlueprint {

    private Position $position;

    public function __construct()
    {
        $this->position = new Position(2,4);
    }

    public function name() : string {
        return "La Belle Rouge";
    }

    public function description() : string {
        return "Ambiance festive et décontractée, idéale pour des soirées entre amis";
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