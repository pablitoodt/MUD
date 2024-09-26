<?php

namespace Pyl\Mud\Npcs;

use Jugid\Staurie\Game\Npc;

class Goat extends Npc {
  public function name() : string 
  {
    return "La Chèvre";
  }
  public function description(): string
  {
    return "A goat";
  }
  public function speak(): string|array
  {
    return "Find me if you dare!";
  }
}