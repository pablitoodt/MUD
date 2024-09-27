<?php

namespace Pyl\Mud\Maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;
use Pyl\Mud\Items\Rhum;
use Pyl\Mud\NpcsBlueprint;

class Newloc extends NpcsBlueprint {

    private Position $position;

    public function __construct()
    {
        $this->position = new Position(4,0);
    }

    public function name() : string {
        return "Newloc";
    }

    public function description() : string {
        return "Bar populaire avec une déco moderne, bonne ambiance en soirée";
    }

    public function position() : Position {
        return $this->position;
    }

    public function npcs() : array {
        return $this->npcs;
    }

    public function items() : array {
        return [new Rhum()];
    }

    public function monsters() : array {
        return [];
    }
}