<?php

namespace Pyl\Mud\Maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;
use Pyl\Mud\Items\Mojito;
use Pyl\Mud\Npcs\Goat;
use Pyl\Mud\NpcsBlueprint;

class Intrépide extends NpcsBlueprint {

    private Position $position;

    public function __construct()
    {
        $this->position = new Position(2,3);
    }

    public function name() : string {
        return "Intrépide";
    }

    public function description() : string {
        return "Moderne, bar à bières artisanales avec une belle sélection";
    }

    public function position() : Position {
        return $this->position;
    }

    public function npcs() : array {
        return $this->npcs;
    }

    public function items() : array {
        return [new Mojito()];
    }

    public function monsters() : array {
        return [];
    }
}