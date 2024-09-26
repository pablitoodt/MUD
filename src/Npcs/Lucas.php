<?php

namespace Pyl\Mud\Npcs;

use Jugid\Staurie\Game\Npc;

class Lucas extends Npc {
  public function name() : string 
  {
    return "Lucas";
  }
  public function description(): string
  {
    return "Tours's citizen";
  }
  public function speak(): string|array
  {
    return "Hello my friend!";
  }
}