<?php

namespace Pyl\Mud\Maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;
use Pyl\Mud\Items\Tgv;
use Pyl\Mud\Npcs\Pablo;
use Pyl\Mud\NpcsBlueprint;

class LeCafeMarcel extends NpcsBlueprint {

    private Position $position;

    public function __construct()
    {
        $this->position = new Position(3,1);
    }

    public function name() : string {
        return "LeCafeMarcel";
    }

    public function description() : string {
        return "Familial et chaleureux, situé dans le centre historique";
    }

    public function position() : Position {
        return $this->position;
    }

    public function npcs() : array {
        $this->npcs[] = new Pablo();
        return $this->npcs;
    }

    public function items() : array {
        return [new Tgv()];
    }

    public function monsters() : array {
        return [];
    }
}