<?php

namespace Pyl\Mud\maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;
use Pyl\Mud\Items\Doliprane;
use Pyl\Mud\Npcs\Goat;

class Cabane extends Blueprint {

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
        return [new Goat()];
    }

    public function items() : array {
        return [new Doliprane()];
    }

    public function monsters() : array {
        return [];
    }
}