<?php

namespace Pyl\Mud\Maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;
use Pyl\Mud\Items\Tgv;
use Pyl\Mud\NpcsBlueprint;

class Manufacture extends NpcsBlueprint {

    private Position $position;

    public function __construct()
    {
        $this->position = new Position(3,5);
    }

    public function name() : string {
        return "Manufacture";
    }

    public function description() : string {
        return "Vient mon copaing";
    }

    public function position() : Position {
        return $this->position;
    }

    public function npcs() : array {
        return $this->npcs;
    }

    public function items() : array {
        return [new Tgv()];
    }

    public function monsters() : array {
        return [];
    }
}