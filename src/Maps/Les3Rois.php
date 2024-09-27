<?php

namespace Pyl\Mud\Maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;
use Pyl\Mud\Items\Doliprane;
use Pyl\Mud\Npcs\Theo;
use Pyl\Mud\NpcsBlueprint;

class Les3Rois extends NpcsBlueprint {

    private Position $position;

    public function __construct()
    {
        $this->position = new Position(1,0);
    }

    public function name() : string {
        return "Les3rois";
    }

    public function description() : string {
        return "Original avec son concept de service à la pompe directement à ta table, 7 Rue Nationale, 37000 Tours";
    }

    public function position() : Position {
        return $this->position;
    }

    public function npcs() : array {
        $this->npcs[] = new Theo();
        return $this->npcs;
    }

    public function items() : array {
        return [new Doliprane()];
    }

    public function monsters() : array {
        return [];
    }
}