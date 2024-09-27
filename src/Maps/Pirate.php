<?php

namespace Pyl\Mud\Maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;
use Pyl\Mud\Items\Vodka;
use Pyl\Mud\Npcs\Lucas;
use Pyl\Mud\NpcsBlueprint;

class Pirate extends NpcsBlueprint {

    private Position $position;

    public function __construct()
    {
        $this->position = new Position(0,0);
    }

    public function name() : string {
        return 'Pirate';
    }

    public function description() : string {
        return 'Bienvenue au Pirate! Installe toi et goûte a nos doux breuvages.';
    }

    public function position() : Position {
        return $this->position;
    }

    public function npcs() : array {
        $this->npcs[] = new Lucas();
        return $this->npcs;
    }

    public function items() : array {
        return [new Vodka()];
    }

    public function monsters() : array {
        return [];
    }
}