<?php

namespace Pyl\Mud\Npcs;

use Jugid\Staurie\Game\Npc;

class Pablo extends Npc {
  public function name() : string 
  {
    return "Pablo";
  }
  public function description(): string
  {
    return "Tours's citizen";
  }
  public function speak(): string|array
  {
    return "Hi my friend!";
  }
}