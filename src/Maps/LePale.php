<?php

namespace Pyl\Mud\Maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;
use Pyl\Mud\Items\Shot;
use Pyl\Mud\NpcsBlueprint;

class LePale extends NpcsBlueprint {

    private Position $position;

    public function __construct()
    {
        $this->position = new Position(3,4);
    }

    public function name() : string {
        return "LePale";
    }

    public function description() : string {
        return "Bar à bières artisanales, parfait pour les amateurs de houblon";
    }

    public function position() : Position {
        return $this->position;
    }

    public function npcs() : array {
        return $this->npcs;
    }

    public function items() : array {
        return [new Shot()];
    }

    public function monsters() : array {
        return [];
    }
}