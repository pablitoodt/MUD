<?php

namespace Pyl\Mud\maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;
use Pyl\Mud\Items\Rhum;
use Pyl\Mud\Npcs\Goat;
use Pyl\Mud\NpcsBlueprint;

class Cabane extends NpcsBlueprint {

    private Position $position;

    public function __construct()
    {
        $this->position = new Position(1,2);
    }

    public function name() : string {
        return 'Cabane map';
    }

    public function description() : string {
        return 'This is a test map. This is a description where you can set a context element for users';
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