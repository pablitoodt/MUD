<?php

namespace Pyl\Mud\Maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;
use Pyl\Mud\Items\JaggerBomb;
use Pyl\Mud\Npcs\Pablo;
use Pyl\Mud\NpcsBlueprint;

class SerpentVolant extends NpcsBlueprint {

    private Position $position;

    public function __construct()
    {
        $this->position = new Position(4,3);
    }

    public function name() : string {
        return "SerpentVolant";
    }

    public function description() : string {
        return "Plutôt intimiste, idéal pour des cocktails originaux";
    }

    public function position() : Position {
        return $this->position;
    }

    public function npcs() : array {
        $this->npcs[] = new Pablo();
        return $this->npcs;
    }

    public function items() : array {
        return [new JaggerBomb()];
    }

    public function monsters() : array {
        return [];
    }
}